<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use euro_hms\Models\User;
use euro_hms\Custom\Helper\Common;
use euro_hms\Mail\SendMail;
use Storage;
// use euro_hms\Models\Report;
use DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('/appointmentBook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd()
      $data = $request->all();
      // dd($data);
         $dataArray = array();
         $ddata = array();
         $ddArray = [
            'start_date' => 'Start date',
            'end_date' => 'End date',
            'name_hospital' => 'Name of the Hospital',
            'total_beds' => 'Total number of hospital beds',
            'total_icu_beds' => 'Total number of ICU beds',
            'total_non_icu_beds' => 'Total number of non-ICU beds',
            'avg_doctors' => 'Average number of Doctors on hospital rolls at any point of time',
            'avg_nurses' => 'Average number of Nurses on hospital rolls at any point of time',
            'total_ot' => 'Total number of operation theatre tables',
            'avg_patients_visiting_opd' => 'Average number of patients visiting OPD/day',
            'avg_admissions_per_day' => 'Average number of admissions/day',
            'avg_patients_visiting_opd' => 'Average number of elective surgeries/day',
            'avg_patients_visiting_emergency' => 'Average number of emergency surgeries/day',
            'avg_surgeries' => 'Average number of day care surgeries/day',
            'avg_units_water' => 'Average units of water consumed/month',
            'avg_electricity' => 'Average units of electricity consumed/month',
        ];
            $otherParams = [
              'sheetTitle' => "NABH Report",
              'sheetName' => "NABH Report",
              'boldLastRow' => false
            ];

            foreach ($data as $key => $value) {
                # code...
                // dd($key);
                $keyData = isset($ddArray[$key]) ? $ddArray[$key]: $key; 
                $ddata = [
                    $key,
                    $value
                ];
                // echo "<pre>";print_r($value);echo "</pre>";exit;
             array_push($dataArray, $ddata);
            }

            $lableArray = [
              'Title',
              'val'
            ];
            //Total Stakes, Total Revenue, Amount & Balance fields are set as Number statically.
            \euro_hms\Custom\Helper\Common::toExcel($lableArray,$dataArray,$otherParams,'csv','yes');
            $url = Storage::url('exports/nabh-report.csv');
            // dd($url);

             Common::sendMail($data,'krunal.parikh271@gmail.com', 'test mail','emails.success_reset','krunal.parikh271@gmail.com');
         // }

        // if ($reportData) {
          return ['status_code' => '200', 'message' => '','data'=>$data];
        // }

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

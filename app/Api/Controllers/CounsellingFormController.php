<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use euro_hms\Models\User;
use euro_hms\Models\CounsellingForm;
use DB;

class CounsellingFormController extends Controller
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
        return view('/counsellingForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all()['counsellingFormData'];
      // dd($data);

      for ($i=0; $i < 6; $i++) {
        $counsellingFormCreate = CounsellingForm::create([
          // 'date' => $request->date,
          // 'time' => $request->time,
          'date' => $data['date_0'.$i],
          'time' => $data['time_0'.$i],
          'counsellor' => $data['counsellor_0'.$i],
          'relatives_name' => $data['relatives_name_0'.$i],
          'remarks' => $data['remarks_0'.$i],
        ]);

      }
      if ($counsellingFormCreate) {
        return ['code' => '200','CounsellingForm'=>$counsellingFormCreate->id, 'message' => 'Data Sucessfully Inserted'];
      }
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

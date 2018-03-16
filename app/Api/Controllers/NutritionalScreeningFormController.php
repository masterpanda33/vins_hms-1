<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use euro_hms\Models\User;
use euro_hms\Models\NutritionalScreeningForm ;
use DB;

class NutritionalScreeningFormController extends Controller
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
        return view('/NutritionalScreeningForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all()['NutritionalScreeningForm'];
      // dd($data);
      $nutritionalScreeningFormCreate = NutritionalScreeningForm::create([
        // 'date' => $request->date,
        // 'time' => $request->time,
        'type_of_diet' => $data['type_of_diet'],
        'date_of_screening' => $data['date_of_screening'],
        'weight_loss' => $data['weight_loss'],
        'emaciated' => $data['emaciated'],
        'mental_orientation' => $data['mental_orientation'],
        'mode_of_feeding' => $data['mode_of_feeding'],
        'food_to_be_avoided' => $data['food_to_be_avoided'],
        'nursing_care_plan' => $data['nursing_care_plan'],
        'assessment_done_by' => $data['assessment_done_by'],
        'date_nursing' => $data['date_nursing'],
        'time_nursing' => $data['time_nursing'],
      ]);
      if ($nutritionalScreeningFormCreate) {
          return ['status' => '200','NutritionalScreeningForm'=>$nutritionalScreeningFormCreate->id, 'message' => 'Data Sucessfully InCreate'];
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

<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use euro_hms\Models\User;
use euro_hms\Models\InformationForm ;
use DB;

class InformationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('/informationForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all()['informationFormData'];
      // dd($data);
      $informationFormCreate = InformationForm::create([
        // 'date' => $request->date,
        // 'time' => $request->time,
        'date' => $data['date'],
        'time' => $data['time'],
        '_00' => $data['_00'],
        '_01' => $data['_01'],
        'major_illness' => $data['major_illness'],
        '_02' => $data['_02'],
        '_03' => $data['_03'],
        '_04' => $data['_04'],
        '_05' => $data['_05'],
        '_06' => $data['_06'],
        '_07' => $data['_07'],
        '_08' => $data['_08'],
        '_09' => $data['_09'],
        'operated_in_past' => $data['operated_in_past'],
        '_10' => $data['_10'],
        '_10a' => $data['_10a'],
        '_10b' => $data['_10b'],
        'taking_drugs_at_present' => $data['taking_drugs_at_present'],
        '_11' => $data['_11'],
        'name_of_patient' => $data['name_of_patient'],
        'name_of_relative' => $data['name_of_relative'],
      ]);
      if ($informationFormCreate) {
          return ['code' => '200','informationFormData'=>$informationFormCreate->id, 'message' => 'Data Sucessfully InCreate'];
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

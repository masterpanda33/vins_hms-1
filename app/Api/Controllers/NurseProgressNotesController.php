<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use euro_hms\Models\User;
use euro_hms\Models\NurseProgressNotes;
use DB;

class NurseProgressNotesController extends Controller
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
        return view('/NurseProgressNotes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all()['NurseProgressNotes'];
      // dd($data);

      for ($i=0; $i < 5; $i++) {
        $nurseProgressNotesCreate = NurseProgressNotes::create([
          // 'date' => $request->date,
          // 'time' => $request->time,
          'date' => $data['date_0'.$i],
          'time' => $data['time_0'.$i],
          'progress' => $data['progress_0'.$i],
          'staff_name' => $data['staff_name_0'.$i],
        ]);

      }
      if ($nurseProgressNotesCreate) {
        return ['code' => '200','NurseProgressNotes'=>$nurseProgressNotesCreate->id, 'message' => 'Data Sucessfully Inserted'];
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

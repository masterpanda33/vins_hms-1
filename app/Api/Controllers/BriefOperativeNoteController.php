<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use euro_hms\Models\User;
use euro_hms\Models\BriefOperativeNote;
use DB;


class BriefOperativeNoteController extends Controller
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
        //
        return view('/briefOperativeNote');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $data = $request->all()['briefOperativeNoteData'];
          // dd($data);
          $briefOperativeNoteCreate = BriefOperativeNote::create([
            // 'date' => $request->date,
            // 'time' => $request->time,
            'briefoperativenote' =>$data['briefoperativenote'],
            'post_operative_clinical_status'  =>$data['post_operative_clinical_status'],
            'post_operative_orders' =>$data['post_operative_orders'],
          ]);
        if ($briefOperativeNoteCreate) {
              return ['code' => '200','briefOperativeNoteData'=>$briefOperativeNoteCreate->id, 'message' => 'Data Sucessfully Inserted'];
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

<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use euro_hms\Models\User;
use euro_hms\Models\TransfusionReactionForm;
use DB;

class TransfusionReactionFormController extends Controller
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
        return view('/transfusionReactionForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //// echo "<pre>";print_r($request->all());echo "</pre>";
        // dd($request->all());
        $data = $request->all()['transfusionReactionFormData'];
        // dd($data);
        $transfusionReactonFormCreate = TransfusionReactionForm::create([
          // 'date' => $request->date,
          // 'time' => $request->time,
          'heap_no'=> $data['heap_no'],
          's_no'=> $data['s_no'],
          'blood_bage_no'=> $data['blood_bage_no'],
          'quantity'=> $data['quantity'],
          'group'=> $data['group'],
          'date'=> $data['date'],
          'date_issue'=> $data['date_issue'],
          'time_issue'=> $data['time_issue'],
          'matched_by'=> $data['matched_by'],
          'com_name'=> $data['com_name'],
          'age'=> $data['age'],
          'ward_no'=> $data['ward_no'],
          'med_officer'=> $data['med_officer'],
          '_no'=> $data['_no'],
          'name_00'=> $data['name_00'],
          'med_officer_00'=> $data['med_officer_00'],
          'time_00'=> $data['time_00'],
          'chill_temp'=> $data['chill_temp'],
          'finish_time'=> $data['finish_time'],
          'bp_fall'=> $data['bp_fall'],
          'drop_rate'=> $data['drop_rate'],
          'urticaria'=> $data['urticaria'],
          'notice'=> $data['notice'],
          'chest_pain'=> $data['chest_pain'],
          'measures'=> $data['measures'],
          'dyspnoea_shock'=> $data['dyspnoea_shock'],
          'anphytaxix'=> $data['anphytaxix'],
          'rel_cmnt'=> $data['rel_cmnt'],
          'sign_00'=> $data['sign_00'],
        ]);
      if ($transfusionReactonFormCreate) {
            return ['code' => '200','transfusionReactionFormData'=>$transfusionReactonFormCreate->id, 'message' => 'Data Sucessfully Inserted'];
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

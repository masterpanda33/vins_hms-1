<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use euro_hms\Models\User;
use euro_hms\Models\CodeBlueEvaluationForm;
use Illuminate\Routing\Controller;
use DB;


class CodeBlueEvaluationFormController extends Controller
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
        return view('/codeBlueEvaluationForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $data = $request->all()['codeBlueEvaluationData'];
            // dd($data);
            $codeBlueEvaluationFormCreate = CodeBlueEvaluationForm::create([
              'drill'=>$data['drill'],
              'actual_code_blue'=>$data['actual_code_blue'],
              'identify_cardiac_arrest'=>$data['identify_cardiac_arrest'],
              'comments_00'=>$data['comments_00'],
              'cpr_begin'=>$data['cpr_begin'],
              'comments_01'=>$data['comments_01'],
              'codeblue_announced'=>$data['codeblue_announced'],
              'comments_02'=>$data['comments_02'],
              'nurse_lead'=>$data['nurse_lead'],
              'comments_03'=>$data['comments_03'],
              'chest_compression'=>$data['chest_compression'],
              'comments_04'=>$data['comments_04'],
              'airway_established'=>$data['airway_established'],
              'comments_05'=>$data['comments_05'],
              'codeblue_team_arrive'=>$data['codeblue_team_arrive'],
              'comments_06'=>$data['comments_06'],
              'chest_compression_way'=>$data['chest_compression_way'],
              'comments_07'=>$data['comments_07'],
              'able_to_locate'=>$data['able_to_locate'],
              'comments_08'=>$data['comments_08'],
              'documentation_complete'=>$data['documentation_complete'],
              'comments_09'=>$data['comments_09'],
            ]);
          if ($codeBlueEvaluationFormCreate) {
                return ['code' => '200','codeBlueEvaluationData'=>$codeBlueEvaluationFormCreate->id, 'message' => 'Data Sucessfully Inserted'];
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

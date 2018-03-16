<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

// Need to Define Only Contracts
use euro_hms\Api\Contracts\UserContract;

use JWTAuth;
use euro_hms\Models\User;
use euro_hms\Api\Repositories\UserRepository;

class DoctorsInitialAssessmentController extends Controller
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
        return view('/DoctorsInitialAssessment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      dd($request->all());
      $assessmentData = DoctorsInitialAssessment::create(array(
        'history' => $request->history,
        'past_history' => $request->past_history,
        'allergic_history' => $request->allergic_history,
        'name_informant' => $request->name_informant,
        'brought_by' => $request->brought_by,
        'place_of_accident' => $request->place_of_accident,
        'current_time' => $request->current_time,
        'current_date' => $request->current_date,
        'mlc' => $request->mlc,
        'loc' => $request->loc,
        'ent_bleeding' => $request->ent_bleeding,
        'seizures' => $request->seizures,
        'vomiting' => $request->vomiting,
        'pulse' => $request->pulse,
        'temp' => $request->temp,
        'bp' => $request->bp,
        'spo2' => $request->spo2,
        'rbs' => $request->rbs,
        'pain' => $request->pain,
        'gcs_e' => $request->gcs_e,
        'gcs_m' => $request->gcs_m,
        'gcs_v' => $request->gcs_v,
        'systematic_examination' => $request->systematic_examination,
        'any_other' => $request->any_other,
        'treated_on_admission' => $request->treated_on_admission,
        'shifted_to' => $request->shifted_to,
      ));
      if ($assessmentData) {
            return ['code' => '200','pitchId'=>$assessmentData->id, 'message' => 'Data Sucessfully Inserted'];
        }

      // return view('/Index');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\personal_info;
use  App\Models\eductional_info;
use  App\Models\destination_institution;
use  App\Models\client_request;

class offcil extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'firstname'=> "required",
            'fathername'=> "required",
            'lastname'=> "required",
            'email'=>"required",            
            'admissiontype'=>"required",
            'degreetype'=>"required",
            'college'=>"required",
            'department'=>"required",
            'studentstatus'=>"required",
            'ordertype'=>"required",
            'institute'=>"required",
            'addressinstitute'=>"required",
            'mailingagent'=>"required",
        ]);
        
        //crete tble
        $person_info=new personal_info;
            $person_info->firstname=$request->firstname;
            $person_info->fathername=$request->fathername;
            $person_info->lastname=$request->lastname;
            $person_info->idnumber=$request->idnumber;
            $person_info->email=$request->email;

        $person_info->save();

        $education_info=new eductional_info;

            $education_info->admition_type=$request->admissiontype;
            $education_info->personal_info_id=$person_info->id;
            $education_info->degree_type=$request->degreetype;
            $education_info->college=$request->college;
            $education_info->department=$request->department;
        
        $education_info->save();

        $destintion_inst=new destination_institution;

            $destintion_inst->Name=$request->institute;
            $destintion_inst->personal_info_id=$person_info->id;
            $destintion_inst->Address=$request->addressinstitute;
            $destintion_inst->Mailing_Agent=$request->mailingagent;
        
        $destintion_inst->save();

        $client_request=new client_request;
            $client_request->personal_info_id=$person_info->id;
            $client_request->Service_Type="Official Transcript";
            $client_request->Status="pending";
        
        $client_request->save();


        return redirect("/offcial_transcript")->with( "success","Request sucessfully sent");
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

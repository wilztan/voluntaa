<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\JobType;
use App\ JobTransaction;
use Auth;

class JobsTransactionController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        JobTransaction::create([
            'user_id'=>Auth::User()->id,
            'jobs_id'=>$id,
            'status'=>'waiting',
            ]);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobs = JobTransaction::Join('jobs','job_transactions.jobs_id','=','jobs.idjobs')->where('company_id','=',$id)->where('job_transactions.status','=','waiting')->get();
        return view('jobs.jobsApprove')->with('job',$jobs);
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
        $trans = JobTransaction::where('idjobstrans','=',$id);
        $trans->update([
            'status'=>'doing',
            ]);
        Jobs::Where('idjobs','=',$trans->jobs_id)->update([
            'status','=','doing',
            ]);
        return redirect()->back();
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

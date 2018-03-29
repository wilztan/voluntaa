<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Job;
use App\JobType;
use App\ JobTransaction;
use Auth;

class JobsController extends Controller
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
        $jobs = Job::where('idjobs','=',$id)->first();
        $trans = JobTransaction::where('jobs_id','=',$id)->where('user_id','=',Auth::User()->id)->count();
        $status="not applied";
        if($trans!=0)
            $status ="you already applied, please wait for confirmation";

        return view('jobs.jobsView')->with('job',$jobs)->with('status',$status);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobs = job::join('job_types','job_types.id','=','jobs.idjobs')->where('idjobs','=',$id)->first();
        $type = JobType::all();
        return view('jobs.jobsEdit')->with('jobs',$jobs)->with('type',$type);
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
        Job::where('idjobs','=',$id)->update([
            'name'=>$request->name,
            'jobtype_id'=>$request->type,
            'jobs_requirement'=>$request->requirement,
            'description'=>$request->desc,
            'price'=>$request->price,
            'location'=>$request->location,
            ]);
        return redirect()->action('CompanyController@show',$id)->with('message','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::where('idjobs','=',$id)->update(['status'=>'canceled']);
        return redirect()->back()->with('message','ok');

    }

    public function addJob($id)
    {
        $company = Company::where('idcompanies','=',$id)->first();
        $type = JobType::all();
        return view('jobs.jobsCreate')->with('company',$company)->with('type',$type);
    }

    public function addJobpost(Request $request, $id)
    {
        $data = Job::create([
            'user_id'=>Auth::User()->id,
            'name'=>$request->name,
            'jobtype_id'=>$request->type,
            'jobs_requirement'=>$request->requirement,
            'description'=>$request->desc,
            'status'=>'started',
            'price'=>$request->price,
            'location'=>$request->location,
            'company_id'=>$id,
            ]);
        return redirect()->action('CompanyController@show',$id)->with('message','ok');
    }
}

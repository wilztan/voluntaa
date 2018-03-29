<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\CompanyRole;
use App\Job;
use Auth;
use View;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = CompanyRole::where('user_id','=',Auth::User()->id)->get();
        $company = CompanyRole::Join('companies','companies.idcompanies','=','company_roles.company_id')->where('user_id','=',Auth::User()->id)->get();
        return view('company.companyOption')->with('role',$role)->with('company',$company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.companyCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = Company::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'websites'=>$request->websites,
            'status'=>'company',
            ]);
        $role = CompanyRole::create([
            'company_id'=>$company->id,
            'user_id'=>Auth::User()->id,
            'company_role'=>$request->role,
            'status'=>'approved',
            ]);
        return Redirect()->action('CompanyController@index')->with('message','Company Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::where('idcompanies','=',$id)->first();
        $status= "Not_admin";
        if(!empty(CompanyRole::where('user_id','=',Auth::User()->id)->where('company_id','=',$id)->first())){
            $status = "admin";
        }
        $jobs = job::join('job_types','jobs.jobtype_id','=','job_types.id')->where('company_id','=',$id)->get();
        $jobs2= job::join('job_transactions','jobs.idjobs','=','job_transactions.jobs_id')->where('company_id','=',$id)->where('job_transactions.status','=','doing')->get();
        return view('company.companyProfile')
        ->with('company',$company)
        ->with('jobs',$jobs)
        ->with('jobs2',$jobs2)
        ->with("status",$status);   
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

    public function joinCompany(Request $request)
    {
        $data = '%'.$request->join.'%';
        $company = Company::where('name','like',$data)->get();
        return view('company.companyFind')->with('company',$company);
    }
}

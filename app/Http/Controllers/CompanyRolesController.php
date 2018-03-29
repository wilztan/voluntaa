<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\CompanyRole;
use Auth;

class CompanyRolesController extends Controller
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

    public function join($id)
    {
        $data = Company::where('idcompanies','=',$id)->first();
        return view('company.companyJoin')->with('data',$data);
    }

    public function joinfail($id)
    {
        $data = Company::where('idcompanies','=',$id)->first();
        return view('company.companyJoin')->with('data',$data);
    }

    public function storeNew(Request $request, $id)
    {
        $company = Company::where('idcompanies','=',$id)->first();
        if($company->password == $request->password){
            CompanyRole::create([
                'company_id'=>$id,
                'user_id'=>Auth::User()->id,
                'company_role'=>$request->role,
                'status'=>'approved',
                ]);
            return redirect()->action('CompanyController@index');
        }
        return redirect()->action('CompanyRolesController@joinfail',['id'=>$id]);
    }
}

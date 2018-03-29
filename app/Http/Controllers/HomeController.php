<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\JobTransaction;
use App\Company;
use App\Job;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job1= JobTransaction::Where('user_id','=',Auth::User()->id)->where('status','=','waiting')->get();
        $job2= JobTransaction::Where('user_id','=',Auth::User()->id)->where('status','=','doing')->get();
        $job3= JobTransaction::Where('user_id','=',Auth::User()->id)->where('status','=','done')->get();
        return view('home')
        ->with('job1',$job1)
        ->with('job3',$job3)
        ->with('job2',$job2)
        ;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;
use App\User;
use App\JobType;
use App\Job;
use App\Relation;
use Auth;
// use Intervention\Image\Facades\Image as Image;
// use ImageIntervention;

class OtherController extends Controller
{
    public function home()
    {
        $job=JobType:://orderBy('id', 'asc')
        orderByRaw("RAND()")
        ->where('type','!=','Other')
        ->limit(7)
        ->get();
        return view('welcome')->with('jobs',$job);
    }

    public function setPhoto()
    {
        return view('auth.setPhoto');
    }

    public function setNewPhoto(Request $request, $id)
    {
        if (!empty( $request->imgUrl)) {
            $imgUrl=$request->file('imgUrl')->move('public/img/users/',$id.".tmp");
            User::find($id)->update(['imgUrl'=>'public/img/users/'.$id.".tmp"]);
        }
        return view('auth.editprofile');
    }


    public function search(Request $request)
    {
        $friends = User::where('name','like','%'.$request->search.'%')->where('id','!=',Auth::user()->id)->get();;
        return view('friend.friendsResult')->with('friend',$friends);
    }

    public function jobsSeeAll()
    {
        $jobs = JobType::all();
        return view('jobs.jobsApply',compact('jobs'));
    }

    public function jobsList($id)
    {
        $jobs = Job::where('jobtype_id','=',$id)->where('status','=','started')->get();
        $jobType = JobType::where('id','=',$id)->first();
        return view('jobs.jobsList')->with('type',$jobType)->with('jobs',$jobs);
    }

    public function searchJobs(Request $request)
    {
        $jobs = Job::where('name','like','%'.$request->search.'%')
        ->orWhere('jobs_requirement','like','%'.$request->search.'%')
        ->orWhere('description','like','%'.$request->search.'%')
        ->get();
        return view('jobs.jobsSearch')->with('jobs',$jobs);
    }
}

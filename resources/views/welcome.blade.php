@extends('layouts.app')

@section('content')
<div class="main">
    <div class="container">
        <div class="content" align="center">
            <h1 id="ut_word_rotator_1">Find Best Volunteer and Freelance Jobs</h1>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    {!! Form::open([
                        'action'=>'OtherController@searchJobs',
                        'method'=>'POST',
                        ]) !!}
                    <input type="text" name="search" id="input" class="form-control search-jobs" placeholder="Search Jobs Now" value="" required="required" title="">
                    <br>
                    {!! Form::submit('Search', [
                        'class'=>'btn btn-submit btn-search-jobs',
                    ]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popularjob container">
    <div class="row " align="center">
        <h3>Browse Our Most Popular Jobs</h3>

        @foreach($jobs as $data)
        <div class="col-md-3">
            <div class="card">
                    <img class="item-images" src="{{ asset($data->imgUrl) }}" alt="Avatar" style="width:100%">
                    <div class=".container-card item-content">
                        <h4><b>{{$data->type}}</b></h4> 
                        <a href="{{action('OtherController@jobsList',$data->id)}}">Check It Out</a>
                    </div>
            </div>
        </div>
        @endforeach

        <div class="col-md-3">
            <div class="card">
                    <img class="item-images" src="{{ asset('public/img/web/mobile.jpg') }}" alt="Avatar" style="width:100%">
                    <div class=".container-card item-content">
                        <h4><b>See More</b></h4> 
                        <a href="{{action('OtherController@jobsSeeAll')}}">Check It Out</a>
                    </div>
            </div>
        </div>

    </div>
</div>

<div class="why">
    <div class="container" align="center">
        <h3>About Voluntaa</h3>
        <div class="row">
            <div class="col-md-4">
                <h4>Best Providing</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-4">
                <h4>Best Providing</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-4">
                <h4>Best Providing</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>

<div class="pretransition"></div>
<div class="transition"></div>

@endsection

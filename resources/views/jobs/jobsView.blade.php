@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                	<h3>{{$job->name}} <small>created at : {{$job->created_at}}</small></h3><br>
                	<span>Location : {{$job->location}}</span><br>
                	<span>Price :{{$job->price}}</span><br>
                	<span>Requirement : {{$job->jobs_requirement}}</span><br><br>
                	<p>Description : {{$job->description}}</p>
                	@if($status=="not applied")
                		<a href="{{action('JobsTransactionController@show',$job->idjobs)}}" class="btn btn-primary">Get Job</a>
                	@else
                	{{$status}}
                	@endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

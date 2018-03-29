@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">

                	<div class="row">
                		<div class="col-md-4" align="center">
                			<img class="profile-pic" src="{{ asset(Auth::User()->imgUrl) }}">
                		</div>
                		<div class="col-md-8">
                			<div class="well">
                				Profile Information
                			</div>
                			<table class="table table-hover">
                				<tbody>
                					<tr>
                						<td>Name</td>
                						<td>{{Auth::User()->name}}</td>
                					</tr>
                					<tr>
                						<td>Address</td>
                						<td>{{Auth::User()->address}}</td>
                					</tr>
                					<tr>
                						<td>Phone</td>
                						<td>{{Auth::User()->phone}}</td>
                					</tr>
                					<tr>
                						<td>Email</td>
                						<td>{{Auth::User()->email}}</td>
                					</tr>
                					<tr>
                						<td>Location</td>
                						<td>{{Auth::User()->location}}</td>
                					</tr>
                					<tr>
                						<td>Edit Your Profile</td>
                						<td><a href="{{action('UserController@edit',Auth::User()->id)}}">Edit Now</a></td>
                					</tr>
                				</tbody>
                			</table>
                		</div>
                	</div>

                	<div class="row">
                		<h3>Your Current Task</h3>
                		<div role="tabpanel">
                			<!-- Nav tabs -->
                			<ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#done" aria-controls="Note" role="tab" data-toggle="tab">Jobs Done</a>
                                </li>
                				<li role="presentation">
                					<a href="#Job_To_Do_List" aria-controls="Job_To_Do_List" role="tab" data-toggle="tab">Job To Do List</a>
                				</li>
                				<li role="presentation">
                					<a href="#waitingList" aria-controls="Note" role="tab" data-toggle="tab">Waiting List</a>
                				</li>
                			</ul>
                		
                			<!-- Tab panes -->
                			<div class="tab-content">
                				<div role="tabpanel" class="tab-pane" id="Job_To_Do_List">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Jobs</th>
                                                <th>Salary</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($job2 as $data)
                                            <tr>
                                                <td>{{App\Job::where('idjobs','=',$data->jobs_id)->first()->name}}</td>
                                                <td>{{App\Job::where('idjobs','=',$data->jobs_id)->first()->price}}</td>
                                                <td>{{$data->status}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                				</div>


                				<div role="tabpanel" class="tab-pane active" id="done">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Jobs</th>
                                                <th>Salary</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($job3 as $data)
                                            <tr>
                                                <td>{{App\Job::where('idjobs','=',$data->jobs_id)->first()->name}}</td>
                                                <td>{{App\Job::where('idjobs','=',$data->jobs_id)->first()->price}}</td>
                                                <td>{{$data->status}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                				</div>
                                <div role="tabpanel" class="tab-pane" id="waitingList">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Jobs</th>
                                                <th>Salary</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($job1 as $data)
                                            <tr>
                                                <td>{{App\Job::where('idjobs','=',$data->jobs_id)->first()->name}}</td>
                                                <td>{{App\Job::where('idjobs','=',$data->jobs_id)->first()->price}}</td>
                                                <td>{{$data->status}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                			</div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

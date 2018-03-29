@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                	<div class="row">

	                	<h3 align="center">{{$company->name}}</h3>
                		<div class="col-md-6">
	                       phone : {{$company->phone}}<br>
	                       Email : {{$company->email}}<br>
	                       Address : {{$company->address}}<br>
                		</div>

                		<div class="col-md-6">
                		@if ($status =="admin")
                			<a href="{{action('JobsController@addJob',$company->idcompanies)}}" class="btn btn-primary">Add New Jobs</a>
                            <a href="{{action('JobsTransactionController@edit',$company->idcompanies)}}" class="btn btn-primary">Approve Applicant</a>
						@endif
                		</div>

                	</div>

                    <div>
                        <h4 align="center">Doing Jobs</h4>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Volunteer</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Cancel</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs2 as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->type}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>{{App\User::Where('user_id','=',$data->id)->first()->name}}</td>
                                    <td>{{App\User::Where('user_id','=',$data->id)->first()->phone}}</td>
                                    @if($data->status=="started")
                                    <td><a href="{{action('JobsController@edit',$data->idjobs)}}" class="btn btn-info">Edit</a>
                                    <td>
                                        {!! Form::open([
                                        'action'=>['JobsController@destroy',$data->idjobs],
                                        'method'=>'DELETE'
                                        ]) !!}
                                        {!! Form::submit("Cancel", ['class'=>'btn']) !!}
                                        {!! Form::token() !!}
                                        {!! Form::close() !!}
                                    </td>
                                    @else
                                    <td></td>
                                    <td></td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                	<div>
                		<h4 align="center">Available Jobs</h4>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Bid</th>
                                    <th>location</th>
                                    <th>Option</th>
                                    <th>Cancel</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->type}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>{{$data->price}}</td>
                                    <td>{{$data->location}}</td>
                                    @if($data->status=="started")
                                    <td><a href="{{action('JobsController@edit',$data->idjobs)}}" class="btn btn-info">Edit</a>
                                    <td>
                                        {!! Form::open([
                                        'action'=>['JobsController@destroy',$data->idjobs],
                                        'method'=>'DELETE'
                                        ]) !!}
                                        {!! Form::submit("Cancel", ['class'=>'btn']) !!}
                                        {!! Form::token() !!}
                                        {!! Form::close() !!}
                                    </td>
                                    @else
                                    <td></td>
                                    <td></td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                	</div>
                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

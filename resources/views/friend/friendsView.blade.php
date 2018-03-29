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
                			<img class="profile-pic" src="{{ asset($user->imgUrl) }}">
                		</div>
                		<div class="col-md-8">
                			<div class="well">
                				Profile Information
                			</div>
                			<table class="table table-hover">
                				<tbody>
                					<tr>
                						<td>Name</td>
                						<td>{{$user->name}}</td>
                					</tr>
                					<tr>
                						<td>Address</td>
                						<td>{{$user->address}}</td>
                					</tr>
                					<tr>
                						<td>Phone</td>
                						<td>{{$user->phone}}</td>
                					</tr>
                					<tr>
                						<td>Email</td>
                						<td>{{$user->email}}</td>
                					</tr>
                					<tr>
                						<td>Location</td>
                						<td>{{$user->location}}</td>
                					</tr>
                					@if($user->status!="friend")
                					<tr>
                						<td>Add Friend</td>
                						<td><a href="{{action('RelationController@show',$user->id)}}">Add Friend</a></td>
                					</tr>
                					@endif
                				</tbody>
                			</table>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

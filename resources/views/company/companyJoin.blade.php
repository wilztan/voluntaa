@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                	<form action="{{action('CompanyRolesController@storeNew',$data->idcompanies)}}" method="POST" role="form">
                		<legend>Add Your Role</legend>
                	
                		<div class="form-group">
                			<label for="">Company Name</label>
                			<input type="text" class="form-control" id="" value="{{$data->name}}" placeholder="Company Name" disabled="">
                		</div>

                		<div class="form-group">
                			<label for="">Company Password <small>confirm your status</small></label>
                			<input type="Password" class="form-control" id="" placeholder="Password / Request To Your Company Admin" name="password">
                		</div>

                		<div class="form-group">
                			<label for="">Role</label>
                			<input type="text" class="form-control" id="" placeholder="Input field" name="role">
                		</div>

                		{!! Form::token() !!}
                	
                		<button type="submit" class="btn btn-primary">Submit</button>
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

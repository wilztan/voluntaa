@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Find Your Desired Task</div>
                <div class="panel-body">
			        <div class="col-md-3">
			                    <img class="item-images" src="{{ asset($type->imgUrl) }}" alt="Avatar" style="width:100%">
			        </div>
			        <div class="col-md-9">
			                    <div class=".container-card item-content">
			                        <h4><b>{{$type->type}}</b></h4> 
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			                    </div>
			        </div>

			        <table class="table table-hover">
			        	<thead>
			        		<tr>
			        			<th>Name</th>
			        			<th>Price</th>
			        			<th>location</th>
			        			<th>Company</th>
			        			<th>view</th>
			        		</tr>
			        	</thead>
			        	<tbody>
			        	@foreach($jobs as $data)
			        		<tr>
			        			<td>{{$data->name}}</td>
			        			<td>{{$data->price}}</td>
			        			<td>{{$data->location}}</td>
			        			<td>{{App\Company::where('idcompanies','=',$data->company_id)->first()->name}}</td>
			        			@if(Auth::check())
			        			<td><a href="{{action('JobsController@show',$data->idjobs)}}">View</a></td>
			        			@else
			        			<td><a data-toggle="modal" href='#modal{{$data->id}}'>View</a>
			        			<div class="modal fade" id="modal{{$data->id}}">
			        				<div class="modal-dialog">
			        					<div class="modal-content">
			        						<div class="modal-header">
			        							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        							<h4 class="modal-title">Please Log In First</h4>
			        						</div>
			        						<div class="modal-body">
			        							You have to log in or sign up to view this amazing jobs
			        						</div>
			        						<div class="modal-footer">
			        							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        							<a type="button" class="btn btn-primary">Log In</a>
			        						</div>
			        					</div>
			        				</div>
			        			</div></td>
			        			@endif
			        		</tr>
			        	@endforeach
			        	</tbody>
			        </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                <table class="table table-hover">
                	<thead>
                		<tr>
                			<th>Project</th>
                			<th>Created at</th>
                			<th>Price</th>
                			<th>Name</th>
                			<th>Email</th>
                			<th>Phone</th>
                			<th>Option</th>
                		</tr>
                	</thead>
                	<tbody>
                	@foreach($job as $data)
                		<tr>
                			<td>{{$data->name}}</td>
                			<td>{{$data->created_at}}</td>
                			<td>{{$data->price}}</td>
                			<td>{{App\User::where('id','=',Auth::User()->id)->first()->name}}</td>
                			<td>{{App\User::where('id','=',Auth::User()->id)->first()->email}}</td>
                			<td>{{App\User::where('id','=',Auth::User()->id)->first()->phone}}</td>
                			<td><a href="{{action('JobsTransactionController@edit',$data->idjobstrans)}}">Approve</a></td>
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

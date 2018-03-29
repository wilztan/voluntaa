@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Find Your Desired Task</div>
                <div class="panel-body">
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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

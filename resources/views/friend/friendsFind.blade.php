@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Friend Finder</div>
                <div class="panel-body">
                	{!! Form::open([
                		'action'=>'OtherController@search',
                		'method'=>'POST',
                		]) !!}
                			<div class="form-group">
                				<label for="">Search Your Friend</label>
                				<input type="text" class="form-control" id="" placeholder="Find Friends" name="search">
                			</div>
                		
                		{!! Form::submit("Find Friends", [
                			'class'=>'btn btn-primary'
                		]) !!}
                	{!! Form::close() !!}

                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>status</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>option</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($relation as $data)
                                <tr>
                                    @if($data->user_id2==Auth::User()->id)
                                        <td>{{App\User::where('id','=',$data->user_id1)->first()->name}}</td>
                                    @else
                                        <td>{{App\User::where('id','=',$data->user_id2)->first()->name}}</td>
                                    @endif
                                    <td>
                                        {{$data->status}}
                                    </td>
                                    @if($data->status=="added")
                                        <td>not friend</td>
                                        <td>not friend</td>
                                        <td><a href="{{action('RelationController@edit',$data->idrelations)}}">Approve</a></td>
                                    @else
                                        <td>{{App\User::where('id','=',$data->user_id1)->first()->email}}</td>
                                        <td>{{App\User::where('id','=',$data->user_id1)->first()->phone}}</td>
                                        <td><a href="">Message</a></td>
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
</div>

@endsection

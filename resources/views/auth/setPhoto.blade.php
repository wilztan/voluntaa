@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body ">
                <h4>Set Your Photo</h4>
                <img style="max-height: 200px;border-radius: 100px;" src="{{url('/').'/'.Auth::user()->imgUrl}}">
                {!! Form::open([
                    'action'=>['OtherController@setNewPhoto',Auth::User()->id],
                    'enctype'=>'multipart/form-data',
                    'method'=>'POST',
                    'class'=>'form-horizontal',
                    ]) !!}
                <br>
                {!! Form::file('New Photo', ['name'=>'imgUrl','class'=>'form-input']) !!}
                <br>
                {!! Form::submit('New Photo', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

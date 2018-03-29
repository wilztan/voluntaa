@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Your New Job</div>
                <div class="panel-body">
                    {!! Form::open([
                        'method'=>'POST',
                        'action'=>['JobsController@addJobpost',$company->idcompanies],
                        ]) !!}
                            <div class="form-group">
                                <label for="">Jobs Name</label>
                                <input type="text" class="form-control" id="" placeholder="Your Jobs Name" name="name">
                            </div>

                            
                            <div class="form-group">
                                <label for="">Price Bid</label>
                                <input type="number" class="form-control" id="" placeholder="Place Your Bid Price" name="price">
                            </div>

                            <div class="form-group">
                                <label for="">Location</label>
                                <input type="text" class="form-control" id="" placeholder="Set Your Job Location" name="location">
                            </div>

                            <div class="form-group">
                                <label for="sel1">Select list:</label>
                                    <select class="form-control" id="sel1" name="type" required="">
                                    <option selected="" disabled="">No Type Selected</option>
                                    @foreach($type as $data)
                                        <option value="{{$data->id}}">{{$data->type}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Jobs Requirement</label>
                                <textarea type="text" class="form-control" id="" placeholder="Required For Jobs" name="requirement"></textarea>
                            </div>


                            <div class="form-group">
                                <label for="">Company & Jobs Description</label>
                                <textarea type="text" class="form-control" id="" placeholder="Please tell us a brief about the job and your company" name="desc" rows="6"></textarea>
                            </div>

                    {!! Form::token() !!}
                    {!! Form::submit("Add Jobs", ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

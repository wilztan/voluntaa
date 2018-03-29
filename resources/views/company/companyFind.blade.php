@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">

                        <div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse2">Company find</a>
                              </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse">
                                @foreach($company as $data)
                                    <div class="panel-body">
                                    	<a href="" style="font-weight: bold">{{$data->name}}</a><br>
                                    	{{$data->phone}}<br>
                                    	{{$data->email}}<br>
                                    	{{$data->address}}<br>
                                        {!! Form::open(['action'=>['CompanyRolesController@join',$data->idcompanies],'method'=>'post']) !!}
                                        {!! Form::token() !!}
                                        {!! Form::submit('Join Company', ['class'=>'btn btn-primary']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                @endforeach
                            </div>
                          </div>
                        </div>

				 {{--  <div align="center">
				    <div  class="pagination"> {{ $company->render() }} </div>
				  </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

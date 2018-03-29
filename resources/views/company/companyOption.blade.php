@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Company</div>
                <div class="panel-body">
                    

                  <div class="panel">
                        <div class="panel-group">
                        @if(session('messages'))
                            <div class="alert alert-success" role="alert">{{session('messages')}}</div>
                        @endif
                        <br>



                        {{-- Already have Company --}}
                        @if(!empty($role))
                        <div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse2">Company Management</a>
                              </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                @foreach($company as $data)
                                    <div class="panel-body"><a href="{{action('CompanyController@show',$data->company_id)}}">{{$data->name}}</a></div>
                                @endforeach
                            </div>
                          </div>
                        </div>
                        @endif


                        {{-- Panel For Add New Company --}}
                          <div class="panel panel-default">
                            <div class="panel-heading green">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1">Interract With Company or New Company</a>
                              </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <label>Create Your Company</label>
                                <br>
                                <a class="btn btn-primary" href="{{action('CompanyController@create')}}">Add New Company</a>
                              </div>
                              <div class="panel-footer"><form action="{{action('CompanyController@joinCompany')}}" method="POST" role="form">
                                {!! Form::token() !!}
                                  <div class="form-group row">
                                      <label for="">Join Company</label>
                                      <br>
                                      <input type="text" name="join" class="form-control" id="" placeholder="Input field">
                                  </div>
                              
                                  
                              
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </form></div>
                            </div>
                          </div>
                        </div>


                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                	<div class="panel">
                		<div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <form method="POST" role="form" action="{{action('CompanyController@store')}}" >
                                    <legend>Start Your New Company</legend>
                                
                                    <div class="form-group">
                                        <label for="">Company Name *</label>
                                        <input type="text" name="name" class="form-control" id="" placeholder="Company Name" required="">
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="">Company Email *</label>
                                        <input type="email" name="email" class="form-control" id="" placeholder="Company Email" required="">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Company Phone Number *</label>
                                        <input type="number" name="phone" class="form-control" id="" placeholder="Company Phone Number" required="">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Company Address *</label>
                                        <input type="text" name="address" class="form-control" id="" placeholder="Company Address" required="">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Company Password <small>* for securing your company</small></label>
                                        <input type="password" name="password" class="form-control" id="" placeholder="Company Address" required="">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Company Websites</label>
                                        <input type="text" name="websites" class="form-control" id="" placeholder="Company Websites">
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="">Company Roles *</label>
                                        <input type="text" name="role" class="form-control" id="" placeholder="Your Status in Company" required="">
                                    </div>

                                    {!! Form::token() !!}

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                		</div>
                	</div>

                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

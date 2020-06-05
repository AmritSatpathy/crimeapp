@extends('layouts.app')
@section('content')
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Officer Login</h3>
                </div>
                <div class="panel-body ">
                    <div class="container">
                        {!! Form::open(['action'=> 'FormoController@find','method' => 'POST']) !!}
                        <div class="form-group ">
                            <label>OfficerId</label>
                            <input type="text" class="form-control" name="officerid">
                        </div>
                        <div class="form-group ">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pwd">
                        </div>
                        <div class="col-md-4">
                            {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
                        </div>
                        {!! Form::close() !!}
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection()
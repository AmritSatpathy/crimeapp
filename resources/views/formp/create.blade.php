@extends('layouts.app')

@section('content')
{!! Form::open(['action' => 'FormpController@store','method' => 'POST']) !!}
<br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body ">
                        <div class="form-group">
                            {{Form::label('firstname', 'Firstname')}}
                            {{Form::text('firstname', '',['class' =>'form-control'])}}
                        </div>
                       <div class="form-group">
                            {{Form::label('lastname', 'Lastname')}}
                            {{Form::text('lastname', '',['class' =>'form-control'])}}
                        </div>
                         <div class="form-group">
                            {{Form::label('emailid', 'Email')}}
                            {{Form::email('emailid', '',['class' =>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('phonenumber', 'Phone Number')}}
                            {{Form::text('phonenumber', '',['max' => 9999999999,'class' =>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('location', 'Location')}}
                            {{Form::text('location', '',['class' =>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('username', 'Choose UserName')}}
                            {{Form::text('username', '',['class' =>'form-control'])}}
                        </div>
                        <div class="form-group ">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pwd">
                        </div>
                        <br>
                    
                        {{Form::submit('Submit',['class' =>'btn btn-primary'])}}

                        <div class="form-group col-md-6 ">
                            <button type="button" class='btn btn-primary' onClick="myFunction()" >Get Location</button>
                        </div>
                        
                        <script>
                            function myFunction() {
                                window.open("/location/location.php");
                            }
                            </script>
                    <br>
                    <p style="color: burlywood"> Already have an account ?</p>
                    <a class="modal-trigger" href="/login">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}
@section('content')
@extends('layouts.app')
@section('content')
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>

                <div class="panel-body ">
                    {!! Form::open(['action' => 'FormpController@find','method' => 'POST']) !!}
                    <div class="form-group">
                        <label>EmailId</label>
                        <input type="text" class="form-control" name="emailid">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="pwd">
                    </div>
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label><br>

                    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
                    <br>
                    <p style="color: burlywood"> Don't have an account? Create one!</p>
                    <a class="modal-trigger" href="Signup.php">Signup</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection('content')
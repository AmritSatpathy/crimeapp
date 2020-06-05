@extends('layouts.app')


    <div class="container">
        <div class="row">
            <br><br><br><br><br><br><br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Officer Signup</h3></div>
                <div class="panel-body ">
                    <div class="container">
                        <div class="row">
                            {!! Form::open(['action' => 'FormoController@store','method' => 'POST']) !!}
                                <div class="form-group  col-md-6 ">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="fullname" >
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label>OfficerId</label>
                                    <input type=" text" class="form-control" name="officerid">
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label>Choose UserName</label>
                                    <input type=" text" class="form-control" name="uname">
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="pwd">
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label>Your Post</label>
                                    <input type="text" class="form-control" name="post">
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label>Posted in Station</label>
                                    <input type=" text" class="form-control" name="ustation">
                                </div>
                                <div class="col-md-6">
                                    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
                                </div>
                                <div class="form-group col-md-6 ">
                                    <button type="button" class='btn btn-primary' onClick="myFunction()" >Get Location</button>
                                </div>
                                
                                <script>
                                    function myFunction() {
                                        window.open("/location/location.php");
                                    }
                                    </script>

                                {!! Form::close() !!}


                            <br /><br />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br><br>


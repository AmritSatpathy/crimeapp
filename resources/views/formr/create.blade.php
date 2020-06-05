@extends('layouts.app')

<br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body ">
                    <div class="container">
                        <div class="row">
                            {!! Form::open(['action' => 'FormrController@store','method' => 'POST']) !!}
                                <div class="form-group  col-md-6 ">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="fullname">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Crime Type</label>
                                    <select class="form-control" name="crimetype">
                                        <option value="Theft">Theft</option>
                                        <option value="Murder">Murder</option>
                                        <option value="Kidnapping">Kidnapping</option>
                                        <option value="Drink & Drive">Drink & Drive</option>
                                        <option value="Fraud">Fraud</option>
                                        <option value="Sexual Harrassment">Sexual Harrassment</option>
                                        <option value="Drugs Paddling">Drugs Paddling</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label>Phone Number</label>
                                    <input type=" number" class="form-control" name="phno">
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label>Location</label>
                                    <input type="text" class="form-control" name="location">
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label>Enter Your Age</label>
                                    <input type=" text" class="form-control" name="age">
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label>Nearest Police Station</label>
                                    <input type=" text" class="form-control" name="policestation">
                                </div>
                                <div class="form-group col-md-12 ">
                                    <label>Enter Details of Incident</label><br>
                                    <textarea rows="4" cols="150"  name="info"></textarea>
                                </div>
                                <div class="col-md-4">
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


                          
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    <br><br>


@extends('layouts.app')
 @section('content')

<body style="padding:200px" ;>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Feedback</h3>
                    </div>
                    <div class="panel-body ">
                        <br><br>
                        <p>Thank You for visiting National Cyber Crime Reporting Portal and
                            becoming a stakeholder in the governance procedure of the
                            country. We would like to hear from you about your experience
                            and get your valued feedback on how we can make your
                            participation in the governance process better.
                        </p>
                        <p>In case you are facing any problem regarding the registration
                            or login process, please do get in touch with us through
                            this form. We would be more than happy to get back to you
                            and help in solving issues you may have faced while
                            browsing and/or participating through National
                            Cyber Crime Reporting Portal, as we value your
                            participation in National Cyber Crime Reporting
                            Portal.
                        </p>
                        <p>Did not find your suggestions on the platform? Do not
                            hesitate to get in touch with us. We will try to
                            address your issue at the earliest as we value your
                            participation in the National Cyber Crime Reporting
                            Portal.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-body">
                    <p>Please fill out this form to submit feedback</p>
                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection()
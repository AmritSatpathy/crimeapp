@extends('layouts.app')
 @section('content')

<body style="padding:200px" ;>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Contact Us</h3>
					</div>
					<div class="panel-body">
						<p style="color: burlywood">Please fill out this form to contact us</p>
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
			<div class="col-md-4">
				<div class="well">
					<h3>Who We Are</h3>
					<p>we are a couple of students working to build a better future for us
					</p>
				</div>
			</div>

		</div>
	</div>
</body>
@endsection()
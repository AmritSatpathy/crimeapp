@extends('layouts.app')
 @section('content')
<div class="jumbotron jumbotron-main">
	<div class="container">
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<p><a class="btn btn-primary btn-lg" href="/about">Read More</a> <a class="btn btn-default btn-lg" href="/contact">Contact Us</a></p>
	</div>
</div>


<div class="section-a">
	<div class="row">
		<div class="col-md-12">
			<h1><a style="color:brown " href="/report">REPORT A CRIME NEAR YOU NOW</a></h1>
		</div>
	</div>
</div>
<div class="conainer">
	<div class="row">
		<div class="col-md-6 box">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/1.jpg" alt="Image One" width="1000px">
						<div class="carousel-caption">This is image one</div>
					</div>
					<div class="item">
						<img src="img/2.jpg" alt="Image Two" width="1000px">
						<div class="carousel-caption">This is image two</div>
					</div>
					<div class="item">
						<img src="img/3.jpg" alt="Image Three" width="850px">
						<div class="carousel-caption">This is image three</div>
					</div>
				</div>

				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>

				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>

			</div>

		</div>

		<div class="col-md-6 box">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Media Gallery</h3>
				</div>
				<div class="panel-body">
					<h4 style="color: burlywood">Email Scam and Phishing</h4>
					<audio id="myaudio" src="audio\Audio1.mp3">
						Your browser does not support audio
					</audio>

					<div>
						<button onclick="document.getElementById('myaudio').play()">Play</button>
						<button onclick="document.getElementById('myaudio').pause()">Pause</button>
					</div>
					<br>
					<h4 style="color: burlywood">Identity Theft</h4>
					<audio id="myaudio1" src="audio\Audio2.mp3">
						Your browser does not support audio
					</audio>

					<div>
						<button onclick="document.getElementById('myaudio1').play()">Play</button>
						<button onclick="document.getElementById('myaudio1').pause()">Pause</button>
					</div>
					<br>
					<h4 style="color: burlywood">Obscene Content</h4>
					<audio id="myaudio2" src="audio\Audio3.mp3">
						Your browser does not support audio
					</audio>

					<div>
						<button onclick="document.getElementById('myaudio2').play()">Play</button>
						<button onclick="document.getElementById('myaudio2').pause()">Pause</button>
					</div>
					<br>
					<h4 style="color: burlywood">Online Scam or Fraud</h4>
					<audio id="myaudio3" src="audio\Audio4E.mp3">
						Your browser does not support audio
					</audio>

					<div>
						<button onclick="document.getElementById('myaudio3').play()">Play</button>
						<button onclick="document.getElementById('myaudio3').pause()">Pause</button>
					</div>
					<br>
					<h4 style="color: burlywood">Cyber Bullying</h4>
					<audio id="myaudio4" src="audio\Audio7E.mp3">
						Your browser does not support audio
					</audio>

					<div>
						<button onclick="document.getElementById('myaudio4').play()">Play</button>
						<button onclick="document.getElementById('myaudio4').pause()">Pause</button>
					</div>
					<br>
					<h4 style="color: burlywood">Cyber Crime</h4>
					<audio id="myaudio5" src="audio\Audio9E.mp3">
						Your browser does not support audio
					</audio>

					<div>
						<button onclick="document.getElementById('myaudio5').play()">Play</button>
						<button onclick="document.getElementById('myaudio5').pause()">Pause</button>
					</div>
					<br>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection()
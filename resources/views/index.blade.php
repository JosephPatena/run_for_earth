<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Run for Earth</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">		
	<link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/register.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
	<div class="preloader">
		<div class="sk-spinner sk-spinner-rotating-plane"></div>
	</div>
	<nav class="navbar navbar-fixed-top custom-navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">
					<img src="{{ asset('assets/logo.png') }}" height="30">
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home" class="smoothScroll">Home</a></li>
					<li><a href="{{ route('participants') }}" class="smoothScroll">Run Information</a></li>
					<li><a href="#register">Registration</a></li>
					<li><a href="#contact_us" class="smoothScroll">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>
	{{-- start home --}}
	<section id="home">
		<div class="overlay">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="{{ asset('assets/home_bg.jpg') }}" alt="Slide 1">
						<div class="slider-caption">
							<div class="templatemo_homewrapper">
								<p style="color: black"><br><br><br><br><br>A 3K run alongside the candidates of Miss Philippines Earth 2015<br>to aid the Calumpang River Rehabilitation <br><br>
									<b>APRIL 25, 2015 | Assembly time 5:00 AM | SM City Batangas Parkng Grounds <br>
								Registration fee: Php500 inclusive of race kit with shirt</b> </p>
								<a class="btn" style="border: solid; border-color: green" href="#register">Register now!</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	{{-- end home --}}
	{{-- start register --}}
	<section id="register">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow bounceIn" style="text-align: center">
						<p>
							<b style="font-size: 24px">SIGN UP</b> <br>
							<img src="{{ asset('assets/section-divider.png') }}" class="responsive">
							<div class="row">
								<div class="col-md-3 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
								</div>
								<div class="col-md-6 col-sm-4 wow fadeIn" data-wow-delay="0.3s" style="font-size: 11px">
									Vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
								</div>
								<div class="col-md-3 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
								</div>
							</div>
						</p>
					</div>					
					<form action="{{ route('register') }}" method="POST" role="form" id="registration_form">
						@csrf
						<div id="form_inputs">
							<input type="hidden" name="index[]">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
								</div>
								<div class="col-md-3 col-sm-3 col-xs-6 wow fadeIn" data-wow-delay="0.3s">
									<input name="first_name[]" type="text" placeholder="First Name" class="form-control first_name" required="">
								</div>
								<div class="col-md-3 col-sm-3 col-xs-6 wow fadeIn" data-wow-delay="0.3s">
									<input name="last_name[]" type="text" placeholder="Last Name" class="form-control last_name" required="">
								</div>
								<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.3s">
									<input name="complete_address[]" type="text" placeholder="Complete Address" class="form-control complete_address" required="">
								</div>
								<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.3s">
									<select name="gender[]" class="form-control gender" required="">
										<option value="" selected="">Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
								</div>
								<div class="col-md-3 col-sm-3 col-xs-6 wow fadeIn" data-wow-delay="0.3s">
									<input name="birthday[]" type="date" placeholder="Birthday" class="form-control birthday" required="">
								</div>
								<div class="col-md-3 col-sm-3 col-xs-6 wow fadeIn" data-wow-delay="0.3s">
									<input name="contact_number[]" type="number" placeholder="Contact Number" class="form-control">
								</div>
								<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
								</div>
								<div class="col-md-3 col-sm-3 col-xs-6 wow fadeIn" data-wow-delay="0.3s">
									<input name="email_address[]" type="email" placeholder="Email Address" class="form-control email_address" required="">
								</div>
								<div class="col-md-3 col-sm-3 col-xs-6 wow fadeIn" data-wow-delay="0.3s">
									<select name="shirt_size[]" class="form-control shirt_size" required="">
										<option value="" selected="">Shirt size</option>
										<option value="S">S</option>
										<option value="M">M</option>
										<option value="L">L</option>
										<option value="XL">XL</option>
									</select>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
								</div>
							</div>
						</div>
						<div id="inputs_added">
							
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.3s" id="error">
							</div>
							<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6 wow fadeIn" data-wow-delay="0.3s">
								<button class="btn btn-primary btn-sm" id="add_more"><i class="fa fa-plus"></i></button>
								&nbsp;Add more participants
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6 wow fadeIn" data-wow-delay="0.3s">
								<input type="checkbox">
								<a href="www.terms_and_condition.com" style="color: #ffffff; font-size: 10px">&nbsp;I have read and understand the Terms and Conditions</a>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
							</div>
							<div class="col-md-3 col-sm-3 col-xs-0 wow fadeIn" data-wow-delay="0.3s">
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 wow fadeIn" data-wow-delay="0.3s">
								<br>
								<button class="btn btn-success btn-sm pull-right" type="submit">SUBMIT</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	{{-- end register --}}

	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('js/isotope.js') }}"></script>
	<script src="{{ asset('js/imagesloaded.min.js') }}"></script>
	<script src="{{ asset('js/smoothscroll.js') }}"></script>
	<script src="{{ asset('js/wow.min.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
	<script src="{{ asset('js/registration.js') }}"></script>
</body>
</html>
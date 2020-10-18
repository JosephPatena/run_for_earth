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
</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
	<div class="preloader">
		<div class="sk-spinner sk-spinner-rotating-plane"></div>
	</div>
	<!-- start congratulation -->
	<section style="background-image: url({{ asset('assets/section_bg.jpg') }});background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow bounceIn">
						<h3 style="text-align: left">Congratulations!</h3>
						<hr>
						You have successfully registered to the event.
						<br><br>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						<br><br>
						Particpant/s: <span class="pull-right">Date Registered: {{ Carbon\Carbon::now()->format('F d, Y H:i A') }}</span>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Name</th>
										<th>Race Category</th>
										<th>Race Segment</th>
										<th>Race Shirt Size</th>
									</tr>
								</thead>
								<tbody>
									@foreach($participants as $key => $participant)
									<tr>
										@php
											$this_year = Carbon\Carbon::today()->format('Y');
											$age = $this_year - Carbon\Carbon::parse($participant->birthday)->format('Y');

											$category = ($age <= 18) ? "JUNIORS" : "SENIORS";	
										@endphp
										<td>{{ $participant->first_name." ".$participant->last_name }}</td>
										<td>{{ $category }}</td>
										<td>{{ $participant->gender }}</td>
										<td>{{ $participant->shirt_size }}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							<br>
							<center>
								<a href="/" class="btn btn-success btn-md">BACK</a>
							</center>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>
	<!-- end congratulations -->

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
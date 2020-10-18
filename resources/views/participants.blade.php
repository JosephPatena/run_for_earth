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
	<!-- start participants -->
	<section style="background-image: url({{ asset('assets/section_bg.jpg') }});background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow bounceIn">
						<h3 style="text-align: left">List of Participants</h3>
						<hr>
						<br>
						<div class="row">
							<div class="col-md-2">
								<table class="table table-bordered">
									<tr>
										<td><a id="show_all" style="cursor: pointer;">All</a></td>
									</tr>
									<tr>
										<td><a id="show_juniors" style="cursor: pointer;">Juniors (<span id="juniors"></span>)</a></td>
									</tr>
									<tr>
										<td><a id="show_seniors" style="cursor: pointer;">Seniors (<span id="seniors"></span>)</a></td>
									</tr>
									<tr>
										<td><a>Contact Persons</a></td>
									</tr>
								</table>
								<a href="{{ route('export_particpants') }}" class="btn btn-secondary btn-sm">Export Participants</a>
							</div>
							<div class="col-md-10">
								<div class="table-responsive" style="background-color: #ffffff">
									<table class="table table-bordered datatable">
										<thead>
											<tr>
												<th hidden=""></th>
												<th>#</th>
												<th>Name</th>
												<th>Age</th>
												<th>Gender</th>
												<th>Address</th>
												<th>Email Address</th>
												<th>Contact Number</th>
												<th>Date Registered</th>
											</tr>
										</thead>
										<tbody>
											@php
												$juniors = 0;
												$seniors = 0;
											@endphp
											@foreach($participants as $key => $participant)
											
												@php
													$this_year = Carbon\Carbon::today()->format('Y');
													$age = $this_year - Carbon\Carbon::parse($participant->birthday)->format('Y');

													if ($age <= 18) {
														$juniors++;
														$category = "JUNIORS";
													}else{
														$seniors++;
														$category = "SENIORS";
													}

												@endphp
											<tr>
												<td hidden="">{{ $category }}</td>
												<td>{{ $key+1 }}</td>
												<td>{{ $participant->first_name." ".$participant->last_name }}</td>
												<td>{{ $age }}</td>
												<td>{{ $participant->gender }}</td>
												<td>{{ $participant->complete_address }}</td>
												<td>{{ $participant->email_address }}</td>
												<td>{{ $participant->contact_number }}</td>
												<td>{{ Carbon\Carbon::parse($participant->created_at)->format('F d, Y H:i A') }}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
								<br>
								<center>
									<a href="/" class="btn btn-success btn-md">BACK</a>
								</center>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>
	<!-- end participants -->

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
	<!-- Datatables -->
    <script src="{{ asset('js/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
            $('.datatable').DataTable({
            });

            $('#juniors').text({{ $juniors }})
            $('#seniors').text({{ $seniors }})

            var table = $('.datatable').DataTable();
		    
		    $('#show_all').on('click', function(){
		        table.search("").draw();
		    });

		    $('#show_juniors').on('click', function(){
		        table.search("JUNIORS").draw();
		    });

		    $('#show_seniors').on('click', function(){
		        table.search("SENIORS").draw();
		    });
        });
    </script>
</body>
</html>
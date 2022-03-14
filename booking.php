<?php include "header.php"; ?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/bookingstyle.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body >
	<form action="booking_insert.php" method="post">
	<div id="booking" class="section" >
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="booking-cta">
							<h1 style="color:green;">Make your reservation <br> JU Cafeteria</h1>


						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="booking-form">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="text" name="bname">
											<span class="form-label">Name</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="email" name="email">
											<span class="form-label">Email</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="dept" name="dept">
											<span class="form-label">Dept</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">

											<span class="form-label">Booking Type </span>
											<select class="form-control" name="type">
												<option value="Any relative of any teacher----4000/-">Any relative of any teacher----4000/-</option>
												<option value="Anyone referred. by any teacher----6000/-">Anyone referred. by any teacher----6000/-</option>
												<option value="Any program of any department-----500/-">Any program of any department-----500/-</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="tel" name="phone">
											<span class="form-label">Phone</span>
										</div>
									</div>

									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<span class="form-label">Guests</span>
											<select class="form-control" name="guest">
												<option> 1-50 </option>
												<option>50-100</option>
												<option>100+</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="date" required name="check_in">
											<span class="form-label">Check In</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="date" required name="check_out">
											<span class="form-label">Check Out</span>
										</div>
									</div>
								</div>
								<div class="form-btn">
										<button class="submit-btn" type="submit" name="booking" onclick="window.location.href='booking_insert.php'">Book Now</button>
									
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function() {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function() {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body>
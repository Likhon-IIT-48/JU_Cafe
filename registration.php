<?php include "header.php"; ?>

<body>

	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1> REGISTRATION US </h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

	<!-- Start Contact -->

	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">

				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<table cellpadding="10" cellspacing="12" align="left	">
						<form action="" method="POST">

							<tr>
								<td>
									<input type="text" name="uid" value="" placeholder="user id" required="" style="padding: 6px 10px; width: 300%"> <br>
								</td>
							</tr>
							<tr>
								<td>
									<input type="password" name="pass" value="" placeholder="Enter Your password" required="" style="padding: 6px 10px; width: 300%"> <br>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="name" value="" placeholder="Enter Your Name" required="" style="padding: 6px 10px; width: 300%"> <br>
								</td>
							</tr>
							<tr>
								<td> <input type="text" name="department" value="" placeholder=" Enter Your Department" required="" style="padding: 6px 10px; width: 300%;"> <br> </td>
							</tr>
							<tr>
								<td> <input type="text" name="roll" value="" placeholder=" Enter Your Roll" required="" style="padding: 6px 10px; width: 300%;"> <br> </td>
							</tr>
							<tr>
								<td> <input type="text" name="session" value="" placeholder=" Enter Your Session" required="" style="padding: 6px 10px; width: 300%;"> <br> </td>
							</tr>
							<tr>
								<td> <input type="text" name="hall" value="" placeholder=" Enter Your Hall" required="" style="padding: 6px 10px; width: 300%"> <br> </td>
							</tr>

							<tr>
								<td> <input type="email" name="email" value="" placeholder="Enter Your Email Address" required="" style="padding: 6px 10px; width: 300%"> <br> </td>
							</tr>
							<tr>
								<td> <input type="phone" name="phone" value="" placeholder="Enter Your Phone Number" required="" style="padding: 6px 10px; width: 300%"> <br> </td>
							</tr>

							<tr>
								<td align="center"> <input type="submit" name="sb" value="Registration Now" style="color:red; background: lightgreen; font-size: 1.3em; font-family: times new roman"> <br> </td>
							</tr>

						</form>
					</table>

					<?php
					if (isset($_POST['sb'])) {

						$uid = $_POST['uid'];
						$pass = $_POST['pass'];
						$name = $_POST['name'];

						$department = $_POST['department'];
						$hall = $_POST['hall'];

						$email = $_POST['email'];
						$phone = $_POST['phone'];
						$session = $_POST['session'];
						$roll = $_POST['roll'];
						include "connect.php";
						mysqli_query($con, "insert into registration1(uid,pass,name,department,hall,email,phone,roll,session) values('$uid','$pass','$name','$department','$hall','$email','$phone','$roll','$session')");
						echo "<script>alert('Registration SuccessFully');</script>";
						echo "<center>Registration SuccessFully ... Click to <a href='login.php'>login</a></center>";
					}

					?>





				</div>
			</div>

		</div>
	</div>
	<!-- End Contact -->
	<?php include "footer.php"; ?>
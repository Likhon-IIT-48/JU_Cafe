<!-- <link rel="stylesheet" type="text/css" href="style2.css">

<div class="h"><img src="../images/ju_cafe.png" alt="">
</div>
<div class="mbg">
	<a href="after_login.php" class="menu">Parcel Clients</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="food.php" class="menu">Food Menu</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="gallery.php" class="menu">Gallery</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="review.php" class="menu">Reviews</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="food_cat.php" class="menu">Food Category</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="logout.php" class="menu" style="color: red;">Logout</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
<br><br> -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="style3.css" />
	<title>dashboard</title>
</head>

<body>
	<div class="container">
		<div class="navigation">
			<ul>
				<li>
					<a href="#">
						<img src="img/ju_cafe.png" width="75%" alt="" />
					</a>
				</li>
				<!-- <li>
            <a href="#">
              <span class="icon"
                ><ion-icon name="reorder-three-outline"></ion-icon
              ></span>
              <span class="title">Dashboard</span>
            </a>
          </li> -->
				<li>
					<a href="customer.php">
						<span class="icon">
							<ion-icon name="people-outline"></ion-icon>
						</span>
						<span class="title">Customer</span>
					</a>
				</li>
				<li>
					<a href="food.php">
						<span class="icon">
							<ion-icon name="fast-food-outline"></ion-icon>
						</span>
						<span class="title">Food Menu</span>
					</a>
				</li>
				<!-- <li>
					<a href="food_cat.php">
						<span class="icon">
							<ion-icon name="beer-outline"></ion-icon>
						</span>
						<span class="title">Food Category</span>
					</a>
				</li> -->
				<li>
					<a href="booking_show.php">
						<span class="icon">
							<ion-icon name="laptop-outline"></ion-icon>
						</span>
						<span class="title">Booking</span>
					</a>
				</li>
				<li>
					<a href="after_login.php">
						<span class="icon">
							<ion-icon name="people-outline"></ion-icon>
						</span>
						<span class="title">Parcel Clients</span>
					</a>
				</li>
				<li>
					<a href="gallery.php">
						<span class="icon">
							<ion-icon name="images-outline"></ion-icon>
						</span>
						<span class="title">Gallery</span>
					</a>
				</li>
				<li>
					<a href="review.php">
						<span class="icon">
							<ion-icon name="chatbox-outline"></ion-icon>
						</span>
						<span class="title">Reviews</span>
					</a>
				</li>
				<li>
					<a href="logout.php">
						<span class="icon">
							<ion-icon name="log-out-outline"></ion-icon>
						</span>
						<span class="title">Logout</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<div class="topbar">
				<div class="toggle">
					<ion-icon name="menu-outline"></ion-icon>
				</div>
				<div class="search">
					<label for="">
						<input type="text" placeholder="Search Here">
						<ion-icon name="search-circle-outline"></ion-icon>
					</label>
				</div>

				<div class="user">

					<img src="img/avt-img.jpg" alt="">

				</div>
			</div>
		</div>
	</div>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script>
		let list = document.querySelectorAll(".navigation li");

		function activeLink(item) {
			item.classList(remove("hovered"));
			this.classList.add("hovered");
		}
		list.forEach((item) => item.addEventListener("mouseover", activeLink));
	</script>
</body>

</html>
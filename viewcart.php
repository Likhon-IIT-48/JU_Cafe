<?php session_start();

if (isset($_SESSION['uid'])) {

	include "header.php"; ?>
	<style type="text/css">
		.content {
			position: relative;
			left: 350px;
			top: 100px;
			padding-right: 350px;
		}

		tr {
			font-size: 1.2em;
			color: #26947e;


		}

		tr:hover {
			background-color: black;
			color: white;


		}

		th {
			color: blue;
			font-size: 1.3em;
		}

		.del {
			color: red;
			text-decoration: none;
		}

		.del:hover {
			color: blue;
			text-decoration: none;
			text-shadow: 2px 3px 2px #FFFFFF;
		}
	</style>
	<div class="content" style="background-color: white; width: 98%; margin: 0 auto; ">
		<br>
		<?php include "connect.php";
		$pid = $_GET['pid'];
		$uid = $_GET['uid'];
		?>

		<table border=1 align="center" width=90% cellspacing="10" cellpadding="12">
			<tr>
				<th>NO</th>
				<th>UserID</th>
				<th>Product ID</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Total</th>
				<th>IMAGE</th>


			</tr>
			<?php

			$s = mysqli_query($con, "SELECT addcart.price, addcart.p_id, addcart.qty, addcart.total,addcart.id, checkout.name, addcart.u_id, menu.image
FROM addcart
INNER JOIN checkout ON addcart.p_id=checkout.p_id INNER JOIN menu on menu.id=checkout.p_id  where addcart.u_id='$uid' and checkout.p_id='$pid'");

// $s=mysqli_query($con,"select p_id,")
			while ($r = mysqli_fetch_array($s)) {
			?>
				<tr>
					<td><?php echo $r['id']; ?></td>
					<td><?php echo $r['u_id']; ?></td>
					<td><?php echo $r['p_id']; ?></td>
					<td><?php echo $r['price']; ?></td>
					<td><?php echo $r['qty']; ?></td>
					<td><?php echo $r['total']; ?></td>
					<td><img src="<?php echo $r['image']; ?>" width=100 height=100></td>

				</tr>
			<?php
			}
			?>

		</table>
	</div>

	<?php include "footer.php"; ?>

<?php
} else {
	header("location:index.php");
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
	.bg .btn a{
		text-decoration:none;
		color: black;
	}
</style>

<body class="bg">
	<div style="padding-top:100px;"></div>
	<h1 style="text-align: center;color:green">Jahangirnagar University</h1>
	<h3 style="text-align: center;color:slateblue">Central Cafeteria</h3>
	<form action="loginck.php" method="post">
		<table border=0 align="center" bgcolor="white" width="40%" style="box-shadow: 1px 3px 15px 2px;" cellpadding="10" cellspacing="15">
			<tr align="center">
				<td class="title">ADMIN LOGIN HERE</td>
			</tr>
			<tr align="center">
				<td><input type="text" name="aid" value="" placeholder="Enter Admin ID" class="text" required></td>
			</tr>
			<tr align="center">
				<td><input type="password" name="pass" value="" placeholder="Enter Password" class="text" required></td>
			</tr>
			<tr align="center">
				<td><input type="submit" name="s" value="Login Now" class="btn"></td>
			</tr>
			<tr align="center">
				<td><button class="btn"><a href="../index.php">Home</a></button></td>
			</tr>
		</table>
	</form>
<?php
session_start();
$name=$_SESSION['Name'];
if(!isset($_SESSION['Username']))
{
?>
<html>
	<head>
		<title>AUTOMATED TIME TABLE GENERATION SYSTEM - HOME
		</title>
		<script language="javascript">
			
		</script>
		<style>

		</style>
		<link rel='stylesheet' type='text/css' href='css sources/atgs_sec1.css'>
		<link rel='stylesheet' type='text/css' href='css sources/main.css'>
	</head>
	<body>
		<div id="logo">
			<img src="images sources/ATGS LOGO 3.png" height="150px" width="250" alt="logo not found">
		</div>
		<div class="topnav">
			<a href="index.php">Home</a>
			<a href="aboutus.html">About us</a>
			<a href="forget1.php">Search account</a>
		</div>
		<div class="container-header">
			AUTOMATED TIMETABLE GENERATION SYSTEM
		</div>
		<div class="head-container">
		</div>
		<div class="body-container">
		<center>
			<span id="forget">
					<h2><b>Forget Password<b></h2>
					<form name="updatepwd" method="POST">
					<table name="fgtpage">
						<h3>User Name : <?php echo "$name";?></h3>
							<tr><td>Security Question:</td></tr>
							<?php 
								$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
									"SELECT Securityq FROM admin_login where username = '$name' ");
								$a = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
									"SELECT securitya FROM admin_login where username = '$name' ");
									echo "$q";
							?>
							<tr><td><input type="text" id="SA" name="SA" value=""placeholder="Sequrity Answer"></td></tr>
							<tr><td><input type="password" name="np" id="np" value="" placeholder="New Password"></td></tr>
							<tr><td><tr><td><input type="password" name="cp" id="cp" value="" placeholder="Confirm Password"></td></tr>
							<tr><td><tr><td><input type="submit" name="save" id="save" value="Update"></td></tr>
					</table>
					<?php
						include 'config.php';
						if(isset($_POST['save']))
						$sa = $_POST['SA'];
						$np = $_POST['np'];
						$cp = $_POST['cp'];
						if($sa==$a&&$np==$cp)
						{
						$query =mysql_query("Update admin_login  set password='$np' where username='$un'");
													echo '<script type="text/javascript">alert("Password Updated Succesfully");window.location=\'index.php\';</script>';
						}
						else
						{
							echo "Password Not Confirmed";
						}
					?>
					</form>
												
			</span>
	</body>
</html>
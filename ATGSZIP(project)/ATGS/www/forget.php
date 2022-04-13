<?php
session_start();
$un=$_SESSION['Username'];

?><html>
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
			<a href="#">About us</a>
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
					<form name="fgt" method="post" action="forget.php">
						<table name="fgtpage">
							<tr><td>Security Question:</td></tr>
							<tr><td><select name="sq" id="sq">
							<option selected disabled>Sequrity Question</option>
							<option value="What is your nick name?">What is your nick name?</option>
							<option value="First Phone you bought of which company?">First Phone you bought of which company?</option>
							<option value="what is Your favorite Color">what is Your favorite Color </option>
							<option value="Your shoe size">Your shoe size</option>
							</select></td></tr>
							<tr><td><input type="text" id="SA" name="SA" value=""placeholder="Sequrity Answer"></td></tr>
							<tr><td><input type="password" name="np" id="np" value="" placeholder="New Password"></td></tr>
							<tr><td><tr><td><input type="password" name="cp" id="cp" value="" placeholder="Confirm Password"></td></tr>
							<tr><td><tr><td><input type="submit" name="save" id="save" value="Update"></td></tr>
						</table>
					</form>
		</center>
					<?php
						
					?>
					<?php
						if(isset($_POST['save']))
						{
							require_once("config.php");
								$sq=$_POST['sq'];
								$sa=$_POST['SA'];
								$np=$_POST['np'];
								$cp=$_POST['cp'];
							$sq1 = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
							"select Securityq from admin_login WHERE username=$un");
							$sa1 = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
							"select securitya from admin_login WHERE username=$un");
										if($sq1==$sq && $sa1==$sa &&$np==$cp)
										{
											$query =mysql_query("Update admin_login  set password='".$np."' where username='$un'");
												//$sql="Update  into admin set user='".$a1."', email='".$a2."', mob='".$a3."', ques='".$a4."' where id='$id'";
												echo '<script type="text/javascript">alert("Password Updated Succesfully");window.location=\'index.php\';</script>';
										}
										else
											echo '<script type="text/javascript">alert("Password not changed");</script>';

						}
									
					?>
				</span>
		</div>
			
		</div>
	</body>
</html>
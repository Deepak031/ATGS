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
					<form name="fgt" method="post">
						<table name="fgtpage">
							<tr><td><input type="text" id="UN" name="UN" value=""placeholder="Username"required></td></tr>
							<tr><td><tr><td><input type="submit" name="search" id="search" value="Find"></td></tr>
						</table>
					</form>
		</center>
					<?php
						if(isset($_POST['search']))
						{
							require_once("config.php");
								$un=$_POST['UN'];
											$query =mysql_query("SELECT * FROM admin_login 
													WHERE username = '$un'");
													$records = mysql_num_rows($query);
													$row = mysql_fetch_array($query);
											  if ($records>0)
												{
													$_SESSION['Username']=$row['username'];
													header("Location:forget2.php");
												}
												else
													echo "<script>alert('No User Found.');</script>";
						}
									
					?>
				</span>
		</div>
			
		</div>
	</body>
</html>
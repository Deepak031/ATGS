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
			<a href="#">About us</a>
			<a href="#">Print Timetable</a>
			<a href="#">Timetable Collections</a>
		</div>
		<div class="container-header">
			 AUTOMATED TIMETABLE GENERATION SYSTEM
		</div>
		<div class="head-container">
		<marquee>ATGS -There is only one Key to Success, Be on Time - Everytime</marquee>
		</div>
		<div class="body-container">
				<span id="examtt"><center>
					<form name="exam_tt" method="post">
						No of exams: 
						<select name="exno" id="exno">
							<option value="none">Select any one</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						<input type="submit" name="nxt" id="nxt" value="Next">
					</form>
					<?php
						include "connection.php";
						if(isset($_POST['nxt']))
						{
							$l=$_POST['exno'];
							for($i = 0;$i<$l;$i++)
							{
								echo "Date of exam: <input type='date' name='dt' id='dt'value=''size='8'>";
							}
						}
					?>
					</center>
				</span>
						
		</div>
			
		</div>
	</body>
</html>
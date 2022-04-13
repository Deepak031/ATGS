<html>
	<head>
		<title>AUTOMATED TIME TABLE GENERATION SYSTEM - HOME
		</title>
		<script language="javascript">
		</script>
		<style>
			
			#header1
			{
				background-color:black;
				color:white;
			}
			#verify,#update,#list,#clear
			{
				background-color:blue;
				color:white;
				width:80px;
				height:35px;
			}
			input
			{
				border:2px solid navy;
				height:20px;
			}
			#formstr
			{
				text-size:30px;
				position:absolute;
				top:10px;
				left:50%;
			}
			#name #usrname #newpassword #cfmpassword #eml #desg
			{
				height:20px;
				width:120px;
			}

			table td
			{
				font-size:18px;
			}
			
		</style>
		<link rel='stylesheet' type='text/css' href='css sources/atgs_sec1.css'>
		<link rel='stylesheet' type='text/css' href='css sources/main.css'>
	</head>
	<body>
		<div id="logo">
			<img src="images sources/ATGS LOGO 3.png" height="150px" width="250" alt="logo not found">
		</div>
		<div class="topnav">
						<ul>
							<li><a href="adminpanel.php"><img src="images sources/home.png" width="30" hight="30">&nbsp;Home</a></li>
							<li><a href="addteachers.php"><img src="images sources/teacher.png" width="30" hight="30">&nbsp;Add Teacher</a></li>
							<li><a href="addsubjects.php"><img src="images sources/addsub.png" width="30" hight="30">&nbsp;Add Subject</a></li>
								<li><a href="addclassrooms.php"><img src="images sources/crm.png" width="30" hight="30">&nbsp;Add Classroom</a></li>
							<li><a href="alloc.html"><img src="images sources/alloc.png" width="25" hight="25">&nbsp;Allocation</a></li>
							<li id="logout"><a href="index.php"><img src="images sources/logout.png" width="30" hight="30">&nbsp;Logout</a></li>
							</ul>
					</div>
		<div class="container-header">
			AUTOMATED TIMETABLE GENERATION SYSTEM
		</div>
		<div class="head-container">
		<marquee>ATGS -There is only one Key to Success, Be on Time - Everytime</marquee>
		</div>
		<div class="body-container">
			<div id='header1'>
				<h1><center> ADMIN REGISTRATION FORM</center></h1>
			</div>
				<center><br>
			<span id='formstr' style='background-color:white; border:4px solid
				black;position:absolute;
				padding:10px;left:350px;top:100px;'>
				<form name="Alogin" method="post">
					<table width="700px" cellpadding="15px">
						<tr><td>Name:</td>
							<td><input type="text" name="name" id="name"value=""></td></tr>
						<tr><td>Username*:</td>
							<td><input type="text" name="usrname"id="usrname"value="" required></td></tr>
						<tr><td>Password:</td>
							<td><input type="password" name="newpassword" id="P" value="" required></td><br></tr>
						<tr><td>ConfirmPassword:</td>
							<td><input type="password" name="cfmpassword" id="CP"value=""required></td></tr>
						<tr><td>Email Id:</td>
							<td><input type="text" name="eml"value=""></td></tr>
							<td><select name="sq" id="sq">
							<option selected disabled>Sequrity Question</option>
							<option value="What is your nick name?">What is your nick name?</option>
							<option value="First Phone you bought of which company?">First Phone you bought of which company?</option>
							<option value="what is Your favorite Color">what is Your favorite Color </option>
							<option value="Your shoe size">Your shoe size</option>
							</select></td>
							<td><input type="text" id="sa"name="sa"value=""></td></tr>
						<tr><td>Designation:</td>
							<td><input type="text" name="desg"value=""></td></tr>
						<tr><td><center><input type='submit' name='verify' id='verify' value='Register'></center></td>
							<td><center><input type='submit' name='clear' id='clear' value='Reset' onclick="reset();"></center></td></tr>
					</table>
				</form>
				<?php
				$name="";
				$usr="";
				$pwd="";
				$cpwd="";
				$eml="";
				$desg="";
				$sq="";
				$sa="";
				if(isset($_REQUEST['verify']))
					{
						include"dbconfig.php";
						$name=$_REQUEST['name'];
						$usr=$_REQUEST['usrname'];
						$pwd=$_REQUEST['newpassword'];
						$cpwd=$_REQUEST['cfmpassword'];
						$eml=$_REQUEST['eml'];
						$sq=$_REQUEST['sq'];
						$sa=$_REQUEST['sa'];
						$desg=$_REQUEST['desg'];
					}	
						
					$query="insert into admin_login values('$name','$usr','$pwd','$eml','$sq','$sa','$desg')";
					$valid="SELECT username FROM admin_login WHERE(username=='$usr');";
					if($usr!=$valid&&$pwd==$cpwd)
					{
						$n=@my_iud($query);
						echo "<br />$n record saved";
					}
					else
					{
						echo"<script>alert('Invlid Username or Password');</script>";
					}
				if($n==1)
					{
						echo"<script>alert('Registered Successfully');</script>";
						header("Location:index.php");
					}
				 
				?>
			</span>	
		</div>
	</body>
</html>
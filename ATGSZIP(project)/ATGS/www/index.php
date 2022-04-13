<html>
	<head>
		<title>AUTOMATED TIME TABLE GENERATION SYSTEM - HOME</title>
		<style>
			.body-container #frm2 
			{
				position:absolute;
				top:-40px;
				width:400px;
				right:50px;
				padding:10px;
			}
			.body-container #frm2 form
			{
				padding:5px;
			}
			.body-container #frm2 form input 
			{
				background:transparent;
				border:1px solid #999;
				width:200px;
				height:35px;
				border-radius:15px;
			}
			.body-container #frm2 form input:focus
			
			{
				border-radius:5px;
			}
			.body-container #frm2 #login_btn
			{
				width:150px;
				height:40px;
				border:2px solid blue;
				position:absolute;
			}
			#login_btn:hover
			{
				color:Black;
				background-color:blue;
			}
			#logfrm
			{
				font-size:20px;
			}
			.body-container #frm2 a 
			{
				border-radius:10px;
				height:15px;
				width:150px;
				margin:0px;
				background:#0096BE;
				position:absolute;
				top:240px;
				left:235px;
				color:black;
				border:4px solid black;
				text-align:top;
			}
			.body-container #para
			{
				position:absolute;
				left:510px;
				top:45px;
				text-align:justify;
				text-justify:inter-word;
				font-size:18px;
			}
		</style>
		<link rel='stylesheet' type='text/css' href='css sources/main.css'>
	</head>
	<body>
		<div id="logo">
			<img src="images sources/ATGS LOGO 3.png" height="150px" width="250" alt="logo not found">
		</div>		
		<div class="topnav">
			<a href="index.php">Home</a>
			<a href="aboutus.html">About us</a>
			<a href="guide.html">User manual</a>
		</div>		
		<div class="container-header">
			AUTOMATED TIMETABLE GENERATION SYSTEM
		</div>		
		<div class="head-container">
			<marquee>ATGS -There is only one Key to Success, Be on Time - Everytime</marquee>
		</div>
		<div class="body-container">
			<div class="title">Welcome</div>
			<img src="images sources/theme 2.jpg" height="370px" width="500px" alt="no logo">
			<div id="para" style="width:390;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>This is our Project which is basically a tool for generation
				of a format of a random arragement of a timetable by satisfying all the conditions which 
				necessery to create a time table for that institute. This tool helps user to get a stretegy 
				to help the user to create an effective time table for all the classes by finding the shortest path.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In our project we used multiple algorithms i.e; Ant coloney optimization
				(For searching Shortest Path), Genetic Algorithm (for creating a random arragement ).<br><br>
				<strong><u>NOTE</u> - </strong> This project Works only on Local server so no other user can access this software by other system.<br>
				<br><strong>Thank You.</strong></b>
			</div> 
			<span id="frm2" style="position:absolute; left:900px; border:4px blue;">
				<br><hr size="5"><h1><center>Login admin account</center></h1>
				<form name="loginform" id="logfrm" action="adminFormvalidation.php" method="post">
					Username: &nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="username" id="username"><br><br>
					Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="password" name="pwd" id="pwd" value=""><br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="login_btn" id="login_btn" value="LOGIN">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="forget1.php">Forget Password</a>
				</form><hr size="5">
			</span>	
		</div>
	</body>
</html>
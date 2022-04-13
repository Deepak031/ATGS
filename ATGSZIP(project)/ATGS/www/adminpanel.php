<?php
session_start();
$name=$_SESSION['Name'];
if(!isset($_SESSION['Username']))
{
?>
	<script language="javascript" type="text/javascript">
	window.location="index.php?msg=expire";
	</script>
<?php
}
//require_once("../config.php");
?>
<html>
	<head>
		<title>Admin Panel - ATGS</title>
		<script language="javascript">
			
		</script>
		<style>
			h1{color:blue;}
			
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
							<li id="logout"><a href="index.php"><div><img src="images sources/logout.png" width="25" hight="25"></div>&nbsp;Logout</a></li>
							<li style="background-color:red;"><a href="#"><?php echo $name;?></a></li>
							</ul>
					</div>
					<div class="container-header">
						AUTOMATED TIMETABLE GENERATION SYSTEM
					</div>
					<div class="head-container">
					<marquee>ATGS -There is only one Key to Success, Be on Time - Everytime</marquee>
					</div>
					<div class="body-container">
					<div class="title">ADMIN PANEL</div>
			<div id="addaccount"style="position:absolute;top:70px;width:250px;height:200px;left:80px;">
				<a href="Registration admin.php"><img src="images sources/addacc.png"width="100%"height="100%"></a>
			<h1><b><u><center>Registration</center></u></u></b></h1>
			</div>
			<div id="manageaccount"style="position:absolute;top:70px;width:250px;height:200px;left:380px;">
				<a href="manage_account.php"><img src="images sources/manage-account.jpg"width="100%"height="100%"></a>
			<h1><b><u><center>Manage</center></u></u></b></h1>
			</div>
			<div id="generate"style="position:absolute;top:70px;width:250px;height:200px;left:680px;">
				<a href="generatetimetable.php"><img src="images sources/Generate.png"width="100%"height="100%"></a>
			<h1><b><u><center>Generate</center></u></u></b></h1>
			</div>
		<div id="view-data"style="position:absolute;width:280px;height:200px;top:70px;left:980px;">
				<a href="Modtt.php"><img src="images sources/ttlogo.png"width="100%"height="100%"></a>
				<h1><b><u><center>Modify Timetable</center></u></u></b></h1> 
			</div>
		</div>
			
		</div>
	</body>
</html>
<?php
session_start();
if(!isset($_SESSION['Username']))
{
?>
	<script language="javascript" type="text/javascript">
	window.location="index.php?msg=expire";
	</script>
<?php
}
//require_once("../config.php");
$name=$_SESSION['Name'];
$user=$_SESSION['Username'];
$pass=$_SESSION['Pass'];
$mob=$_SESSION['Mobile'];
$desig=$_SESSION['Desig'];
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
							</ul>
					</div>
					<div class="container-header">
						AUTOMATED TIMETABLE GENERATION SYSTEM
					</div>
					<div class="head-container">
					<marquee>ATGS -There is only one Key to Success, Be on Time - Everytime</marquee>
					</div>
					<div class="body-container">
					<div class="title">Welcome <?php echo $_SESSION['Name'];?></div>
					<center>
			
			<form class="form-light mt-20" name="form" id="form" action="" method="post">
					<table name="mngacc" cellpadding="10px" cellspacing="5px">
				<div class="form-group">
				<tr><td>
								<label>Username</label></td><td>
								<input type="text" name="user" id="user" class="form-control" value="<?php echo $user;?>" readonly>
							</td></tr>
							</div>
							<div class="form-group">
							<tr><td>
								<label>Name</label></td><td>
								<input type="text" name="name" id="name" class="form-control" value="<?php echo $name;?>" >
							</td></tr></div>
							<div class="form-group">
							<tr><td>
								<label>Password</label></td><td>
								<input type="text" name="pass" id="pass" class="form-control" value="<?php echo $pass;?>" >
							</td></tr>
							</div>
							<div class="row">
							
								<div class="col-md-6">
									<div class="form-group">
									<tr><td>
										<label>Email Id</label>
										</td><td>
										<input type="text" name="mob" id="mob" class="form-control" value="<?php echo $mob;?>" required="">
									</td></tr>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<tr><td>
                                        <label>Designation</label></td><td>
							<input type="text" name="desig" id="desig" class="form-control" value="<?php echo $desig;?>" required="">
									</td></tr>
									</div>
								</div>
							</div>
							<tr><td>
							<input type="submit" name="s1" id="s1" value="Change Profile" class="btn btn-two" style="background: #ae130c;color:white;"></td></tr><p><br/></p>
						</form>
						<?php
if(isset($_POST['s1']))
{
	require_once("config.php");
					$a1=$_POST['user'];
					$a2=$_POST['desig'];
					$a3=$_POST['mob'];
					$a4=$_POST['pass'];
					$a5=$_POST['name'];
					
					$query =mysql_query("Update admin_login  set Name='".$a5."',Mob='".$a3."',password='".$a4."',designation='".$a2."' where username='$a1'");
						//$sql="Update  into admin set user='".$a1."', email='".$a2."', mob='".$a3."', ques='".$a4."' where id='$id'";
						echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'adminpanel.php\';</script>';

}
						?>
			
			
		</div>
			</center>
		</div>
	</body>
</html>
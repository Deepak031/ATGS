<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Time Table Generation</title>
    <script type="text/javascript" src="assets/jsPDF/dist/jspdf.min.js"></script>
    <script type="text/javascript" src="assets/js/html2canvas.js"></script>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js?ver=1.4.2'></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
	 
	<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>  
		 
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
	<link rel='stylesheet' type='text/css' href='css sources/atgs_sec1.css'>
	<link rel='stylesheet' type='text/css' href='css sources/main.css'>
	<style>
		#sem
			{
				width:200px;
			}
		#s1 , #s2
			{
				width:70px;
				border-radius:5px;
			}
		#tclear #tdelete
		{
			position:absolute;
			top:15px;
			left:100px;
		}
		#tclear select , #tdelete select
		{
			background-color:#ff2100;
			width:200px;
			height:35px;
			border-radius:3px;
			color:white;
			font-waight:bolder;
		}
	</style>
</head>
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
							<li id="logout"><a href="index.php"><img src="images sources/logout.png" width="25" hight="25">&nbsp;Logout</a></li>
							</ul>
					</div>
					<div class="container-header">
						AUTOMATED TIMETABLE GENERATION SYSTEM
					</div>
					<div class="head-container">
					</div>
		<div class="body-container">
			<div class="title"><h3>Modify Timetable</h3></div>
			<div id="tclear">
					<form class="form-horizontal" method="post" id="f2" name="f2" action="">
				<center>
					<select name='td' id='td'>
							<option selected disabled>Reset Teacher Table</option>
					<?php
					$conn=@mysql_connect("localhost","root","");
						  mysql_select_db('atgs',$conn);
					$query ="select * from teachers";
					$result=mysql_query($query,$conn);
					while($row = mysql_fetch_array($result))
					{
					?>
							<option value='<?php echo $row['faculty_number'];?>'><?php echo $row['faculty_number'];?></option>
					<?php
					}
					?>
							
							</select>	<br><br>
					<input type="submit" name="s1" id="s1" class="btn-danger" value="Reset">
				</center>	<br><br>
					</form>		
						
					  <?php
					if(isset($_POST['s1']))
					{
					$tb = $_POST['td'];
					error_reporting(E_ALL^E_NOTICE);

					$conn=@mysql_connect("localhost","root","");
						  mysql_select_db('atgs',$conn);

					$query1 ="UPDATE $tb SET period1='',period2='',period3='',period4='',period5='',period6=''";
					mysql_query($query1,$conn);
					echo '<script type="text/javascript">alert("Record Updated");window.location=\'Modtt.php\';</script>';
					}
					?>
			</div> 
			<div id="tdelete">
					<form class="form-horizontal" method="post" id="f3" name="f3" action="">
				<center>
					<select name='td' id='td'>
							<option selected disabled>Delete Teacher Table</option>
					<?php
					$conn=@mysql_connect("localhost","root","");
						  mysql_select_db('atgs',$conn);
					$query ="select * from teachers";
					$result=mysql_query($query,$conn);
					while($row = mysql_fetch_array($result))
					{
					?>
							<option value='<?php echo $row['faculty_number'];?>'><?php echo $row['faculty_number'];?></option>
					<?php
					}
					?>
							
							</select>	<br><br>
					<input type="submit" name="s2" id="s2" class="btn-danger" value="Delete">
				</center>	<br><br>
					</form>		
						
					  <?php
					if(isset($_POST['s2']))
					{
					$tb = $_POST['td'];
					error_reporting(E_ALL^E_NOTICE);

					$conn=@mysql_connect("localhost","root","");
						  mysql_select_db('atgs',$conn);

					$query1 ="DROP TABLE $tb";
					mysql_query($query1,$conn);
					echo '<script type="text/javascript">alert("Record Updated");window.location=\'Modtt.php\';</script>';
					}
					?>
			</div> 
					<div id="addaccount"style="position:absolute;top:100px;width:250px;height:220px;left:250px;">
						<a href="Teachertableupdate.php"><img src="images sources/updateteach.jpg"width="100%"height="100%"></a>
					<h1><b><u><center>Update Faculty Table</center></u></u></b></h1>
					</div>
					<div id="generate"style="position:absolute;top:100px;width:250px;height:200px;left:1000px;">
						<a href="timetableupdate.php"><img src="images sources/updatett.png"width="100%"height="100%"></a>
					<h1><b><u><center>Update Timetable</center></u></u></b></h1>
					</div>
		</div>
			
		</div>
	</body>
</html>
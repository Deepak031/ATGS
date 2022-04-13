<?php
// Start the session
session_start();
if (isset($_GET['success'])) {
    echo "<script type='text/javascript'>alert('Time Table Generated');</script>";
}?>
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
</head>
<body>
<div id="logo">
						<img src="images sources/ATGS LOGO 3.png" height="150px" width="250" alt="logo not found">
					</div>
<div class="topnav" style="height:50px;">
			<li><a href="adminpanel.php"><img src="images sources/home.png" width="30" hight="30">&nbsp;Home</a></li>
				<li><a href="Modtt.php"><img src="images sources/ttlogo.png" width="25" hight="25">&nbsp;Modify Timetable</a></li>
				<li><a href="timetableupdate.php"><img src="images sources/updatett.png" width="25" hight="25">&nbsp;Update Samester table</a></li>
				<li id="logout"><a href="index.php"><img src="images sources/logout.png" width="25" hight="25">&nbsp;Logout</a></li>
				</ul>
		</div>
		<div class="container-header">
			AUTOMATED TIMETABLE GENERATION SYSTEM
		</div>
		<div class="head-container">
		<marquee>ATGS -There is only one Key to Success, Be on Time - Everytime</marquee>
		</div>
		<div class="body-container">
		<div class="title"><h2>Update Teacher table  </h2></div>
		<br><br>
<form class="form-horizontal" method="post" id="f2" name="f2" action="">

<select name='sem' id='sem' style="width:120px;">
		<option value=''>Select</option>
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
		
		</select>	
<input type="submit" name="s1" id="s1" class="btn-btn-success"value="search">
<br><br><br>
</form>		
    <div class="table-responsive">  
	  <table class="table table-hover" border="2">
		<tr>
		 <th style="text-align:center">WEEKDAYS</th>
                <?php
$rp = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
									"SELECT * FROM time order by lactures");
			while ($row = mysqli_fetch_assoc($rp)) {
	echo "<th style=\"text-align:center\">{$row['time']}</th>";
								}
								?>
		</tr>
  <?php
if(isset($_POST['s1']))
{
$tb = $_POST['sem'];
error_reporting(E_ALL^E_NOTICE);
$i=1;
$conn=@mysql_connect("localhost","root","");
      mysql_select_db('atgs',$conn);
$query ="select * from $tb";
$result=mysql_query($query,$conn);
while($row = mysql_fetch_array($result))
{
?>
		<form id="" name="" method="post" action="modtech.php">
		<tr>
		<input type="hidden" name="tec" value="<?php echo $tb;?>">
			    <td><?php echo $row['day'];?><input type="hidden" name="day" value="<?php echo $row['day'];?>"></td>
                <td><input type="text" name="t1" id="t1_<?php echo $i;?>" value="<?php echo $row['period1'];?>"</td>
                <td><input type="text" name="t2" id="t2_<?php echo $i;?>" value="<?php echo $row['period2'];?>"</td>
				<td><input type="text" name="t3" id="t3_<?php echo $i;?>" value="<?php echo $row['period3'];?>"</td>
				<td><input type="text" name="t4" id="t4_<?php echo $i;?>" value="<?php echo $row['period4'];?>"</td>
				<td><input type="text" name="t5" id="t5_<?php echo $i;?>" value="<?php echo $row['period5'];?>"</td>
				<td><input type="text" name="t6" id="t6_<?php echo $i;?>" value="<?php echo $row['period6'];?>"</td>
				<td><input type="submit" name="s2" value="update">
		</tr>
		 </form>
<?php
$i++;
}
}
?>
      </table>
 </div>                            
				
<!--HOME SECTION END-->

<!--<div id="footer">--><div id="foot">
    &copy 2019 Govt. Polytechnic College Balaghat | All Rights Reserved | Design by : The Java Group
					</div>
<!-- FOOTER SECTION END-->

<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="assets/js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="assets/js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="assets/js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>
</body>
</html>				

    
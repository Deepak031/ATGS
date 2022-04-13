<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Add Classrooms</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
	<link rel='stylesheet' type='text/css' href='css sources/atgs_sec1.css'>
		<link rel='stylesheet' type='text/css' href='css sources/main.css'>
		<style>
		#btn-info
				{
					position:absolute;
					top:5px;
					left:49%;
				}
		</style>
</head>
<body>

					<div id="logo">
						<img src="images sources/ATGS LOGO 3.png" height="150px" width="250" alt="logo not found">
					</div>
					<div class="topnav"style="height:50px;">
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
					<marquee>ATGS -There is only one Key to Success, Be on Time - Everytime</marquee>
					</div>
					<div class="body-container">
					<div class="title"><h2>Add Classroom</h2></div>
							<div align="center" id="btn-info" style="margin-top:67px;left:60%;">
						<form name="reset" method="POST">
						<center><input type="submit" name="s1" id="s1" class="btn-danger" value="Reset"></center>
						</form>
							 <?php
								if(isset($_POST['s1']))
								{
								error_reporting(E_ALL^E_NOTICE);

								$conn=@mysql_connect("localhost","root","");
									  mysql_select_db('atgs',$conn);

								$query1 ="TRUNCATE TABLE  classrooms;";
								mysql_query($query1,$conn);
								echo '<script type="text/javascript">alert("Record Updated");window.location=\'addclassrooms.php\';</script>';
								}
							 ?>
						</div>
						<div align="center"
							 style="margin-top:0%">
							<button
								id="classroommanual" class="btn btn-success btn-lg">ADD CLASSROOM
							</button>
						</div>

						<div id="myModal" class="modal">

							<!-- Modal content -->
							<div class="modal-content">
								<div class="modal-header">
									<span class="close">&times</span>
									<h2 id="popupHead">Add Classroom</h2>
								</div>
								<div class="modal-body" id="EnterClassroom">
									<!--Admin Login Form-->
									<div style="display:none" id="addClassroomForm">
										<form action="addclassroomFormValidation.php" method="POST">
											<div class="form-group">
												<label for="classroomname">Name</label>
												<input type="text" class="form-control" id="classroomname" name="CN"
													   placeholder="ML 32, NL 33 ...">
											</div>

											<div align="right">
												<input type="submit" class="btn btn-default" name="ADD" value="ADD">
											</div>
										</form>
									</div>
								</div>
								<div class="modal-footer">
								</div>
							</div>
						</div>

						<script>
							// Get the modal
							var modal = document.getElementById('myModal');

							// Get the button that opens the modal
							var addclassroomBtn = document.getElementById("classroommanual");
							var heading = document.getElementById("popupHead");
							var classroomForm = document.getElementById("addClassroomForm");
							// Get the <span> element that closes the modal
							var span = document.getElementsByClassName("close")[0];

							// When the user clicks the button, open the modal

							addclassroomBtn.onclick = function () {
								modal.style.display = "block";
								//heading.innerHTML = "Faculty Login";
								classroomForm.style.display = "block";
								//adminForm.style.display = "none";


							}

							// When the user clicks on <span> (x), close the modal
							span.onclick = function () {
								modal.style.display = "none";
								//adminForm.style.display = "none";
								classroomForm.style.display = "none";

							}

							// When the user clicks anywhere outside of the modal, close it
							window.onclick = function (event) {
								if (event.target == modal) {
									modal.style.display = "none";
								}
							}
						</script>

						<script>
							function deleteHandlers() {
								var table = document.getElementById("classroomstable");
								var rows = table.getElementsByTagName("tr");
								for (i = 0; i < rows.length; i++) {
									var currentRow = table.rows[i];
									//var b = currentRow.getElementsByTagName("td")[0];
									var createDeleteHandler =
										function (row) {
											return function () {
												var cell = row.getElementsByTagName("td")[0];
												var id = cell.innerHTML;
												var x;
												if (confirm("Are You Sure?") == true) {
													window.location.href = "deleteclassroom.php?name=" + id;

												}

											};
										};
									currentRow.cells[1].onclick = createDeleteHandler(currentRow);
								}
							}
						</script>

						<div align="center">
							<br>
							<style>
								table {
									margin-top: 10px;
									font-family: arial, sans-serif;
									border-collapse: collapse;
									width: 70%;
								}

								th
								{
									background-color:black;
									border: 1px solid #757373;
									text-align: left;
									padding: 8px;
									color: white;
								}
								td {
									background-color: #3073c3ab;
									border: 1px solid #757373;
									text-align: left;
									padding: 8px;
									color: black;
}

								tr:nth-child(even) {
									background-color: #dddddd;
								}
							</style>


							<table id=classroomstable>
								<caption><strong>ADDED CLASSROOMS</strong></caption>
								<tr>

									<th width="100">Name</th>
									<th width="60">Action</th>
								</tr>
								<?php
								include 'connection.php';
								$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
									"SELECT * FROM classrooms ");
								while ($row =@mysqli_fetch_assoc($q)) {
									echo "<tr><td>{$row['name']}</td>
											<td><button class='btn-danger'>Delete</button></td>
											</tr>\n";
								}
								echo "<script>deleteHandlers();</script>";
								?>
							</table>
						</div>
					</div>	
<!--HOME SECTION END-->

<!--<div id="footer">
    <!--  &copy 2014 yourdomain.com | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
--></div>
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

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Time Management</title>
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
					</div>
					<div class="body-container">
						<div class="title"><h2>Time Management</h2></div>
							<div align="center" style="margin-top: 20px">

								<button id="subjectmanual" class="btn btn-success btn-lg">Set Time</button>
							</div>
							<br>
							<center>
							<form name="rst" action="resettime.php" method = "post">
								<input type="submit" name="reset" id="reset" value="Reset" class="btn">
							</form>
							</center>
							<div id="myModal" class="modal">

								<!-- Modal content -->
								<div class="modal-content">
									<div class="modal-header">
										<span class="close">&times</span>
										<h2 id="popupHead">Time Settings</h2>
									</div>
									<div class="modal-body" id="EnterSubject">
										<!--Admin Login Form-->
										<div style="display:none" id="addSubjectForm">
											<form action="timeformvalidation.php" method="POST">
												<div class="form-group">
													<label for="number of lactures">No.Of Lecture:</label>
													<input type="text" class="form-control" id="nolac" name="NL" value"">
												</div>
												<div class="form-group">
													<label for="Duration">Duration:</label>
													<input type="text" class="form-control" id="min" name="MN" value="" placeholder="Minutes">
												</div>
												<div class="form-group">
													<label for="Extra Time">Extra Time:</label>
													<input type="text" class="form-control" id="exttm" name="ET" value=""placeholder="Minutes">
												</div>
												<div class="form-group">
													<label for="Start Time">Start Time:</label>
													<input type="text" class="form-control" id="sthr" name="STH" value=""placeholder="Hour">
													<input type="text" class="form-control" id="stmn" name="STM" value=""placeholder="Minutes">
												</div>
												
												
												<div align="right" class="form-group">
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
								var addsubjectBtn = document.getElementById("subjectmanual");
								var heading = document.getElementById("popupHead");
								var subjectForm = document.getElementById("addSubjectForm");
								// Get the <span> element that closes the modal
								var span = document.getElementsByClassName("close")[0];

								// When the user clicks the button, open the modal

								addsubjectBtn.onclick = function () {
									modal.style.display = "block";
									//heading.innerHTML = "Faculty Login";
									subjectForm.style.display = "block";
									//adminForm.style.display = "none";


								}

								// When the user clicks on <span> (x), close the modal
								span.onclick = function () {
									modal.style.display = "none";
									//adminForm.style.display = "none";
									subjectForm.style.display = "none";

								}

								// When the user clicks anywhere outside of the modal, close it
								window.onclick = function (event) {
									if (event.target == modal) {
										modal.style.display = "none";
									}
								}
							</script>


							
							<div>
								<br>
								<style>
									table {
										margin-top: 10px;
										font-family: arial, sans-serif;
										border-collapse: collapse;
										margin-left: 50px;
										width: 90%;
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
									color: white;
}
								}

								tr:nth-child(even) {
									background-color: #dddddd;
								}
								</style>

								<script>
									function deleteHandlers() {
										var table = document.getElementById("subjectstable");
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
															window.location.href = "deletesubject.php?name=" + id;

														}

													};
												};

											currentRow.cells[5].onclick = createDeleteHandler(currentRow);
										}
									}
								</script>
								<table id=subjectstable style="margin-left:10px">
									<caption><strong>Time Schedule</strong></caption>
									<tr>
										<th width="150">Lactures</th>
										<th width=300>Time</th>
										<th width="40">Action</th>
									</tr>
									<?php
									include 'connection.php';
									$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
										"SELECT * FROM time ORDER BY lactures ");
									while ($row =@mysqli_fetch_assoc($q)) {
										echo "<tr><td>{$row['lactures']}</td>
												<td>{$row['time']}</td>
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

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Subject Registration</title>
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
					<div class="title"><h2>Subject Registration</h2></div>
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

								$query1 ="TRUNCATE TABLE  subjects;";
								mysql_query($query1,$conn);
								echo '<script type="text/javascript">alert("Record Updated");window.location=\'addsubjects.php\';</script>';
								}
							 ?>
						</div>	
							
							<div align="center" style="margin-top: 20px">

								<button id="subjectmanual" class="btn btn-success btn-lg">ADD SUBJECT</button>
							</div>

							<div id="myModal" class="modal">

								<!-- Modal content -->
								<div class="modal-content">
									<div class="modal-header">
										<span class="close">&times</span>
										<h2 id="popupHead">Add Subject</h2>
									</div>
									<div class="modal-body" id="EnterSubject">
										<!--Admin Login Form-->
										<div style="display:none" id="addSubjectForm">
											<form action="addsubjectFormValidation.php" method="POST">
												<div class="form-group">
													<label for="subjectname">Subject Name</label>
													<input type="text" class="form-control" id="subjectname" name="SN"
														   placeholder="Subject's Name ...">
												</div>
												<div class="form-group">
													<label for="subjectcode">Subject Code</label>
													<input type="text" class="form-control" id="subjectcode" name="SC" placeholder="CO203 CO205...">
												</div>
												<div class="form-group">
													<label for="subjecttype">Course Type</label>
													<select class="form-control" id="subjecttype" name="ST">
														<option selected disabled>Select</option>
														<option value="THEORY">THEORY</option>
														<option value="LAB">LAB</option>

													</select>

												</div>
												<div class="form-group">
													<label for="subjectsemester">Semester</label>
													<select class="form-control" id="subjectsemester" name="SS">
														<option selected disabled>Select</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
													</select>
												</div>
												<div class="form-group">
													<label for="subjectdepartment">Department</label>
													<select class="form-control" id="subjectdepartment" name="SD">
														<option selected disabled>Select</option>
														<option value="Computer Engg.">Computer Engg.</option>
														<option value="Electronics Engg.">Electronics Engg.</option>
														<option value="Electrical Engg.">Electrical Engg.</option>
														<option value="Mechanical Engg.">Mechanical Engg.</option>
													</select>
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
									color: black;
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
									<caption><strong> Subject's Information</strong></caption>
									<tr>
										<th width="150">Code</th>
										<th width=300>Title</th>
										<th width=150>Course Type</th>
										<th width="150">Semester</th>
										<th width="150">Department</th>
										<th width="40">Action</th>
									</tr>
									<?php
									include 'connection.php';
									$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
										"SELECT * FROM subjects ORDER BY subject_code ASC ");
									while ($row = mysqli_fetch_assoc($q)) {
										echo "<tr><td>{$row['subject_code']}</td>
												<td>{$row['subject_name']}</td>
												<td>{$row['course_type']}</td>
												<td>{$row['semester']}</td>
												 <td>{$row['department']}</td>
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

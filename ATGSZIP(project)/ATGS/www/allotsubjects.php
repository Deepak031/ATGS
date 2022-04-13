<?php ini_set('max_execution_time',300);?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TimeTable Management System</title>
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
							<li><a href="allotpracticals.php"><img src="images sources/practicle.png" width="25" hight="25">&nbsp;Practicals</a></li>
							<li><a href="allotclasses.php"><img src="images sources/classroom.png" width="25" hight="25">&nbsp;Classrooms</a></li>
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
					<div class="title"><h2>Theory Classes Allocation</h2></div>
						<div align="center">
							<form action="allotmentFormvalidation.php" method="post" style="margin-top: 100px">


								<div style="margin-top: 5px">
									<select name="tobealloted" class="list-group-item">
									<option selected disabled>Select Subject</option>
										<?php
										include 'connection.php';
										$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
											"SELECT * FROM subjects");
										$row_count = mysqli_num_rows($q);
										if ($row_count) {
											$mystring = '
								 <option selected disabled>Select Subject</option>';
											while ($row = mysqli_fetch_assoc($q)) {
												if ($row['isAlloted'] == 1 || $row['course_type'] == "LAB")
													continue;
												$mystring .= '<option value="' . $row['subject_code'] . '">' . $row['subject_name'] . '</option>';
											}

											echo $mystring;
										}
										?>
									</select>
								</div>
								<div>
									<select name="toalloted" class="list-group-item">
									<option selected disabled>Select Faculty</option>
										<?php
										include 'connection.php';

										$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
											"SELECT * FROM teachers ");
										$row_count = mysqli_num_rows($q);
										if ($row_count) {
											$mystring = '
								 <option selected disabled>Select Teacher</option>';
											while ($row = mysqli_fetch_assoc($q)) {
												$mystring .= '<option value="' . $row['faculty_number'] . '">' . $row['name'] . '</option>';
											}

											echo $mystring;
										}
										?>
									</select>
								</div>
								<div style="margin-top: 10px">
									<button type="submit" class="btn btn-success btn-lg">Allot</button>
								</div>
							</form>
						</div>
						<script>
							function deleteHandlers() {
								var table = document.getElementById("allotedsubjectstable");
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
													window.location.href = "deleteallotment.php?name=" + id;

												}

											};
										};

									currentRow.cells[4].onclick = createDeleteHandler(currentRow);
								}
							}
						</script>
						<style>
							table {
								margin-top: 80px;
								margin-bottom: 50px;
								font-family: arial, sans-serif;
								border-collapse: collapse;
								margin-left: 80px;
								width: 80%;
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

						<table id=allotedsubjectstable>
							<caption><strong>THEORY COURSES ALLOTMENT</strong></caption>
							<tr>
								<th width="150">Subject Code</th>
								<th width=220>Subject Title</th>
								<th width="170">Faculty No</th>
								<th width="130">Teacher's Name</th>
								<th width="40">Action</th>
							</tr>
							<tbody>
							<?php
							include 'connection.php';
							$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
								"SELECT * FROM subjects ");

							while ($row = mysqli_fetch_assoc($q)) {
								if ($row['isAlloted'] == 0 || $row['course_type'] == 'LAB')
									continue;
								$teacher_id = $row['allotedto'];
								$t = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
									"SELECT name FROM teachers WHERE faculty_number = '$teacher_id'");
								$trow = mysqli_fetch_assoc($t);
								echo "<tr><td>{$row['subject_code']}</td>
											<td>{$row['subject_name']}</td>
											<td>{$row['allotedto']}</td>
											<td>{$trow['name']}</td>
										   <td>
											<button class='btn-danger'>Delete</button></td>
											</tr>\n";
							}
							echo "<script>deleteHandlers();</script>";
							?>
							</tbody>
						</table>
					</div>

<!--HOME SECTION END-->

<!--<div id="footer">
    <!--  &copy 2014 yourdomain.com | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
-->
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

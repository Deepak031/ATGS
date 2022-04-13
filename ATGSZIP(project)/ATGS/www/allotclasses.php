<?php ini_set('max_execution_time',300);?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Allot Classroom</title>
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
							<li><a href="allotpracticals.php"><img src="images sources/theory.png" width="25" hight="25">&nbsp;Theory</a></li>
							<li><a href="allotpracticals.php"><img src="images sources/practicle.png" width="25" hight="25">&nbsp;Practicals</a></li>
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
						<div class="title"><h2>Class Allocation</h2></div>
							<?php
							if (isset($_POST['in_class'])) {
								include 'connection.php';
								$year = $_POST['course'];
								$class = $_POST['in_class'];
								$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
									"UPDATE classrooms SET status = '$year' WHERE name = '$class'");
							}
							?>
							<form action="allotclasses.php" method="post" style="margin-top: 100px">

								<div align="center">
									<select name="course" class="list-group-item">
										<option selected disabled>Select Course</option>
										';
										<option value="1">1st Year</option>
										<option value="2">2nd Year</option>
										<option value="3">3rd Year</option>
									</select>
								</div>

								<div align="center" style="margin-top: 5px">
									<select name="in_class" class="list-group-item">
									<option selected disabled>Select Classroom</option>
										<?php
										include 'connection.php';
										$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
											"SELECT * FROM classrooms");
										$row_count = mysqli_num_rows($q);
										if ($row_count) {
											$mystring = '
										 <option selected disabled>Select Classroom</option>';
											while ($row = mysqli_fetch_assoc($q)) {
												if ($row['status'] != 0)
													continue;
												$mystring .= '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
											}
											echo $mystring;
										}
										?>
									</select>
								</div>
								<div align="center" style="margin-top: 10px;">
									<button type="submit" class="btn btn-success btn-lg">Allot</button>
								</div>
							</form>

							<script>
								function deleteHandlers() {
									var table = document.getElementById("allotedclassroomstable");
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
														window.location.href = "deleteclassroomallo.php?name=" + id;

													}

												};
											};

										currentRow.cells[2].onclick = createDeleteHandler(currentRow);
									}
								}
							</script>
							<div align="center">
								<style>
									table {
										margin-top: 70px;
										margin-bottom: 50px;
										font-family: arial, sans-serif;
										border-collapse: collapse;
										margin-left: 80px;
										width: 60%;
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

								<table id=allotedclassroomstable>
									<caption><strong>CLASSROOMS ALLOTMENT</strong></caption>
									<tr>
										<th width="250">Classroom</th>
										<th width="300">Alloted To</th>
										<th width="60">Action</th>
									</tr>
									<tbody>
									<?php
									include 'connection.php';
									$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
										"SELECT * FROM classrooms ");
									$courses = array('none','1st Year', '2nd Year', '3rd Year');
									while ($row = mysqli_fetch_assoc($q)) {
										if ($row['status'] == 0)
											continue;

										echo "<tr><td>{$row['name']}</td>
												<td>{$courses[$row['status']]}</td>
											<td><button class='btn-danger'>Delete</button></td>
												</tr>\n";

									}
									echo "<script>deleteHandlers();</script>";
									?>
									</tbody>
								</table>
							</div>
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

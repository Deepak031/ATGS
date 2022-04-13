<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<meta name="description" content=""/>
		<meta name="author" content=""/>
		<title>Faculty Registration</title>
		<link rel='stylesheet' type='text/css' href='css sources/atgs_sec1.css'>
			<link rel='stylesheet' type='text/css' href='css sources/main.css'>
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
		<style>
				a
				{
					color:white;
				}
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
					<div class="title"><h2>Faculty Registration</h2></div>
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

								$query1 ="TRUNCATE TABLE  teachers;";
								mysql_query($query1,$conn);
								echo '<script type="text/javascript">alert("Record Updated");window.location=\'addteachers.php\';</script>';
								}
							 ?>
						</div>	
								<div align="center" style="margin-top:20px">
									<button id="teachermanual" class="btn btn-success btn-lg">ADD TEACHER</button>
								</div>
						<div id="myModal" class="modal">

							<!-- Modal content -->
							<div class="modal-content">
								<div class="modal-header">
									<span class="close">&times</span>
									<h2 id="popupHead">Add Teacher</h2>
								</div>
								<div class="modal-body" id="EnterTeacher">
									<!--Admin Login Form-->
									<div style="display:none" id="addTeacherForm">
										<form action="addteacherFormValidation.php" method="POST">
											<div class="form-group">
											<br>
												<input type="text" class="form-control" id="teachername" name="TN"
													   placeholder="Teacher's Name ...">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="facultyno" name="TF" placeholder="Faculty No. Ex. t01,t02">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="alias_name" name="AL" placeholder="Alias..">
											</div>
											<div class="form-group">
												<select class="form-control" id="designation" name="TD">
													<option selected disabled>Select</option>
													<option value="Professor">Professor</option>
													<option value="Assistant Professor">Assistant Professor</option>
													<option value="Associate Professor">Associate Professor</option>
													<option value="Guest Faculty">Guest Faculty</option>
												</select>
											</div>
											
											<div class="form-group">
												<input type="text" class="form-control" id="teachercontactnumber" name="TP"
													   placeholder="Mobile No.">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="teacheremailid" name="TE"
													   placeholder="Email address">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="quali" name="quali" placeholder="Qualification">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="exp" name="exp" placeholder="Experience">
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
							var addteacherBtn = document.getElementById("teachermanual");
							var heading = document.getElementById("popupHead");
							var facultyForm = document.getElementById("addTeacherForm");
							// Get the <span> element that closes the modal
							var span = document.getElementsByClassName("close")[0];

							// When the user clicks the button, open the modal

							addteacherBtn.onclick = function () {
								modal.style.display = "block";
								//heading.innerHTML = "Faculty Login";
								facultyForm.style.display = "block";
								//adminForm.style.display = "none";


							}

							// When the user clicks on <span> (x), close the modal
							span.onclick = function () {
								modal.style.display = "none";
								//adminForm.style.display = "none";
								facultyForm.style.display = "none";

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
									margin-left: 30px;
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
								}

								tr:nth-child(even) {
									background-color:blue;
								}
							</style>

							<script>
								function deleteHandlers() {
									var table = document.getElementById("teacherstable");
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
														window.location.href = "deleteteacher.php?name=",+ id;

													}

												};
											};
										currentRow.cells[8].onclick = createDeleteHandler(currentRow);
									}
								}
							</script>

							<table id=teacherstable style="margin-left: 10px">
								<caption><strong>Teacher's Information </strong></caption>
								<tr>
									<th width="7%">Faculty No</th>
									<th width="18%">Name</th>
									<th width="5%">Alias</th>
									<th width="10%">Designation</th>
									<th width="10%">Contact No.</th>
									<th width="20%">Email ID</th>
									<th width="10%">Qualification</th>
									<th width="10%">Experience</th>
									<th width="10%">Action</th>
								</tr>
								<tbody>
								<?php
								include 'connection.php';
								$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
									"SELECT * FROM teachers ORDER BY faculty_number ASC");

								while ($row = mysqli_fetch_assoc($q)) {
									?>
									<tr>
									<td><?php echo $row['faculty_number'];?></td>
									<td><?php echo $row['name'];?></td>
									<td><?php echo $row['alias'];?></td>
									<td><?php echo $row['designation'];?></td>
									<td><?php echo $row['contact_number'];?></td>
									<td><?php echo $row['emailid'];?></td>
									<td><?php echo $row['quali'];?></td>
									<td><?php echo $row['exp'];?></td>
								
									 <td>
									<a href="t_delete.php?id=<?php echo $row['faculty_number'];?>"><button class="btn-danger">Delete</button></a></td>
											</tr>
								<?php
								}
							
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

	
	</body>
</html>

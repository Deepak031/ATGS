<?php
ini_set('max_execution_time',300);
// Start the session
session_start();
if (isset($_GET['success'])) {
    echo "<script type='text/javascript'>alert('Time Table Generated');</script>";
}
?>
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
		<div class="title"><h2>Time Table Generation </h2></div>
		<center>
			<form method="post" action="d_sess.php">
			<select id="sess" name="sess" class="btn btn-default" name="sess">
			<option selected disabled>Select Current Session </option>
			<option value="odd">July-December</option>
			<option value="even">January-June</option>
			</select>
			
			<button type="submit" name="s1" id="s1" class="btn btn-success btn-lg">Set</button>
			</form>
		</center>
		<?php
		$ft = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
    "select * from sess WHERE id=1");
	$ftr = mysqli_fetch_assoc($ft);
	$_SESSION['ST']=$ftr['status'];
	?>
		
		


					<!--Algorithm Implementation-->
					<div id="myModal" class="modal">

						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<span class="close">&times</span>
								<h2 id="popupHead">Assign Substitute</h2>
							</div>
							<div class="modal-body" id="AssignSubstitute">
								<!--Admin Login Form-->

								<div style="display:block" id="assignSubstituteForm">
									<form method="post" action="assignSubstituteFormValidation.php">
										<div class="form-group">
											<label for="substitute">Substitute</label>
											<select class="form-control" id="substitute" name="SB">

											</select>
											<input type="hidden" id="cell_number" class="btn btn-default" name="CN">

										</div>
										<div align="right" class="form-group">

											<input type="submit" id="submit" class="btn btn-default" name="ADD" value="CHECK">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<script>
						var assignsubstitueForm = document.getElementById("assignSubstitueForm");
						// Get the <span> element that closes the modal
						var modal = document.getElementById('myModal');
						var span = document.getElementsByClassName("close")[0];
						span.onclick = function () {
							modal.style.display = "none";
							assignsubstitueForm.style.display = "none";
						}

						// When the user clicks anywhere outside of the modal, close it
						window.onclick = function (event) {
							if (event.target == modal) {
								modal.style.display = "none";
								assignsubstitueForm.style.display = "none";
							}
						}
					</script>
					<?php if($_SESSION['ST']=='odd')
					{
						?>
					<form action="algo.php" method="post">
					<?php
					}else{
						?>
						<form action="algo2.php" method="post">
						<?php
					}
					?>
						<div align="center" style="margin-top: 50px">
							<button type="submit"
									id="generatebutton" class="btn btn-success btn-lg">GENERATE
							</button>
						</div>
					</form>
					
					<form action="generatetimetable.php" method="post">
						<div align="center" style="margin-top: 30px">
							<select name="select_teacher" class="list-group-item">
								<option selected disabled>Select Teacher</option>
								<?php
								$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
									"SELECT * FROM teachers ");
								while ($row = mysqli_fetch_assoc($q)) {
									echo " \"<option value=\"{$row['faculty_number']}\">{$row['name']}</option>\"";
								}
								?>

							</select>
							<button type="submit" id="viewteacher" class="btn btn-success btn-lg" style="margin-top: 5px">VIEW TIMETABLE
							</button>
						</div>
					</form>
					<form action="generatetimetable.php" method="post">
						<div align="center" style="margin-top: 20px">
							<select name="select_semester" class="list-group-item">
								<option selected disabled>Select Semester</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
							<button type="submit" id="viewsemester" class="btn btn-success btn-lg" style="margin-top: 5px">VIEW TIMETABLE
							</button>
						</div>
					</form>
					<script>
						var index = -1;
						function Substitute() {
							var table = document.getElementById("timetable");
							var cells = table.getElementsByTagName("td");
							// window.alert(cells[3].innerHTML.toString());
							for (i = 0; i < cells.length; i++) {
								if (i % 8 == 6 || i % 8 == 7 || parseInt(i / 8) == 0 || i % 8 == 0) {
									continue;
								}
								var currentCell = cells[i];
								//var b = currentRow.getElementsByTagName("td")[0];
								var createSubstituteHandler =
									function (cell, i) {
										return function () {

											document.getElementById('cell_number').value = i;
											index = i;
											var xmlhttp = new XMLHttpRequest();
											xmlhttp.onreadystatechange = function () {
												if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
													var modal = document.getElementById('myModal');
													modal.style.display = "block";
													document.getElementById("substitute").innerHTML = this.responseText;

												}
											};
											xmlhttp.open("GET", "getcellindex.php?i=" + i, false);
											xmlhttp.send();
										};
									};
								currentCell.onclick = createSubstituteHandler(currentCell, i);
							}
						}
					</script>

					<div>
						<br>
						<style>
							table {
								margin-top: 20px;
								font-family: arial, sans-serif;
								border-collapse: collapse;
								width: 100%;
							}
								th
								{
									background-color:White;
									padding: 4px;
								}
							td, th {
								border: 2px solid #dddddd;
								text-align: left;
								padding: 4px;
							}

							tr:nth-child(even) {
								background-color: #ffffff;
							}

							tr:nth-child(odd) {
								background-color: #0096BE;
							}
						</style>
						<div id="TT" style="background-color: #FFFFFF">
        <table border="2" cellspacing="3" align="center" id="timetable" width="100%">
            <caption><strong><br><br>
                    <?php
                    if (isset($_POST['select_semester'])) {
                        echo "<div style='background-color:#0096BE;width:65%;'><h1>COMPUTER SCIENCE & ENGG. DEPARTMENT <br>SEMESTER " . $_POST['select_semester'] . " </h1></div>";
                        $year = (int)($_POST['select_semester'] / 2) + $_POST['select_semester'] % 2;
                        $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "atgs"), "SELECT * from classrooms
                        WHERE status = '$year'"));
                        echo " ( " . $r['name'], " ) ";
                    } else if (isset($_POST['select_teacher'])) {
                        $id = $_POST['select_teacher'];
                        $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "atgs"), "SELECT * from teachers
                        WHERE faculty_number = '$id'"));
                        echo $r['name'];
                    } else if (isset($_GET['display'])) {
                        $id = $_GET['display'];
                        $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "atgs"), "SELECT * from teachers
                        WHERE faculty_number = '$id'"));
                        echo $r['name'];

                    }
                    ?>
                </strong></caption>
            <tr>
                <th style="text-align:center">WEEKDAYS</td>
				<?php
$rp = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
									"SELECT * FROM time order by lactures");
			while ($row = mysqli_fetch_assoc($rp)) {
	echo "<th style=\"text-align:center\">{$row['time']}</td>";
								}
								?>

                
            </tr>
            <tr>
                <?php
                $table = null;
                if (isset($_POST['select_semester'])) {
                    $table = " semester" . $_POST['select_semester'] . " ";
                } else if (isset($_POST['select_teacher'])) {
                    $table = " " . $_POST['select_teacher'] . " ";
                } else if (isset($_GET['display'])) {
                    $table = " " . $_GET['display'] . " ";
                } else
                    echo '</table>';
			
                if (isset($_POST['select_semester']) || isset($_POST['select_teacher']) || isset($_GET['display'])) {
                    $q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
                        "SELECT * FROM" . $table);
                    $qq = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
                        "SELECT * FROM subjects");
                    $days = array('MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY');
                    $i = -1;
                    $str = "<br>";
                    $tid = "";
                    if (isset($_POST['select_semester'])) {
                        while ($r = mysqli_fetch_assoc($qq)) {
                            if ($r['isAlloted'] == 1 && $r['semester'] == $_POST['select_semester']) {
                                $str .= $r['subject_code'] . ": " . $r['subject_name'] . ", ";
                                if (isset($r['allotedto'])) {
                                    $id = $r['allotedto'];
                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
                                        "SELECT * FROM teachers WHERE faculty_number = '$id'");
                                    $rr = mysqli_fetch_assoc($qqq);
                                    $str .= " " . $rr['alias'] . ": " . $rr['name'] . " ";
                                }
                                if ($r['course_type'] !== "LAB") {
                                    $str .= "<br>";
                                    continue;
                                } else {
                                    $str .= ", ";
                                }
                                if (isset($r['allotedto2'])) {
                                    $id = $r['allotedto2'];
                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
                                        "SELECT * FROM teachers WHERE faculty_number = '$id'");
                                    $rr = mysqli_fetch_assoc($qqq);
                                    $str .= " " . $rr['alias'] . ": " . $rr['name'] . ", ";
                                }
                                if (isset($r['allotedto3'])) {
                                    $id = $r['allotedto3'];
                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
                                        "SELECT * FROM teachers WHERE faculty_number = '$id'");
                                    $rr = mysqli_fetch_assoc($qqq);
                                    $str .= " " . $rr['alias'] . ": " . $rr['name'] . "<br>";
                                }
                            }
                        }
                    } else if (isset($_POST['select_teacher']) || isset($_GET['display'])) {
                        if (isset($_POST['select_teacher'])) {
                            $tid = $_POST['select_teacher'];
                        } else if (isset($_GET['display'])) {
                            $tid = $_GET['display'];
                            $tid = strtoupper($tid);
                        }
						echo "<b>";
                        while ($r = mysqli_fetch_assoc($qq)) {
                            if ($r['isAlloted'] == 1 && $r['allotedto'] == $tid) {
                                $str .= $r['subject_code'] . ": " . $r['subject_name'] . " <br>";
                            } else if ($r['isAlloted'] == 1 && isset($r['allotedto2']) && $r['allotedto2'] == $tid) {
                                $str .= $r['subject_code'] . ": " . $r['subject_name'] . " <br>";
                            } else if ($r['isAlloted'] == 1 && isset($r['allotedto3']) && $r['allotedto3'] == $tid) {
                                $str .= $r['subject_code'] . ": " . $r['subject_name'] . " <br>";
                            }
                        }
						echo "</b>";
                    }
                    while ($row =@mysqli_fetch_assoc($q)) {
                        $i++;

                        echo "
                 <tr><td style=\"text-align:center\">$days[$i]</td>
                 <td style=\"text-align:center\">{$row['period1']}</td>
                <td style=\"text-align:center\">{$row['period2']}</td>
                <td style=\"text-align:center\">{$row['period3']}</td>
				<td style=\"text-align:center\">LUNCH</td>
                 <td style=\"text-align:center\">{$row['period4']}</td>
                  <td style=\"text-align:center\">{$row['period5']}</td>
                  
                  <td style=\"text-align:center\">{$row['period6']}</td>
                </tr>\n";
                    }

                    echo '</table>';
                    $sign = "GENERATED VIA AUTOMATED TIMETABLE GENERATED SYSTEM, COMPUTER ENGINEERING DEPARTMENT, GPCBGT.";
                    echo "<div style='margin-left: 10px' align='center'>" . "<br>" . $str . "<br></div>" .
                        "<div style='margin-left: 10px' align='center'>" . "<strong>" . $sign . "<br></strong></div>";
                }
                if (isset($_POST['select_teacher'])) {
                    echo "<script>Substitute();</script>";
                    $_SESSION['shown_id'] = $_POST['select_teacher'];
                }
                if (isset($_GET['display'])) {
                    echo "<script>Substitute();</script>";
                    $_SESSION['shown_id'] = $_GET['display'];
                }
                ?>
    </div>	
	<center>
<form action="generatetimetable.php" method="post">	
<input type="submit" name="pdf" id="pdf" class="btn btn-danger" value="Save as pdf" onclick="window.print();">
</form></center>
?>
		</div>
<!--HOME SECTION END-->

<!--<div id="footer">-->
    &copy 2019 Govt. Polytechnic College Balaghat | All Rights Reserved | Design by : The Java Group
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

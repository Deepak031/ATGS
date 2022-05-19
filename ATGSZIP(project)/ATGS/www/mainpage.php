<?php
	if (isset($_GET['generated']) && $_GET['generated'] == "false") 
		{
			unset($_GET['generated']);
			echo '<script>alert("Timetable not generated yet!!");</script>';
		}
?>
<!DOCTYPE html>
<html >
	<head>
		<title>Automated Time table Generation System</title>
		<link rel="stylesheet" type="text/css" href="css sources/main.css">
		<script language="javascript" type="text/javascript" src="js sources/savepdf.js"
		<style>
			.body-container #frm2 
			{
				position:absolute;
				top:-40px;
				width:400px;
				right:50px;
				padding:10px;
			}
			.body-container #frm2 form
			{
				padding:5px;
			}
			.body-container #frm2 form input 
			{
				background:transparent;
				border:1px solid #999;
				width:200px;
				height:35px;
			}
			.body-container #frm2 #login_btn
			{
				width:90px;
				height:35px;
				border:6px solid blue
			}
			#logfrm
			{
				font-size:20px;
			}
			.body-container #frm2 form  .active
			{
				background:transparent;
				color:black;
				font-size:14px;
				border:6px solid blue;
				height:35px;
			}
		</style>
	</head>
	<body>
		<div id="logo">
			<img src="images sources/ATGS LOGO 3.png" height="150px" width="250" alt="logo not found">
		</div>
		<div class="topnav">
			<a href="#">About us</a>
			<a href="#">Print Timetable</a>
			<a href="#">Guide</a>
			<a href="#">Timetable Collections</a>
		</div>
			<br><br><br><br>
		<div align="center" STYLE="margin-top: 30px">
			<button data-scroll-reveal="enter from the bottom after 0.2s"
            id="teacherLoginBtn" class="btn btn-info btn-lg">TEACHER LOGIN
    </button>
    <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="adminLoginBtn" class="btn btn-success btn-lg">ADMIN LOGIN
    </button>
</div>
<br>
<div align="center">
    <form data-scroll-reveal="enter from the bottom after 0.2s" action="studentvalidation.php" method="post">
        <select id="select_semester" name="select_semester" class="list-group-item">
            <option selected disabled>Select Semester</option>
            <option value="1"> B.Tech I Year ( Semester I )</option>
            <option value="2"> B.Tech I Year ( Semester II )</option>
            <option value="3"> B.Tech II Year ( Semester III )</option>
            <option value="4"> B.Tech II Year ( Semester IV )</option>
            <option value="5"> B.Tech III Year ( Semester V )</option>
            <option value="6"> B.Tech III Year ( Semester VI )</option>
            <option value="7"> B.Tech IV Year ( Semester VII )</option>
            <option value="8"> B.Tech IV Year ( Semester VIII )</option>
        </select>
        <button type="submit" class="btn btn-info btn-lg" style="margin-top: 10px">Download</button>
    </form>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Modal Header</h2>
        </div>
        <div class="modal-body" id="LoginType">
            <!--Admin Login Form-->
            <div style="display:none" id="adminForm">
                <form action="adminFormvalidation.php" method="POST">
                    <div class="form-group">
                        <label for="adminname">Username</label>
                        <input type="text" class="form-control" id="adminname" name="UN" placeholder="Username ...">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="PASS"
                               placeholder="Password ...">
                    </div>
                    <div align="right">
                        <input type="submit" class="btn btn-default" name="LOGIN" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>
        <!--Faculty Login Form-->
        <div style="display:none" id="facultyForm">
            <form action="facultyformvalidation.php" method="POST" style="overflow: hidden">
                <div class="form-group">
                    <label for="facultyno">Faculty No.</label>
                    <input type="text" class="form-control" id="facultyno" name="FN" placeholder="Faculty No. ...">
                </div>
                <div align="right">
                    <button type="submit" class="btn btn-default" name="LOGIN">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var teacherLoginBtn = document.getElementById("teacherLoginBtn");
    var adminLoginBtn = document.getElementById("adminLoginBtn");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("facultyForm");
    var adminForm = document.getElementById("adminForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    adminLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Admin Login";
        adminForm.style.display = "block";
        facultyForm.style.display = "none";

    }
    teacherLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Faculty Login";
        facultyForm.style.display = "block";
        adminForm.style.display = "none";


    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        adminForm.style.display = "none";
        facultyForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<!--HOME SECTION END-->

<br><br>
<!-- CONTACT SECTION END-->
<div id="footer">

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
</div>
</body>
</html>

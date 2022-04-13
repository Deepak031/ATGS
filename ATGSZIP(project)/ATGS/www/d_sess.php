<?php
include 'connection.php';
$sess=$_POST['sess'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
    "update sess set status='$sess' WHERE id=1");

echo "<script>alert('Update $sess');</script>";
header("Location:generatetimetable.php");
		?>
<?php
include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
    "UPDATE classrooms SET status='' WHERE name = '$id'");
if ($q) {

    header("Location:allotclasses.php");

} else {
    echo 'Error';
}
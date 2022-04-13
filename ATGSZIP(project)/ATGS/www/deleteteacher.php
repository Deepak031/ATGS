<?php

include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
    "DELETE FROM teachers WHERE faculty_number = '$id' ");
$drop = "DROP TABLE " . $id;

$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"), $drop);
if ($drop) {

    header("Location:addteachers.php");

} else {
    echo 'Error';
}
?>


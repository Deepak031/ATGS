<?php
 'connection.php';
if (isset($_POST['TN']) && isset($_POST['TF']) && isset($_POST['TE']) && isset($_POST['TD']) && isset($_POST['AL']) && isset($_POST['quali']) && isset($_POST['exp'])) {
    $name = $_POST['TN'];
    $facno = $_POST['TF'];
    $designation = $_POST['TD'];
    $alias = $_POST['AL'];
    $contact = $_POST['TP'];
    $email = $_POST['TE'];
	$quali = $_POST['quali'];
    $exp = $_POST['exp'];
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
 "INSERT INTO teachers VALUES ('$facno','$name','$alias','$designation','$contact','$email','$quali','$exp')");
$sql = "CREATE TABLE " . $facno . " (
day VARCHAR(10) PRIMARY KEY, 
period1 VARCHAR(30),
period2 VARCHAR(30),
period3 VARCHAR(30),
period4 VARCHAR(30),
period5 VARCHAR(30),
period6 VARCHAR(30)
)";
mysqli_query(mysqli_connect("localhost", "root", "", "atgs"), $sql);
$days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
for ($i = 0; $i < 6; $i++) {
    $day = $days[$i];
    $sql = "INSERT into " . $facno . " VALUES('$day','','','','','','')";
    mysqli_query(mysqli_connect("localhost", "root", "", "atgs"), $sql);
}
if ($q) {
    $message = "Faculty Added ";
    header("Location:addteachers.php");
    echo "<script type='text/javascript'>alert('$message');</script>";
    // header("Location:addteachers.php");
} else {
    $message = "No Response\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

?>
<?php
include 'config.php';
if (isset($_POST['username']) && isset($_POST['pwd'])) {
	session_start();
    $id = $_POST['username'];
    $password = $_POST['pwd'];
	$query =mysql_query("SELECT * FROM admin_login 
			WHERE username = '$id' and password = '$password'");
$records = mysql_num_rows($query);
$row = mysql_fetch_array($query);
      if ($records==0)
         {
       echo '<script type="text/javascript">alert("Wrong UserName or Password");
			window.location=\'forget.php\';</script>';
         }
         else
         {
	     $_SESSION['Name']=$row['Name'];
	      $_SESSION['Username']=$row['username'];
          $_SESSION['Pass']=$row['password'];
          // $_SESSION['Mobile']=$row['Mob'];
		  $_SESSION['Desig']=$row['designation']; 
		$name=$_SESSION['Name'];
 echo '<script type="text/javascript">alert(" '.$name.' Welcome to Admin Panel");
	  window.location=\'adminpanel.php\';</script>';
         } 
} 
?>

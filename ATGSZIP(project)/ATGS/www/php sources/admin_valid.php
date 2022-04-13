<?php
$name="";
$usr="";
$pwd="";
$cpwd="";
$eml="";
$desg="";
include"dbconfig.php";
if(isset($_REQUEST['verify']))
	{
		$name=$_REQUEST['name'];
		$usr=$_REQUEST['usrname'];
		$pwd=$_REQUEST['newpassword'];
		$cpwd=$_REQUEST['cfmpassword'];
		$eml=$_REQUEST['eml'];
		$desg=$_REQUEST['desg'];
		
	$quary="insert into admin_login values('$name','$usr','$pwd','$cpwd','$eml','$desg')";
	}
?>
<?php
include 'connection.php';
	if (isset($_POST['NL']) && isset($_POST['MN']) && isset($_POST['ET']) && isset($_POST['STH']) && isset($_POST['STM']))
	{
		$nol = $_POST['NL'];
		$m = $_POST['MN'];
		$ext = $_POST['ET'];
		$sthr = $_POST['STH'];
		$stmin = $_POST['STM'];
		$am="am";
		//  $message = "nTry again.";
		// echo "<script type='text/javascript'>alert('$message');</script>";
	 
		$ctm = $stmin;
		$cth = $sthr;
		$cen=$nol/2 + 1;
		$nol=$nol+1;
		$q =mysqli_query(mysqli_connect("localhost", "root", "", "atgs"), "INSERT INTO time VALUES ('1','$sthr:$stmin $am');");
		for($i=2;$i<$nol;$i++)
		{
			if($ctm>60 || $ctm==60 || $ctm==0)
				{
					$cth=$cth+1;
					$ctm=$ctm-60;
						if($cth>12)
						{
							$cth=1;
						}
						if($cth>11)
						{
							$am="pm";
						}
					$q =mysqli_query(mysqli_connect("localhost", "root", "", "atgs"), "INSERT INTO time VALUES ('$i','$cth:$ctm $am');");	
				}
				if($i>1)
				{	
				$ctm=$ctm+$m;
				}
				if($i==$cen)
						{
							$ctm=$ctm+$ext;
						}
					if($ctm=0)
					{
						$ctm=00;
					}
				$q =mysqli_query(mysqli_connect("localhost", "root", "", "atgs"), "INSERT INTO time VALUES ('$i','$cth:$ctm $am');");
				
		}
		if($m<60)
		{
			if($ctm>00 || $ctm==00)
			{
					if($cth>12)
					{
						$cth=1;
					}
					if($cth>11)
					{
						$am="pm";
					}
					if($i>1)
				{	
				$ctm=$ctm+$m;
				}
				if($ctm>60 || $ctm==60)
				{
					$cth=$cth+1;
					$ctm=$ctm-60;
				}
				if($i==$cen)
					{
						$ctm=$ctm+$ext;
					}
				$q =mysqli_query(mysqli_connect("localhost", "root", "", "atgs"), "INSERT INTO time VALUES ('$i','$cth:$ctm $am');");
			}
			
		}
	}
	else
		{
			$message = "Try again";
			echo "<script type='text/javascript'>alert('$message');</script>";
			die();
		}
	if ($q) {
		$message = "Time Set Successfully.";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Location:Timemanagement.php");
	} else {
		$message = "error occured\\nTry again.";
		echo "<script type='text/javascript'>alert('$message');</script>";
		// header("Location:index.php");

	}
?>
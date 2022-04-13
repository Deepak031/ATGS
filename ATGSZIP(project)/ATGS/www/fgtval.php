<?php 
						$un="";
						$sa="";
						$np="";
						$cp="";
						$un=$_POST['UN'];
						$sa=$_POST['SA'];
						$np=$_POST['np'];
						$cp=$_POST['cp'];
						if(isset($_POST['search']))
						{
							$sq = mysqli_query(mysqli_connect("localhost", "root", "", "atgs"),
							"select Security questions from admin_login WHERE username=$un");
						}
?>
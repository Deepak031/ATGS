<?php 
								if(isset($_POST['reset']))
								{
									include 'connection.php';
									$q =mysqli_query(mysqli_connect("localhost", "root", "", "atgs"), "TRUNCATE TABLE time;");
									if ($q) 
									{
										$message = "Reset Successfully.";
										echo "<script type='text/javascript'>alert('$message');</script>";
										header("Location:Timemanagement.php");
									} 
									else
									{
										$message = "error occured\\nTry again.";
										echo "<script type='text/javascript'>alert('$message');</script>";
										header("Location:Timemanagement.php");
									}
								}
							?>
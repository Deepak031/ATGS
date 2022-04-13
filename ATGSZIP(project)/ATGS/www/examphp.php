<?php
						include "connection.php";
						$l=$_POST['exno'];
						if(isset($_POST['nxt']))
						{
							for($i = 1;$i<$l+1;$i++)
							{
								echo "<table><tr><td>
								Date of Exam $i </td>
								<td><input type='date' name='exdt$i' id='exdt$i' value=''></td></tr><br><br>";
							}
						}
					?>
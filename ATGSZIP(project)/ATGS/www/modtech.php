<?php
$day=$_POST['day'];
$tec=$_POST['tec'];
echo $sem;
$t1=$_POST['t1'];
$t2=$_POST['t2'];
$t3=$_POST['t3'];
$t4=$_POST['t4'];
$t5=$_POST['t5'];
$t6=$_POST['t6'];

$conn=@mysql_connect("localhost","root","");
      mysql_select_db('atgs',$conn);

$query1 ="UPDATE $tec SET period1='$t1',period2='$t2',period3='$t3',period4='$t4',period5='$t5',period6='$t6' WHERE day='$day'";
mysql_query($query1,$conn);
echo '<script type="text/javascript">alert("Record Updated");window.location=\'Teachertableupdate.php\';</script>';
?>
<?php
$dbserver="localhost";
$dbuser="root";
$dbpwd="";
$dbname="atgs";

function my_iud($query)
{
global $dbserver,$dbuser,$dbpwd,$dbname;
$cid=@mysql_connect($dbserver,$dbuser,$dbpwd) or die('try again');
mysql_select_db($dbname,$cid);
mysql_query($query,$cid);
$n=mysql_affected_rows($cid);
mysql_close($cid);
return $n;
}

?>
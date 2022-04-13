$dbserver="localhost";
		$dbuser="root";
		$dbpwd="";
		$database="atgs";
		$id=@mysql_connect($dbserver,$dbuser,$dbpwd);
		mysql_select_db($database,$id);
		mysql_query($quary,$id);
		$n=mysql_affected_rows($id);
		echo"$n";
		echo"$name,$usr,$pwd,$cpwd,$bnch,$mob,$desg";
		mysql_close($id);
	
<?php




// Connect to MySQL
	$username = "root";
	$password = "";
	$hostname = "localhost";
	
	//Connect to server
	$link = mysql_connect($hostname, $username, $password)
		or die("Unable to connect to Server");
	echo "Connection to Server established<br>";

	//Select database
	$db_selected = mysql_select_db("facebook_events", $link);
	
	echo "Connection to facebook_events database established<br>";
	
	//Gia na emfanizei ellhnika
	mysql_query("SET NAMES utf8"); 
	mysql_query('set character set greek',$db_selected);
	mysql_query("SET NAMES 'greek'",$db_selected);
	
	$sql = "INSERT INTO admins (username, password) VALUES ('admin','admin')";
		//an iparxei idio PRIMARY KEY dld idio Name tote kanei to update pou tou leme
		mysql_query($sql) or die(mysql_error()."<br />".$sql);
	
?>
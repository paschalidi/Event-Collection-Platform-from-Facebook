<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
	
	error_reporting (E_ALL ^ E_NOTICE);//hide warning and notices
	error_reporting(E_ERROR | E_PARSE | E_NOTICE);
	error_reporting(0);
	
	
	define ('FACEBOOK_SDK_V4_SRC_DIR', 'facebook-php-sdk-v4-4.0-dev/src/Facebook/');
	require __DIR__ . '/facebook-php-sdk-v4-4.0-dev/autoload.php';
	
	use Facebook\FacebookSession;
	use Facebook\FacebookRequest;
	
	$appId = '1600076876943388';
	$appSecret = 'bc56db4037675e9b8f2fd30a4f24c96e';
	
	FacebookSession::setDefaultApplication($appId, $appSecret);
	
	$accessToken = $appId."|".$appSecret;
	
	$names=array();
	$times=array();
	$owners=array();
	$categories=array();
	$descriptions=array();
	$covers=array();
	$latitudes=array();
	$longitudes=array();

	
	$ar=array();
	
	if( isset($_SESSION['page_id'])){
		$page_id1=$_SESSION['page_id'];
		$ar[0] = 'https://graph.facebook.com/v2.3/'.$page_id1.'/events?fields=cover,name,owner,description,start_time,place&access_token='.$accessToken;
	}	
	
	
// Connect to MySQL
	$username = "root";
	$password = "0";
	$hostname = "localhost";
	$dbname = "facebook_events";

	$link = new mysqli($hostname, $username, $password, $dbname);
	// Check connection
	if ($link->connect_error) {
		 die("Connection failed: " . $link->connect_error);
	} 	


//Managing update
	if( isset($_SESSION['update_event'])){
		$sql_id = "SELECT pageId FROM table4";
		$result = $link->query($sql_id);
		$numrows=$result->num_rows;
		
		if ($numrows > 0) {
		
			$event_ids=array();
			while($row = $result->fetch_assoc()) 
			{
				$event_ids[]=$row["pageId"];	 
			}
		
			for ($i = 0; $i < $numrows; $i++) 
			{
				$ar[$i] = 'https://graph.facebook.com/v2.3/'.$event_ids[$i].'/events?fields=cover,name,owner,description,start_time,place&access_token='.$accessToken;
			}
		}		
	}

	
//Put event fields in array	
	$page_counter = 0;
	$length = count($ar);
	for ($i = 0; $i < $length; $i++) 
	{
		$json0 = json_decode(file_get_contents($ar[$i]));
		
		$page_counter++;
		
		foreach($json0->data as $mydata)
		{			
			$name = mysqli_real_escape_string($link, $mydata->name);
			$names[]=$name;
			
			$start_time = mysqli_real_escape_string($link, $mydata->start_time);
			$times[] = $start_time;
			
			$owner = mysqli_real_escape_string($link, $mydata->owner->name);
			$owners[] = $owner;
			
			$category = mysqli_real_escape_string($link, $mydata->owner->category);
			$categories[] = $category;
			
			$description = mysqli_real_escape_string($link, $mydata->description);
			$descriptions[] = $description;
			
			$cover = mysqli_real_escape_string($link, $mydata->cover->source);
			$covers[] = $cover;
			
			$place = mysqli_real_escape_string($link, $mydata->place-> location->latitude);
			$latitudes[] = $place;
			
			$place = mysqli_real_escape_string($link, $mydata->place-> location->longitude);
			$longitudes[] = $place;
		}	
	}
	
	
	$length2 = count($names);
	$ids=array();
	for($i=0; $i<$length2; $i++){
		$ids[$i]=$i;
	}
	
//Insert values to phpmyadmin database	
	mysqli_query($link,"set names 'utf8'" );//Gia na emfanizei ellhnika
	mysqli_query($link, "SET CHARACTER SET 'utf8'" );

	$length1 = count($ids);
	$_SESSION['event_num'] = $length1;//gia na stelnei to length1 sto update.php
	for ($i = 0; $i < $length1; $i++) 
	{
		$sql = "INSERT INTO table3 (Name, Start_time, Owner, Category, Description, Cover, Latitude, Longitude) VALUES ('$names[$i]','$times[$i]','$owners[$i]','$categories[$i]','$descriptions[$i]','$covers[$i]','$latitudes[$i]','$longitudes[$i]')
				ON DUPLICATE KEY UPDATE Start_time='$times[$i]', Owner='$owners[$i]', Category='$categories[$i]', Description='$categories[$i]', Cover='$covers[$i]', Latitude='$latitudes[$i]', Longitude='$longitudes[$i]' ";
		$link->query($sql);
	}
	
	//For the update
	$sql_update = "INSERT INTO table4 (pageId) VALUES ('$page_id1')
				ON DUPLICATE KEY UPDATE pageId='$page_id1'";
	$link->query($sql_update);	
	
	$link->close();
	
?>
</body>
</html>



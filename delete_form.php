<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="admin_style2.css">


</head> 


<body>
<p id="p"><a href="login_success.php">επιστροφή</a></p>

<div class="guest">



<?php
	session_start();
	//include 'echotest.php';
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "facebook_events";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		 die("Connection failed: " . $conn->connect_error);
	} 
		mysqli_query($conn,"set names 'utf8'" );
		mysqli_query($conn, "SET CHARACTER SET 'utf8'" );



	$sql = "SELECT Name, Start_time, Owner, Category, Description, Cover FROM table3";
	$result = $conn->query($sql);
	$numrows=$result->num_rows;
	
	
	if ($numrows > 0) {
	
	$names=array();
	$times=array();
	$owners=array();
	$categories=array();
	$descriptions=array();
	$covers=array();
	
	//echo "Number of events------>".$numrows;
	$_SESSION['numOfPages'] = $numrows;
	// output data of each row
	
	while($row = $result->fetch_assoc()) {
		//echo " - Event Name: ". $row["Name"]."<br>";
		//echo " - Start Time: ".$row["Start_time"]."<br>";
		//echo " - Owner: ". $row["Owner"]."<br>";
		//echo " - Category: ".$row["Category"]."<br>";
		$names[]=$row["Name"];	 
		$times[]=$row["Start_time"];
		$owners[]=$row["Owner"];
		$categories[]=$row["Category"];
		$descriptions[]=$row["Description"];
		$covers[]=$row["Cover"];	 
	
			 

 }//end of while
 
 ?>
 <BR>&nbsp;<BR><!--prostheti kenh grammh-->
 
 <table class="table center"  width="90%" cellpadding="2" cellspacing="1">
 <tr>
						
						<td colspan="5" style="font-size:18px; "><strong>λίστα εν εξελίξει events στην phpMyAdmin βάση</strong></td>
				  
				</tr>
 <tr>
		<th>Id</th>
		<th>Name</th>
		<th>Date & Time</th>
		<th>Owner</th>
		<th>Category</th>
	</tr>
 <?php
 

for ($i = 0; $i < $numrows; $i++) {?>

 <tr>
		<td align="middle"><?php echo $i; ?></td>
		<td align="middle"><?php echo $names[$i]; ?></td>
		<td align="middle"><?php echo $times[$i]; ?></td>
		<td align="middle"><?php echo $owners[$i]; ?></td>
		<td align="middle"><?php echo $categories[$i]; ?></td>	
</tr>

<?php
}//end of for ?>
 
 </table>
 
<?php
	$length1 = count($names);
	$_SESSION['event_num']=$length1;
	$_SESSION['names'] = serialize($names);
	//echo "<br><br>Number of Events--->".$length1;
	?>
	
	
<!--koubi gia DELETE-->	
<p class="center">προσθέστε εδώ το id του event που θέλετε να διαγράψετε:</p>
<div class="login">
	<form class ="center"name="form2" method="post" action="delete.php">
		<input name="del_id" type="text" ><br><br>
		<button class="myButton"   >delete<br></button>
	</form>
</div>



<?php
}//kleinei to if
else {
	?> <p id="p"><strong>δεν βρέθηκαν events</strong></a></p><?php
}

	$conn->close();
?>  
<p id="p"><a href="login_success.php">επιστροφή</a></p>

</div>
</body>
</html>

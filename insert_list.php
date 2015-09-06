<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="admin_style2.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">

	$(document).ready(function(){

	$(".slidingDiv").hide();
	$(".show_hide").show();

	$('.show_hide').click(function(){
	$(this).next('.slidingDiv').slideToggle();
	});

	});

</script>
</head> 


<body>
<p><a href="login_success.php">επιστροφή</a></p>


<div>



<?php
error_reporting (E_ALL ^ E_NOTICE);//hide warning and notices
error_reporting(E_ERROR | E_PARSE | E_NOTICE);
error_reporting(0);
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
	?>
	
	
	<!--koubi gia INSERT-->
	<div  style="text-align:center;" class ="login input center" >
	
	<p class= <strong>προσθέστε εδώ το url του καινούριου event:</strong></p>
			<form name="form2" method="post" action="insert_new_page.php">
				<input style="width:70%;"name="url1" type="text" >
				<div style="font-weight: 700;">
				<font color="blue">
				<p><em>το url πρέπει να έχει τη μορφή https://facebook.com/pageId</em></p>
				<p><em>ή https://facebook.com/pageName</em></p></font></div>
				<br>
				<button class="myButton"   >insert<br></button>
			</form>
	
	<?php
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
 

 
<?php
	$length1 = count($names);
	$_SESSION['event_num']=$length1;
	$_SESSION['names'] = serialize($names);
	//echo "<br><br>Number of Events--->".$length1;
	?>
	
	<br>
	<br>
	<br>


	
<br>
<br>
<br>

 <button class="show_hide myButton center" style="width:35%;" >
		 show existing event list <br></button>
		<div class="slidingDiv">
				<br><br>
				 <table class="table center"  align="middle"  width="90%" cellpadding="2" cellspacing="1">
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
				 

		
		</div>
		
		</div> 



<?php
}//kleinei to if
else {
	?> <p id="p"><strong>Η λίστα με τα events είναι κενή</strong></a></p><?php
}

	$conn->close();
?>  
<p><a href="login_success.php">επιστροφή</a></p>

</div>
</body>
</html>

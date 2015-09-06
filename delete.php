<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="admin_style2.css">


</head> 


<body>

<?php 
    
    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
    
?>
<body style="background: <?php echo $color; ?>;">

<div class="main">
<?php
error_reporting (E_ALL ^ E_NOTICE);//gt thelei na diagrapsw to session start ap to delete_form
session_start();

//pairnei to id pou pliktrologhse o admin
$delete_id=$_POST['del_id'];

//pairnoume ton arithmo twn events apo to delete_form.php
//mono kai mono gia tis epanalhpseis wste na tsekaroume an evale eguro id 
$event_num=$_SESSION['event_num'];

//pairnoume ton pinaka me ta onomata twn events apo to delete_form.php
$names = unserialize($_SESSION['names']);


//epanalhpsh gia na doume an evale eguro id
//***dexetai akoma to 001 000 002 003 klp***
$correct=0;
for ($i=0; $i<$event_num; $i++){
	if ($delete_id==$i && is_numeric($delete_id) && is_int(0+$delete_id)){
		$correct=1;
	}
}
//The 0+ will implicitly convert the following to a number type
//so you'll end up with the numeric value of the string if possible.



//gia thn periptwsh pou bike swsto id
if($correct==1){//***bainei kai gia string px gia asdsadfsa***
	//echo "<br>COOL<br>";
	//echo "<br><br>DELETE event with id--->".$delete_id;
	//echo "<br><br>NAME--->".$names[$delete_id]."<br><br>";
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "facebook_events";

	// Create connection
	$conn1 = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn1->connect_error) {
		 die("Connection failed: " . $conn->connect_error);
	}
	//xwris auta den ginetai to delete
	mysqli_query($conn1,"set names 'utf8'" );
	mysqli_query($conn1, "SET CHARACTER SET 'utf8'" );


	
	$sql_del = "DELETE FROM table3 WHERE Name='$names[$delete_id]'";
	$conn1->query($sql_del);
	
	if ($conn1->query($sql_del)===TRUE){
	?>
	<p id="p">	
	Η διαγραφή του event με όνομα <strong><?php echo $names[$delete_id]; ?> ολοκληρώθηκε με επιτυχία.
	</strong></p>
	<?php
	}else{echo "Error deleting record: " . $conn1->error;}
	?>
	<p id="p">για να διαγράψετε άλλο event πατήστε <a href="delete_form.php"><strong>εδώ</strong></a></p>
	<?php
	
	}
	//gia mh id pou den einai sth lista
	else{
	?>	
	<font color="red"> μη έγκυρο id. παρακαλώ προσπαθήστε ξανά. </font>
	<?php
	include 'delete_form.php';
	}

?>
 

</div>
</body>
</html>
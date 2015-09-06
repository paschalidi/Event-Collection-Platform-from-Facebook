<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


<body>

<div class="main">

<?php
$hostname="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$dbname="facebook_events"; // Database name

//Connect to server
$link = new mysqli($hostname, $username, $password, $dbname);
	// Check connection
	if ($link->connect_error) {
		 die("Connection failed: " . $conn->connect_error);
	} 	


// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($link, $myusername);
$mypassword = mysqli_real_escape_string($link, $mypassword);

$sql="SELECT * FROM admins WHERE username='$myusername' and password='$mypassword'";
$result=$link->query($sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count!=0){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();      
$_SESSION['loggedin']=true;    
$_SESSION['username']=$myusername;
$_SESSION['password']=$mypassword;
header("location:login_success.php");
}
else {
?>
<font color="red">
<p style="text-align:center; font-size:21px; font-family:Courier New;">λάθος username ή password. παρακαλώ προσπαθήστε ξανά</p>
</font>
<?php
include 'login.php';
}

?>
</div>

</body>

</html>
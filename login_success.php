<!DOCTYPE html>



<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="admin_style.css">

</head>

<body>
<?php 

error_reporting (E_ALL ^ E_NOTICE);//hide warning and notices


session_start();
//include 'echotest.php'; 
?>
<?php 
    
    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
    
?>
<body style="background: <?php echo $color; ?>;">
<div> 
	<p style="  top:-50%;  transform: translateY(5%); text-align:left; font-size:15px; font-family:Courier New;">hello <?php echo $_SESSION['username'] ?></u></strong> </p>
	<p style="top:-50%;  transform: translateY(-175%); text-align:right;  font-size:15px; font-family:Courier New;"><a href="logout1.php">αποσύνδεση</a></p>

	<br>
<br>
<br>

	<!-- INSERT BUTTON -->
	<div class="center">
			<form name="form2" method="post" action="insert_list.php">
				<button href="#" class="myButton">insert event<br></button>
			</form>
		</div> 
	<br>
	<br>
	<br>

	<!-- DELETE BUTTON -->
	<div class="center">
			<form name="form2" method="post" action="delete_form.php">
				<button href="#" class="myButton">delete event<br></button>
			</form>
		</div> 
	
	<br>
	<br>
	<br>

	<!-- UPDATE BUTTON -->
	<div class="center">
			<form name="form2" method="post" action="update.php">
				<button href="#" class="myButton">update events<br></button>
			</form>
		</div> 


</div>
</body>
</html>
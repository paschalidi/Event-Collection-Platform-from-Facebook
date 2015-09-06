<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="admin_style.css">

</head>

<body>  
<?php 
    
    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
    
?>
<body style="background: <?php echo $color; ?>;">


<div class="main center">  
				
    <?php 
	
	session_start();
	
	//koubi gia ADMIN
	if( !isset($_SESSION['loggedin'])  ){ ?> <!--Edw endexetai na xreiazetai && $_SESSION['loggedin']==false -->
		<div class = "login input">
			<form name="form1" method="post" action="check_login.php">
				<input  name="myusername" type="text"  value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "> <!-- onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' " -->
				<br>
				<br>

				<input name="mypassword" type="password"  value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' " -->
				<br>
				<br>
				<br>
				<button href="#" class="myButton">login<br></button>

			</form>
		</div>
	<?php } ?>
	
	
	<?php 
	if( isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true ){ ?> 
	<p style="  top:-50%;  transform: translateY(-600%); text-align:left; font-size:15px; font-family:Courier New;">hello <?php echo $_SESSION['username'] ?></u></strong> </p>
	<p style="top:-50%;  transform: translateY(-800%); text-align:right;  font-size:15px; font-family:Courier New;"><a href="logout1.php">logout</a></p>

	
	<!--koubi gia Admin-->  
	<div  style="text-align:center;">
		<form name="form2" method="post" action="login_success.php">
				<button href="#" class="myButton"   >admin<br></button>

		</form>
	</div>
	<?php } ?>
	
	<br>
	<br>
	<br>
	<!--koubi gia GUEST-->  
	<div  style="text-align:center;">
	<form name="form2" method="post" action="index.php">
				<button href="#" class="myButton"   >guest<br></button>

	</form>
	</div>
	
	
</div>	
	
	
</body>
</html>
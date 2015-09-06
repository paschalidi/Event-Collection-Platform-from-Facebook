<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<head>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


 
<?php 
session_start();

//diavazei to url pou vazoume

$new_url=$_POST['url1'];




//vale na vriskei id



$pos = strripos($new_url, '/');//vriskei th thesi ths / mesa sto url
$rest = substr($new_url, 0, 21);  // https://facebook.com/


if ($rest =='https://facebook.com/')
{
	

	$pos=$pos+1;
	$page_id = substr($new_url,$pos );//apothikeuei ta stoixeia ap thn / kai meta mesa sto page_id

	 ?>

	<script type="text/javascript">   
	function isValidURL() {

	 var accesstoken = "1664921557071485|b8dd43f707a7cd4192509e42fd6a75c6";
	 var pageid =  "<?php echo $page_id;?>";

	 
	 $.ajax(
	  {
	  
		url: 'https://graph.facebook.com/'+pageid+'?access_token='+accesstoken,
		//url: 'https://graph.facebook.com/107168247742/?access_token='+accesstoken, 

		
		 statusCode: {
			  200: function(data, textStatus, xhr) {

			  }
		  },
		  success: function(data, textStatus, xhr) {
			   console.log("page exists, status code:"+ xhr.status);
			   alert("τα events της σελίδας προσθέθηκαν επιτυχώς!!");
			   window.location = 'insert_list.php';				



		  },
		  error: function (error){
			  console.log(error.responseJSON.error.code);
			  console.log(error.responseJSON.error.message);
			  alert("λάθος pageId ή pageName. προσπαθήστε ξανά.");
			  window.location = 'insert_list.php';				
	}
	  });
	}
		
		

	var isValid = isValidURL();
	</script>


<?php 
}
else{				

?>	<div style="text-align: center;font-weight: 700;">
	<font color="red"> μη έγκυρο url. παρακαλώ προσπαθήστε ξανά. </font></div>
<?php
	include 'insert_list.php';
}
?>


</head>


<body>

 

<?php 
$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
$color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
    
?>
<body style="background: <?php echo $color; ?>;">
<?php 



$_SESSION['page_id'] = $page_id;
include 'echotest.php';
	
session_destroy();
	 ?>

<div class="main ">  




</div>
</body>

</html>
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	

<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Nova+Round' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Tinos' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Comfortaa:700&subset=latin,greek' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=latin,greek' rel='stylesheet' type='text/css'>



<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXcqx9u25AMcg6L0Ptg7QDzTIVRxtBVn8&sensor=false"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>

<meta name="viewport"  content="initial-scale=1, width=device-width">
  
<link rel="stylesheet" href="css/adaptive.css"> 


<!--TITLE-->
<title>
Facebook Events
</title>
<s> 
<!--SHOW/HIDE-->

<script type="text/javascript">
	$(document).ready(function(){

	$(".slidingDiv").hide();
	$(".show_hide").show();

	$('.show_hide').click(function(){
	$(this).next('.slidingDiv').slideToggle();
	});

	});
</script>

<!--GOOGLE MAPS-->
<script type="text/javascript">
    // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 5,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(38.246639, 21.734573), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: 
[{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#50b573"},{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#50b573"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"visibility":"off"},{"weight":4.1}]},{"featureType":"administrative.neighborhood","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#49ab6c"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#73c890"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#58b368"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"gamma":"1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#b0e1b7"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#83ce90"},{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#a4f4bf"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#a8e2bc"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#619975"},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"gamma":"2.08"},{"visibility":"on"},{"color":"#9cd6ec"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#7dc68d"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"lightness":"-7"},{"color":"#82bdd3"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#82bdd3"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry.fill","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#635751"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"color":"#579c44"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]}]



};

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                /*/Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(38.246639,  21.734573),
                    map: map,
                    title: 'Πατρα!'
                });*/
            }
 </script>
<!--DIALOG-->

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.10/jquery-ui.min.js"></script>
<link href="jquery-ui.css" rel="stylesheet">
	<script type="text/javascript">
	$(function () {
		$(".btnShow").click(function () {
			$latlat =$(this).attr("rLatitude");
			console.log($latlat);
			$longlong =$(this).attr("rLongitude");
			console.log($longlong);
			$namename =$(this).attr("rName");
            $(".dialog").dialog(
			{
                    modal: true,
                    title: "Google Map",

                    width: 600,
                    hright: 450,
                    buttons: 
					{
						Close: function () 
						{
                            $(this).dialog('close');
                        }
                    },
                    open: function () 
					{
                        var mapOptions = 
						{
                            center: new google.maps.LatLng($latlat, $longlong),
                            zoom: 13,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
							
                        }
						//νεος χαρτης
                        var map = new google.maps.Map($(".dvMap")[0], mapOptions);
						//μαρκερ ινφο
						var infowindow = new google.maps.InfoWindow();
						var marker, i;
						//νεος μαρκερ
						marker = new google.maps.Marker(
						{
							//θεση νεου μαρκερ
							position: new google.maps.LatLng($latlat, $longlong),
							map: map
						});
						 
						google.maps.event.addListener(marker, 'click', (function(marker, i) 
						{
							return function() 
							{
								infowindow.setContent($namename);
								infowindow.open(map, marker);
							}
						})(marker, i));
							
				   }
            }).prev(".ui-dialog-titlebar").css("background","#09864A");
        });
    });
    </script>



</s>

</head> 
<body>
<a href="index.php"><div class="pre"style="font-family: 'Quicksand', sans-serif;">Display Patras Facebook Events  </div> </a>
<div id="map"></div>
<br>


<?php
error_reporting (E_ALL ^ E_NOTICE);//hide warning and notices
error_reporting(E_ERROR | E_PARSE | E_NOTICE);
error_reporting(0);
if(($_POST['keyword'])=="Keywords") { 
   $new_keyword = "";
}
else{
	$new_keyword=$_POST['keyword'];
}
if(($_POST['from'])=="Start Date") { 
   $new_from = "01/01/2015";
}
else{
	$new_from=$_POST['from'];
}
if((($_POST['to'])=="End Date")|| (($_POST['to'])=="")) {
   $new_to = "01/01/2020";
}
else{
	$new_to=$_POST['to'];
}

if(($_POST['mySelect'])=="All Categories") {
	$new_select= "";
}
else{
	$new_select=$_POST['mySelect'];
}

//session_start(); //mhn svhstei

$new_from  = date('Y-m-d 00:00:00', strtotime($new_from));
$new_to  = date('Y-m-d 00:00:00', strtotime($new_to));

$servername = "localhost";
$username = "root";
$password = "44510795Aa";
$dbname = "facebook_events";
// Create connection*/
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
} 

mysqli_query($conn,"set names 'utf8'" );
mysqli_query($conn, "SET CHARACTER SET 'utf8'" );

//gia na metraei selides 
if (!empty($page)) {$page =$_GET["page"];}
else {$page="1";}


if ($page==""|| $page=="1"){$page1=0;}
else {	$page1 = ($page*10)-10;}//10 event se ka8e selida gia 5 paei $page*5)-5;


$sql = "SELECT  * FROM table3 WHERE 
					(Start_Time BETWEEN '$new_from' AND '$new_to')
					AND
					
					(LOWER(Description)  LIKE LOWER('%$new_keyword%') 
					OR
					LOWER(Name)  LIKE LOWER('%$new_keyword%'))
					AND
					
					(LOWER(Category)  LIKE LOWER('%$new_select%'))
					
					

					ORDER BY Start_time
					LIMIT $page1,10";
					
			
$result = $conn->query($sql);
?>
<div id="content">
			
		
<?php




			
if ($result->num_rows > 0)
{
	// output data of each row
	while($row = $result->fetch_assoc()) 
	{
?>		
		
		
		<div class="tg-iyb7" ><img  src="<?php echo $row["Cover"] ?>" class="img-thumbnail" alt="Cover photo"></div>
		<div class="rTable">
		<div class="rTableBody" style="display: table-cell; ">
		<div class="rTableRow">
		<div class="rTableCell"><img src="images/Like.png" alt="Mountain View" /> Name :</div>
		<div class="rTableCellinfo"> <?php echo $row["Name"] ?></div>
		</div>
		<div class="rTableRow">
		<div class="rTableCell"><img src="images/Calendar.png" alt="Mountain View" /> Date and Time :</div>
		<div class="rTableCellinfo"><?php echo $row["Start_time"] ?> </div>
		</div>
		<div class="rTableRow">
		<div class="rTableCell"><img src="images/Owner.png" alt="Mountain View" /> Owner :</div>
		<div class="rTableCellinfo"> <?php echo $row["Owner"] ?></div>
		</div>
		<div class="rTableRow">
		<div class="rTableCell"><img src="images/Category.png" alt="Mountain View" /> Category :</div>
		<div class="rTableCellinfo"> <?php echo $row["Category"] ?></div>
		</div>
		</div>
		</div>
		<br>
<?php
	 
		$category[]= $row["Category"];
		

?>
			
		
		<!--ΜΟRE-->
		<button href="#" class="show_hide myButton" align="right" >
		<img src="images/More2.png" alt="Mountain View" > More <br></button>
		<div class="slidingDiv ">
		
		<!--DESCRIPTION-->
		<button href="#" class="show_hide myButton"  >
		<img src="images/Info2.png" alt="Mountain View" > Info<br></button>
		<div class="slidingDiv center" style="padding-left:20%; width:100%">
		
		<?php echo $row["Description"];?>
		</div>
		<br>
		
		<!--show map-->	
<?php
		if ($row["Latitude"]=="") {  
		} else 
		{
?>	
				<button href="#" class='btnShow myButton' align="right" type="button" value="Show Location"  rName="<?php echo $row["Name"]; ?>" rLatitude="<?php echo $row["Latitude"]; ?>" rLongitude="<?php echo $row["Longitude"]; ?>"/>
				<img src="images/Location.png" alt="Mountain View" > Location<br></button>
		<?php
			
		}?>
		</div>
				<!--end more - description - map-->
				<br>
				<br>
</div>

				<br>
				<br>
<div id="content">

<?php			

	}

} 
else // se periptwsh p h DB einai gia kapoio logo kenh emfanizetai mynhma la8ous
{
	echo "Results 0. Try again.";
}
	
?>


<div class="dialog" >
<div class="dvMap " ></div>
</div>
</div>


<?php


$conn = new mysqli($servername, $username, $password, $dbname);
$sql1 = "SELECT  * FROM table3 ";
$result = $conn->query($sql1);
$count = mysqli_num_rows($result);

$page_num = $count/10;
$page_num = ceil($page_num);

?><div style="text-align:center;"><?php
	for ($b=1; $b<=$page_num;$b++)
	{
		?><a class="pagingButton" href="new_search.php?page=<?php echo $b; ?>" style ="text-decoration:none"> <?php echo $b. " "; ?> </a> <?php
	}
	

			
?>
</div></div>
</body>
</html>

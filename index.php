<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport"  content="initial-scale=1, width=device-width">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Nova+Round' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Tinos' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Comfortaa:700&subset=latin,greek' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=latin,greek' rel='stylesheet' type='text/css'>



<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXcqx9u25AMcg6L0Ptg7QDzTIVRxtBVn8&sensor=false"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>

  
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
<!--DATEPICKER-->
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.10/jquery-ui.min.js"></script>
<link href="css/jquery-ui.css" rel="stylesheet">
<script>
	$(function() {
	$( "#from" ).datepicker({
		defaultDate: "+0w",
		changeMonth: true,
		numberOfMonths: 1,
		//minDate: new Date(startDate),
		onClose: function( selectedDate ) {
		$( "#to" ).datepicker( "option", "minDate", selectedDate );
		}
		});
		
		$( "#to" ).datepicker({
		defaultDate: "+0w",
		changeMonth: true,
		numberOfMonths: 1,
		
		//maxDate: new Date(endDate)
		onClose: function( selectedDate ) {
		$( "#from" ).datepicker( "option", "maxDate", selectedDate );
		}
		});
	});
 </script>
<!--FIRST MAP-->
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
<link href="css/jquery-ui.css" rel="stylesheet">
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
<!--SIDEBAR-->
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href="css/side-slider.css" rel="stylesheet" type="text/css" media="screen">
<script src="js/jquery.side-slider.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#sideslider').sideSlider();

    });
</script>

</s>

</head> 
<body>



<!--heading-->
<a href="index.php"><div class="pre"style="font-family: 'Quicksand', sans-serif;">Display Patras Facebook Events  </div> </a>
<!--xarths akatw apo t heading-->
<div id="map"></div>


<br>

<?php
error_reporting (E_ALL ^ E_NOTICE);//hide warning and notices
error_reporting(E_ERROR | E_PARSE | E_NOTICE);
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facebook_events";
// Create connection*/
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
} 
// xrhshmopoiheitai gia th swsth emfanish twn ellhnikwn xarakthrwn
mysqli_query($conn,"set names 'utf8'" );
mysqli_query($conn, "SET CHARACTER SET 'utf8'" );

//gia th selidopoihsh twn 10 event ana selida 
//gia na metraei selides 
if (!empty($_GET["page"])) {$page =$_GET["page"];}// an h metablhth $page den einai kenh ths dinei to swsto ari8mo wste n kseroume se poia dekada eimaste 
else {$page="1";}//an h $page einai kenh ths dioume th timh 1 . 8ewreite kenh gt akomh den exei parei kamia timh , opote prepei n parei th timh 1 


if ($page==""|| $page=="1"){$page1=0;}
else {	$page1 = ($page*10)-10;}//10 event se ka8e selida gia 5 paei $page*5)-5;



$sql = "SELECT  * FROM table3 ORDER BY Start_time LIMIT $page1,10";//epilogh apo th DB me bash ton xrono kai 10 th fora.


$result = $conn->query($sql);



?>


<div id="content">
			
		
<?php



//pernoume ta dedomena apo th DB kai ta emfanizoume se  pinakoeidh morfh me thn xrhsh twn div tags kai twn clasewn pou fainontai parakatw .	
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
		 
		$category[]= $row["Category"];//apo8hkeuw tis kathgwries ths ekastote selidas se mia metavliti wste otan xreaizetai na kanw SEARCH na tis exw eukeres.
		

?>
			
		
		<!--ΜΟRE-->
		<!--analitika: exw ena js gia to opoio kanei show kai hide siggekrimena content sth selida .-->
		<button href="#" class="show_hide myButton" align="right" >
		<img src="images/More2.png" alt="Mountain View" > More <br></button>
		<div class="slidingDiv ">
		
		<!--DESCRIPTION-->
		<!--omoia to kanw kai sto description-->
		<button href="#" class="show_hide myButton"  >
		<img src="images/Info2.png" alt="Mountain View" > Info<br></button>
		<div class="slidingDiv center" style="padding-left:20%; width:100%">
		
		<?php echo $row["Description"];?>
		</div>
		<br>
		
		<!--SHOW MAP-->	
<?php
		if ($row["Latitude"]=="") {//sth periptwsh p den uparxoun sintetagmenes gia kapoio event den emfanizetai kan button gia location
		} else //otan apo th bash dedomenwn uparxoun long kai lat tote emfanizontai sto consolelog
		{
?>	
				<button href="#" class='btnShow myButton' align="right" type="button" value="Show Location"  rName="<?php echo $row["Name"]; ?>" rLatitude="<?php echo $row["Latitude"]; ?>" rLongitude="<?php echo $row["Longitude"]; ?>"/>
				<img src="images/Location.png" alt="Mountain View" > Location<br></button>
		<?php
			
		}?>
		</div>
		<!--end more - description - map-->
		<br><br>
</div>

		<br><br>
<div id="content"><!--emfanzietai para8uro me to xerth o opoios deixnei th topo8esia tou ka8e event ksexorista . o xarths emfanizetai afou path8ei to button me onomasia Location.-->

<?php			

	}

} 
else // se periptwsh p h DB einai gia kapoio logo kenh emfanizetai mynhma la8ous
{
	echo "Results 0. Try again.";
}
	
?>

<!--to para8uro kai o xarths tou ka8e event kalountai edw-->
<div class="dialog" >
<div class="dvMap " ></div>
</div>
</div>

<!--SIDEBAR-->
<!--analutika: xrhsimopoioume jquery gia na dhmiourghsoume ena side bar to opoio einai upeu8hno gia thn anazhthsh dedomenwn sth selida mas -->
<div class="sideslider" id="sideslider" style="margin-left: -265px;">
 <div class="sideslider-tab"> Search &nbsp;    <img src="images/Search.png" alt="Mountain View" > 
 </div>
    <a href="#">
        <div id="sideslider-smartbutton">
            <div id="sideslider-text">
				<!--eikones , text, hmerologio ktlp pou einai aparethta gia anazhthsh -->
                <form name="form1" method="post" action="new_search.php">
				<label for="from"><img src="images/Keywords.png" alt="Mountain View"></label>
				<input class="css-input-keyword" type="text" id="keyword" name="keyword" placeholder="Keywords"><br>
				<label for="from"><img src="images/Search_Cal.png" alt="Mountain View" ></label>
				<input class="css-input" type="text" id="from" name="from" value="Start Date" >
				<label for="to"></label>
				<input class="css-input" type="text" id="to" name="to" value="End Date"><br>
				<label><img src="images/Search_Cat.png" alt="Mountain View" ></label>
				<select class="css-input-category" id='mySelect' name='mySelect' size="1">
					
				
					 <option >All Categories<!--ta option tou search ana kathgoria.-->
					<?php
					error_reporting (E_ALL ^ E_NOTICE);//hide warning and notices
					error_reporting(E_ERROR | E_PARSE | E_NOTICE);
					error_reporting(0);
					$arrlength = count($category);// elegxos wste ka8e kathgoria na emfanizetai mia fora sth lista pou anoigetai .
					for($x = 0; $x < $arrlength; $x++) 
					{
					if (!empty($category[$x+1]))
					{
					for($y = $x+1; $y < $arrlength; $y++) 
					{
						if ($category[$x]==$category[$y])
						{
							$ev=true;
						}
					}
					if ($ev==true){$ev=false;}
					else 
						{
							?>
					
							<option value="<?php echo $category[$x];?>"><?php echo $category[$x];?></option><!--ta option ths listas me tis kathgories-->

						
							<?php
							
						}
					}
					else{
					?>
					
					<option value="<?php echo $category[$x];?>"><?php echo $category[$x];?></option><!--ta option ths listas me tis kathgories-->

						
					<?php	
					}}
					?>					
				   </select>

				<br>
				<br>
				<button href="#" class="myButton" style="font-size:17px; padding:5px 35%;">Search<br></button><!--to button p energopoiei thn anazhthsh-->

			</form>
            </div>
            <div class="sideclear"></div>
        </div>

    </a>
    <div class="sideslider-close sideslider-close_en">Close&nbsp;</div><!--gia na klinei t sidebar-->
</div>

<?php

//analutika o parakatw kodikas : 
//1.epilegei apo th bash dedomenwn 
//2.diairei ta event me to 10 gia na metrhsei poses selides 8a prepei n ftiaksoume .(stroggulopoiei pros ta epanw me th xrhsh tou ceil.)
//dimiourgei ta ari8mimena paggingbuttons pou einai upeu8hna gia th metafora mas apo th mia selida sthn allh .
$conn = new mysqli($servername, $username, $password, $dbname);
$sql1 = "SELECT  * FROM table3 ";
$result = $conn->query($sql1);
$count = mysqli_num_rows($result);

$page_num = $count/10;
$page_num = ceil($page_num);

?><div style="text-align:center;"><?php
	for ($b=1; $b<=$page_num;$b++)
	{
		?><a class="pagingButton" href="index.php?page=<?php echo $b; ?>" style ="text-decoration:none"> <?php echo $b. " "; ?> </a> <?php
	}	
?>
</div>
</body>
</html>

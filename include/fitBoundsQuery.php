<?php
	require('connect.php');
	
	$selectedCity = $_POST['selectedCity'];
	
	$fitBoundsQuery = "SELECT * FROM cities WHERE city = '".$selectedCity."'";
	$fitBoundsResult = mysqli_query($con, $fitBoundsQuery);
	$fitBoundsRow = mysqli_fetch_assoc($fitBoundsResult);
	$sw_long = $fitBoundsRow['sw_long'];
	$sw_lat = $fitBoundsRow['sw_lat'];
	$ne_long = $fitBoundsRow['ne_long'];
	$ne_lat = $fitBoundsRow['ne_lat'];
	
	$fitBoundsArray = array(array($sw_long, $sw_lat), array($ne_long, $ne_lat));
	
	echo json_encode($fitBoundsArray);
?>
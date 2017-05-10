<?php
	require('connect.php');
	
	$citiesQuery = "SELECT * FROM cities ORDER BY rand()";
	$citiesResult = mysqli_query($con, $citiesQuery);
	$citiesTotalRows = mysqli_num_rows($citiesResult);
	
	$citiesArray = array();
	$imagesArray = array();
	$countriesArray = array();
	while($citiesRow = mysqli_fetch_assoc($citiesResult))
	{
		$cities[] = $citiesRow;
	}
	
	foreach($cities as $city){
		array_push($citiesArray, $city['city']);
		array_push($imagesArray, $city['image']);
		array_push($countriesArray, $city['country']);
	}	
	
?>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<?php
		for($i=1;$i<$citiesTotalRows; $i++){
			echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
		}
		?>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
		<div class="item active">
		  <h1><?php echo $countriesArray[0];?></h1>
		  <img src="<?php echo $imagesArray[0];?>" alt="Los Angeles">
		  <h1><a style="text-decoration: none" href="https://www.google.co.id/search?q='<?php echo $citiesArray[$i] ?>'&source=lnms&tbm=isch"><?php echo $citiesArray[0];?></a></h1>
		</div>

		<?php
		for($i=1;$i<$citiesTotalRows; $i++){
			echo '<div class="item">
				<h1>'.$countriesArray[$i].'</h1>
				<img src="'.$imagesArray[$i].'" alt="Chicago">
				<h1><a style="text-decoration: none" href="https://www.google.co.id/search?q='.$citiesArray[$i].'&source=lnms&tbm=isch">'.$citiesArray[$i].'</a></h1>
				</div>';
		}
		?>

	  </div>
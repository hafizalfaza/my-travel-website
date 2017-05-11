<!DOCTYPE html>
<html>
	<?php 
	require('include/connect.php');
	require('include/header.php');
		
		$content = 'random';
		
		require('include/query.php');

	?>
		<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.37.0/mapbox-gl.js'></script>
		<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.37.0/mapbox-gl.css' rel='stylesheet' />
		<style>
			body { margin:0; padding:0; }
			#map { position:absolute; top:120px; bottom:0; width:600px; }
		</style>
	</head>
	<body>
		<?php
			require('include/navigationBar.php');
			require('include/selectCityForm.php');
		?>
		
		<div id="map"></div>
		
		<div id="video" style="position: absolute; left: 770px; top: 140px;">
			<iframe width="420" height="270" src="<?php echo $countryVideo; ?>" frameborder="0" allowfullscreen></iframe>
		</div>
		
		
		<div style="text-align: center; position: absolute; left: 600px; top: 50px; background-color: #39549E; width: 765px;">
			<h1 style="color: white;"><span><img style="width: 50px;" src="<?php echo $countryFlag; ?>"></img></span><a style="text-decoration: none; color: white;"href="https://google.com/search?q=<?php echo $country;?>">&nbsp;<?php echo $country; ?>&nbsp;</a><span><img style="width: 50px;" src="<?php echo $countryFlag; ?>"></img></span></h1>
		</div>
		
		<div  style="position: absolute; left:816px; bottom: 170px;">&nbsp; &nbsp;
			 <a href="#" onmouseover="popup()" onclick="return false;"><img onclick="foodQuery()" id="food" name="food" style="width: 65px;" src="data/icons/food.png"/></a>&nbsp; &nbsp;
			<a href="#" onclick="return false;"> <img onclick="cityQuery()" id="city" name="city" style="width: 65px;" src="data/icons/building.png"/></a>&nbsp; &nbsp;
			<a href="#" onclick="return false;"> <img onclick="peopleQuery()" id="people" name="people" style="width: 65px;" src="data/icons/people.png"/></a>&nbsp; &nbsp;
			<a href="#" onclick="return false;"> <img onclick="languageQuery()" id="city" name="city" style="width: 65px;" src="data/icons/language.png"/></a>&nbsp; &nbsp;
		</div>
		
		<div id="content-container" style="width: 765px; white-space: nowrap; position: absolute; left:600px; bottom: 0px; overflow-x: scroll; overflow-y: hidden; text-align: center">
			<?php 
				if($content == 'random'){
					if($totalMixedImages>=8){
						for($i=0; $i<8; $i++){
							echo '<img class="img-thumbnail" style="width: 193px;" src="'.$mixedImages[$i].'"/>';
						}
					}else if($totalMixedImages<8){
						for($i=0; $i<$totalMixedImages; $i++){
							echo '<img class="img-thumbnail" style="width: 193px;" src="'.$mixedImages[$i].'"/>';
						}
					}
				}
				if($content == 'city'){
					for($i=0; $i<$totalCityImages; $i++){
						echo '<img class="img-thumbnail" style="width: 193px;" src="'.$cityImages[$i].'"/>';
					}
				}
				if($content == 'food'){
					for($i=0; $i<$totalFoodImages; $i++){
						echo '<img class="img-thumbnail" style="width: 193px;" src="'.$foodImages[$i].'"/>';
					}
				}
				if($content == 'people'){
					for($i=0; $i<$totalPeopleImages; $i++){
						echo '<img class="img-thumbnail" style="width: 193px;" src="'.$peopleImages[$i].'"/>';
					}
				}
						
			?>
		</div>
		
		<script>
			mapboxgl.accessToken = 'pk.eyJ1IjoiaGFmaXphbGZhemEiLCJhIjoiY2owcHd0ZGYyMDB4NDMzanc1MDk3dHR2cSJ9.uFhKuX5N0R5Xx01asjiNyg';
			var map = new mapboxgl.Map({
				container: 'map', // container id
				style: 'mapbox://styles/mapbox/light-v9', //stylesheet location
				center: [<?php echo $countryLong;?>, <?php echo $countryLat;?>], // starting position
				zoom: <?php echo $countryZoom;?> // starting zoom
			});
			
			
			function fitBounds(fitBoundsArray){
				map.fitBounds(fitBoundsArray);
			}
			
			
			
			function foodQuery(){
				var content = 'food';
				 var data = 'country-select=' +'<?php echo $country ?>'+ '&content=' + content;		
						$.ajax({
							method: 'get', 
							url: 'content.php', 
							data: data, 
							success: function(response)
							{
							$("#content-container").hide();	
							$('#content-container').html(response);
							$("#content-container").fadeIn("slow");	
							$('#content-container').css('overflow-x', 'scroll');		
							$('#content-container').css('bottom', '0px');							
						}
					});
			}
			function cityQuery(){
				var content = 'city';
				 var data = 'country-select=' +'<?php echo $country ?>'+ '&content=' + content;		
						$.ajax({
							method: 'get', 
							url: 'content.php', 
							data: data, 
							success: function(response)
							{
							$("#content-container").hide();	
							$('#content-container').html(response);
							$("#content-container").fadeIn("slow");	
							$('#content-container').css('overflow-x', 'scroll');		
							$('#content-container').css('bottom', '0px');								
						}
					});
			}
			function peopleQuery(){
				var content = 'people';
				 var data = 'country-select=' +'<?php echo $country ?>'+ '&content=' + content;		
						$.ajax({
							method: 'get', 
							url: 'content.php', 
							data: data, 
							success: function(response)
							{
							$("#content-container").hide();	
							$('#content-container').html(response);
							$("#content-container").fadeIn("slow");	
							$('#content-container').css('overflow-x', 'scroll');				
							$('#content-container').css('bottom', '0px');	
							
						}
					});
			}
			function languageQuery(){
				var content = 'language';
				 var data = 'country-select=' +'<?php echo $country ?>'+ '&content=' + content;		
						$.ajax({
							method: 'get', 
							url: 'content.php', 
							data: data, 
							success: function(response)
							{
							$("#content-container").hide();	
							$('#content-container').html(response);
							$("#content-container").fadeIn("slow");							
							$('#content-container').css('overflow-x', 'hidden');		
							$('#content-container').css('bottom', '60px');		
						}
					});
			}
			
			function popup(){
				$('#popup').css('display', 'inline-block');
			}
			
			$('#countrySelect').on('change', function(){
				$('#goCountryBtn').removeAttr('disabled');
			});
			$('#citySelect').on('change', function(){
				$('#goCityBtn').removeAttr('disabled');
			});
			
			
			
			
			$('#goCityBtn').on('click', function() {
				var selectedCity = $('#citySelect').val();
				var data = 'selectedCity='+ selectedCity;					
				$.ajax({
							method: 'post', 
							url: 'include/fitBoundsQuery.php', 
							data: data,
							dataType: "json",
							success: function(response)
							{
								var tes1 = parseFloat(response[0][0]);
								var tes2 = parseFloat(response[0][1]);
								var tes3 = parseFloat(response[1][0]);
								var tes4 = parseFloat(response[1][1]);
								var fitBoundsArray1 = [];
								var fitBoundsArray2 = [];
								var fitBoundsArray = [];
								fitBoundsArray1.push(tes1,tes2);
								fitBoundsArray2.push(tes3,tes4);
								fitBoundsArray.push(fitBoundsArray1,fitBoundsArray2)								
								fitBounds(fitBoundsArray);								
						}
					});
			});
		</script>
	</body>
</html>
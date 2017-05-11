<!DOCTYPE html>
<html>
	<?php require('include/header.php');?>
	
	</head>
	<body>
		<?php
			require('include/navigationBar.php');
			require('include/carousel.php');
		?>
	
		<div style="width: 735px; height: 612px; overflow: hidden;  position:absolute; left: 630px; top: 0px;"class="crop">
			<img style="width: 1300px; position:relative; left: -200px; top: -100px; " src="data/explore-the-world.jpg" alt="exploretheworld" />
		</div>
		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		
		
		<h1 style="position: absolute; left: 825px; top: 200px; ">Explore the World!</h1>
		<form action='countryInformation.php' method="get" style="text-align: center; position: absolute; left: 850px; top: 280px; width: 320px;">			
		   <div  style="width: 250px;" class="input-group">		   
			<select id="countrySelect" class="form-control" name="country-select">
				<option value='' disabled selected>Choose any country</option>
				<?php 
					require('include/countriesQuery.php');
					for($i=0; $i<$countriesTotalRows; $i++){
						echo '<option>'.$countriesArray[$i].'</option>'; 
					}
				?>
			</select>
			<div class="input-group-btn">
			  <button id="goCountryBtn" class="btn btn-default" type="submit" disabled>
				<i>Go!</i>
			  </button>
			</div>
		  </div>
		</form>
		
		<script>
			$('#countrySelect').on('change', function(){
				$('#goCountryBtn').removeAttr('disabled');
			});
		</script>
	</body>
</html>
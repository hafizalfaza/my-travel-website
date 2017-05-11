<?php
	echo '<form action="countryInformation.php" method="get" style="position: relative; display: inline-block; top: 8px;">
		   <div  style="width: 250px;" class="input-group">		   
			<select id="countrySelect" class="form-control" name="country-select">
				<option value="" disabled selected>Choose any country</option>';
				
					require('countriesQuery.php');
					for($i=0; $i<$countriesTotalRows; $i++){
						echo '<option>'.$countriesArray[$i].'</option>'; 
					}
		echo '		
			</select>
			<div class="input-group-btn">
			  <button id="goCountryBtn" class="btn btn-default" type="submit" disabled>
				<i>Go!</i>
			  </button>
			</div>
		  </div>
		</form>';
?>
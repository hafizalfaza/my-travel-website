<?php
	echo '<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="index.php">Hafiz\'s TravelSite</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="index.php">Home</a></li>
			  <li><a href="about.php">About</a></li>
			  <li><a href="contact.php">Contact</a></li>
			</ul>';
			if(isset($_GET['country-select'])){
				require('selectCountryForm.php');
			}
			
	echo		'<form action="https://google.com/search" method="get" class="navbar-form navbar-left">
			   <div style="width: 300px;" class="input-group">
				<input type="text" class="form-control" placeholder="Search" name="q">
				<div class="input-group-btn">
				  <button class="btn btn-default" type="submit">
					<i class="glyphicon glyphicon-search"></i>
				  </button>
				</div>
			  </div>
			</form>
		  </div>
		</nav>';
?>
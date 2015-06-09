<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="style/style.css" />
		
		<!--end of import css and js files-->
		
		<title></title>		
	</head>
	
	<body>
		<input type="file" accept="audio/*;capture=microphone">
		
		<div class="container-fluid">
  			<div class="row">
  				
  			</div>
  			
  			<div class="row">
  				<!--for main page-->
  				<div class="col-md-8">
  					
  					<!--recorder goes here-->
  					<div class="row">
  						<?php
  							include_once 'RecordMp3/index.php';
  						?>
  					</div>
  					
  					<!--shought goes here-->
  					<div class="row">
  						
  					</div>
  				</div>
  				
  				<!--for side page-->
  				<div class="col-md-4">
  					<!--states goes here-->
  					<div class="row">
  						
  					</div>
  					
  					<!--friends grid goes here-->
  					<div class="row">
  						
  					</div>
  				</div>
  			</div>
		</div>
		
		
		
	</body>
</html>

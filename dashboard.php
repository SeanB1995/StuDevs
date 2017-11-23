<?php

include_once 'lib/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>StuDevs | Dashboard</title>
	<?php include_once 'lib/metalinks.php' ?>
	
</head>
<body>
<div class="loader-bg"></div>
<div id="wrapper">

<!-- Page header -->	
	<header>
		<?php include_once 'lib/navbar.php' ?>
    </header>
	
  		
    
		
			<div class="contact1-cont">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="row contact1">
								<div class="col-sm-12">
									<h5 class="subtitle-margin">Your Dashboard</h5>
									<h1>Dashboard<span class="special-color">.</span></h1>
									<div class="title-separator-primary"></div>
								</div>
								<div class="col-xs-12 col-md-6 margin-top-45">
									<p class="negative-margin">HELLO HOW ARE YOU IM GOOD THANKS YEAH YOU KNOW YOURSELF your data  your data your data  your data your data  your data your data  your data your data  your data </p>
									  
									
									
								</div>
								<div class="col-xs-12 col-md-6 margin-top-45">
								
								</div>
							</div>
						</div>
					</div>
				</div>
			
    


	
	
	<?php 
    include_once 'lib/footer.php'; 
    ?>

<!-- google maps initialization -->		
	<script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
			function init() {						
				mapInit(53.3486376,-6.2430277,"contact-map1","images/pinpin.png", true, true);
			}
	</script>



	</body>
</html>
<?php

include_once 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>StuDevs</title>
	<?php include 'pageStyles.php' ?>
	
</head>
<body>
<div class="loader-bg"></div>
<div id="wrapper">

<!-- Page header -->	
	<header>
		<?php include 'navbarHeader.php' ?>
    </header>
	
  		
    <section class="short-image no-padding contact-short-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h5 class="subtitle-margin second-color">Get in touch</h5>
					<h1 class="second-color">Contact Us</h1>
					<div class="short-title-separator">.</div>
				</div>
			</div>
		</div>
		
    </section>
	
	<section class="section-light section-both-shadow top-padding-45">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 margin-top-45">
					<p class="negative-margin">studevs.com | sdfsdf</p>
					<img id="contactImage" src="images/sunriseirelandsmall.jpg" alt="" class="pull-left margin-top-45" />
					<address class="contact-info pull-left">
						<span><i class="fa fa-map-marker">Ireland</span>
						<span><i class="fa fa-envelope"></i><a href="mailto:info@studevs.com">info@studevs.com</a></span>
						<span><i class="fa fa-phone"></i>5553453777</span>
						<span><i class="fa fa-clock-o"></i>Mon-Fri: 9:00 - 18:00</span>
						<span class="span-last">Sat-Sun: 10:00 - 16:00</span>
					</address>
				</div>
				<div class="col-xs-12 col-md-6 margin-top-45">
					<form name="contact-from" id="contact-form" action="#" method="get">
								<div id="form-result"></div>
								<input name="name" id="name" type="text" class="input-short main-input required,all" placeholder="Your name" />
								<input name="phone" id="phone" type="text" class="input-short pull-right main-input required,all" placeholder="Your phone" />
								<input name="mail" id="mail" type="email" class="input-full main-input required,email" placeholder="Your email" />
								<textarea name="message" id="message" class="input-full contact-textarea main-input required,email" placeholder="Your message"></textarea>
								<div class="form-submit-cont">
									<a href="#" class="button-primary pull-right" id="form-submit">
										<span>send</span>
										<div class="button-triangle"></div>
										<div class="button-triangle2"></div>
										<div class="button-icon"><i class="fa fa-paper-plane"></i></div>
									</a>
									<div class="clearfix"></div>
								</div>
							</form>
				</div>
				
				
			</div>
		</div>
	</section>
	
	
	
    <footer class="small-cont">
		<?php
		include 'footer.php';
		?>
	</footer>
</div>	


<?php
// MODALS AND SCRIPTS AND MOVE TOP FEATURES HERE
 include 'modscripts.php'; 
 ?>


<?php
    
// ERROR HANDLING

include 'errors.php';

?>

<!-- google maps initialization 
	<script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
			function init() {
				
				mapInitAddress("national college of ireland","featured-map1","images/pin-house.png", false);
				
				//mapInit(40.6128,-73.7903,"featured-map1","images/pin-house.png", false);
				mapInit(40.7222,-73.7903,"featured-map2","images/pin-apartment.png", false);
				mapInit(41.0306,-73.7669,"featured-map3","images/pin-land.png", false);
				mapInit(41.3006,-72.9440,"featured-map4","images/pin-commercial.png", false);
				mapInit(42.2418,-74.3626,"featured-map5","images/pin-house.png", false);
				mapInit(38.8974,-77.0365,"featured-map6","images/pin-apartment.png", false);
				mapInit(38.7860,-77.0129,"featured-map7","images/pin-house.png", false);
				
				mapInit(41.2693,-70.0874,"grid-map1","images/pin-house.png", false);
				mapInit(33.7544,-84.3857,"grid-map2","images/pin-apartment.png", false);
				mapInit(33.7337,-84.4443,"grid-map3","images/pin-land.png", false);
				mapInit(33.8588,-84.4858,"grid-map4","images/pin-commercial.png", false);
				mapInit(34.0254,-84.3560,"grid-map5","images/pin-apartment.png", false);
				mapInit(40.6128,-73.9976,"grid-map6","images/pin-house.png", false);
			}
	
	</script>

-->


	</body>
</html>
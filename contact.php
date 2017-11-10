<?php

include_once 'lib/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>StuDevs | Contact</title>
	<?php include_once 'lib/metalinks.php' ?>
	
</head>
<body>
<div class="loader-bg"></div>
<div id="wrapper">

<!-- Page header -->	
	<header>
		<?php include_once 'lib/navbar.php' ?>
    </header>
	
  		
    <section class="contact-page-1 no-padding">
		<div id="contact-map1"></div>
			<div class="contact1-cont">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="row contact1">
								<div class="col-sm-12">
									<h5 class="subtitle-margin">Get in Touch with StuDevs</h5>
									<h1>Contact Us<span class="special-color">.</span></h1>
									<div class="title-separator-primary"></div>
								</div>
								<div class="col-xs-12 col-md-6 margin-top-45">
									<p class="negative-margin">Studevs.com students students students students  students  students 
									 students  students  students  students  students  students 
									 students  students  students  students  students  students  students  students  students 
									 students  students  students  students  students  students  students </p>
									  students  students  students  students  students  students  students  students  students  students 
									   students  students  students  students  students  students  students  students 
									<img src="images/pinmap.png" alt="" class="pull-left margin-top-45 hidden-md" />
									<address class="contact-info pull-left">
										<span><i class="fa fa-map-marker"></i>National College of Ireland</span>
										<span><i class="fa fa-envelope fa-sm"></i><a href="#">info@studevs.com</a></span>
										<span><i class="fa fa-phone"></i>01-23456789</span>
										<span><i class="fa fa-globe"></i><a href="#">http://www.studevs.com</a></span>
										<span><i class="fa fa-clock-o"></i>Mon-Fri: 9:00 - 17:00</span>
										<span class="span-last">Sat-Sun: 9:00 - 12:00</span>
									</address>
								</div>
								<div class="col-xs-12 col-md-6 margin-top-45">
									<form name="contact-from" id="contact-form" action="#" method="get">
											<div id="form-result"></div>
											<input name="name" id="name" type="text" class="input-short2 main-input required,all" placeholder="Name" />
											<input name="phone" id="phone" type="text" class="input-short2 pull-right main-input required,all" placeholder="Phone Number" />
											<input name="mail" id="mail" type="email" class="input-full main-input required,email" placeholder="Email" />
											<textarea name="message" id="message" class="input-full contact-textarea main-input required,email" placeholder="Message"></textarea>
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
					</div>
				</div>
			</div>
    </section>


	
	
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
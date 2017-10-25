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

	
  	
    <section class="short-image no-padding blog-short-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h5 class="subtitle-margin second-color">add listing</h5>
					<h1 class="second-color">my account</h1>
					<div class="short-title-separator"></div>
				</div>
			</div>
		</div>
    </section>
	
	<section class="section-light section-top-shadow">
		<form name="offer-from" action="#" enctype="multipart/form-data">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<h3 class="title-negative-margin">Listing details<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						<div class="dark-col margin-top-60">
							<div class="row">
								
								<div class="col-xs-12 col-sm-6">
									<select name="transaction2" class="bootstrap-select" title="Property type:">
										<option>Apartment</option>
										<option>House</option>
										<option>Commercial</option>
										<option>Land</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-xs-15">
									<select name="transaction2" class="bootstrap-select" title="Transaction:">
										<option>For sale</option>
										<option>For rent</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-15">
									<input name="price" type="text" class="input-full main-input" placeholder="Price" />
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-15 margin-top-xs-0">
									<input name="area" type="text" class="input-full main-input" placeholder="Area" />
								</div>
								<div class="col-xs-12 col-sm-6">
									<input name="bedrooms" type="text" class="input-full main-input" placeholder="Bedrooms" />
								</div>
								<div class="col-xs-12 col-sm-6">
									<input name="bathrooms" type="text" class="input-full main-input" placeholder="Bathrooms" />
								</div>
							</div>
							<textarea name="message" class="input-full main-input property-textarea" placeholder="Description"></textarea>
							<div class="row">
								<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 margin-top-15">
									<input type="checkbox" id="c1" name="cc" class="main-checkbox" />
									<label for="c1"><span></span>Air Conditioning</label><br/>
									<input type="checkbox" id="c2" name="cc" class="main-checkbox" />
									<label for="c2"><span></span>Internet</label><br/>
									<input type="checkbox" id="c3" name="cc" class="main-checkbox" />
									<label for="c3"><span></span>Cable TV</label><br/>
									<input type="checkbox" id="c4" name="cc" class="main-checkbox" />
									<label for="c4"><span></span>Balcony</label><br/>
									<input type="checkbox" id="c5" name="cc" class="main-checkbox" />
									<label for="c5"><span></span>Roof Terrace</label><br/>
									<input type="checkbox" id="c6" name="cc" class="main-checkbox" />
									<label for="c6"><span></span>Terrace</label>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 margin-top-15">
									<input type="checkbox" id="c7" name="cc" class="main-checkbox" />
									<label for="c7"><span></span>Lift</label><br/>
									<input type="checkbox" id="c8" name="cc" class="main-checkbox" />
									<label for="c8"><span></span>Garage</label><br/>
									<input type="checkbox" id="c9" name="cc" class="main-checkbox" />
									<label for="c9"><span></span>Security</label><br/>
									<input type="checkbox" id="c10" name="cc" class="main-checkbox" />
									<label for="c10"><span></span>High Standard</label><br/>
									<input type="checkbox" id="c11" name="cc" class="main-checkbox" />
									<label for="c11"><span></span>City Centre</label><br/>
									<input type="checkbox" id="c12" name="cc" class="main-checkbox" />
									<label for="c12"><span></span>Furniture</label>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 margin-top-15">
									<input type="checkbox" id="c13" name="cc" class="main-checkbox" />
									<label for="c13"><span></span>Another Option</label><br/>
									<input type="checkbox" id="c14" name="cc" class="main-checkbox" />
									<label for="c14"><span></span>Another Option</label><br/>
									<input type="checkbox" id="c15" name="cc" class="main-checkbox" />
									<label for="c15"><span></span>Another Option</label><br/>
									<input type="checkbox" id="c16" name="cc" class="main-checkbox" />
									<label for="c16"><span></span>Another Option</label><br/>
									<input type="checkbox" id="c17" name="cc" class="main-checkbox" />
									<label for="c17"><span></span>Another Option</label><br/>
									<input type="checkbox" id="c18" name="cc" class="main-checkbox" />
									<label for="c18"><span></span>Another Option</label>
								</div>
							</div>
						</div>				
					</div>
					<div class="col-xs-12 col-md-6 margin-top-xs-60 margin-top-sm-60">
						<h3 class="title-negative-margin">Localization<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						<div class="dark-col margin-top-60">
							<input id="geocomplete" name="geocomplete" type="text" class="input-full main-input" placeholder="Localization" />
							<p class="negative-margin bold-indent">Or drag the marker to property position<p>
							<div id="submit-property-map" class="submit-property-map"></div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 margin-top-15">
									<input name="lng" type="text" class="input-full main-input input-last" placeholder="Longitude" readonly="readonly" />
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-15">
									<input name="lat" type="text" class="input-full main-input input-last" placeholder="Latitude" readonly="readonly" />
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 margin-top-60">
						<h3 class="title-negative-margin">gallery<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
					</div>
					<div class="col-xs-12 margin-top-60">
						<input id="file-upload" name="files[]" type="file" multiple>
					</div>
					<div class="col-xs-12">
						<div class="center-button-cont margin-top-60">
							<a href="#" class="button-primary button-shadow">
								<span>submit property</span>
								<div class="button-triangle"></div>
								<div class="button-triangle2"></div>
								<div class="button-icon"><i class="fa fa-lg fa-home"></i></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</form>
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
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

    <section class="no-padding adv-search-section">
		<!-- Slider main container -->
		<div id="swiper1" class="swiper-container">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide">
					<div class="slide-bg swiper-lazy" data-background="images/sunriseireland.jpg"></div>
					<!-- Preloader image -->
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					<div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-2 col-md-offset-4 col-lg-offset-6 slide-desc-col animated fadeInDown slide-desc-1">
								<div class="slide-desc pull-right">
									<div class="slide-desc-text">
										
										<div class="estate-type">developer</div>
										<div class="transaction-type">developer</div>
										<h4>abc ...... abc</h4>
										<div class="clearfix"></div>
										
										<p>sdfsdf
										</p>
									</div>
									<div class="slide-desc-params">	
										<div class="slide-desc-area">
											<img src="images/area-icon.png" alt="" />?m<sup>2</sup>
										</div>
										<div class="slide-desc-rooms">
											<img src="images/rooms-icon.png" alt="" />2
										</div>
										<div class="slide-desc-baths">
											<img src="images/bathrooms-icon.png" alt="" />1
										</div>	
										<div class="slide-desc-parking">
											<img src="images/parking-icon.png" alt="" />1
										</div>	
									</div>
									<div class="slide-desc-price">
										€ 1 080
									</div>
									<div class="clearfix"></div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			



				<div class="swiper-slide">
					<div class="slide-bg swiper-lazy" data-background="images/bg-pattern11.jpg"></div>
					<!-- Preloader image -->
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					<div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 slide-desc-col animated slide-desc-2">
								<div class="slide-desc pull-left">
									<div class="slide-desc-text">
										
										<div class="estate-type">Java</div>
										<div class="transaction-type">SQL</div>
										<h4>Mary Smith</h4>
										<div class="clearfix"></div>
										
										<p>University : NCI</p>
									</div>
									<div class="slide-desc-params">	
										<div class="slide-desc-area">
											<img src="images/area-icon.png" alt="" />?m<sup>2</sup>
										</div>
										<div class="slide-desc-rooms">
											<img src="images/rooms-icon.png" alt="" />4
										</div>
										<div class="slide-desc-baths">
											<img src="images/bathrooms-icon.png" alt="" />2
										</div>	
										<div class="slide-desc-parking">
											<img src="images/parking-icon.png" alt="" />2
										</div>	
									</div>
									<div class="slide-desc-price">
										Location : Dublin
									</div>		
									<div class="clearfix"></div>										
								</div>
								
							</div>
						</div>
					</div>
					
				</div>



				<div class="swiper-slide">
					<div class="slide-bg swiper-lazy" data-background="images/bg-pattern12.jpg"></div>
					<!-- Preloader image -->
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					<div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3 slide-desc-col animated slide-desc-3">
								<div class="slide-desc center-block">
									<div class="slide-desc-text">
										
										<div class="estate-type">sfsadf</div>
										<div class="transaction-type">sdf</div>
										<h4>Tfffdsf</h4>
										<div class="clearfix"></div>
										
										<p>sdfsdafe</p>
									</div>
									<div class="slide-desc-params">	
										<div class="slide-desc-area">
											<img src="images/area-icon.png" alt="" />?m<sup>2</sup>
										</div>
										<div class="slide-desc-rooms">
											<img src="images/rooms-icon.png" alt="" />2
										</div>
										<div class="slide-desc-baths">
											<img src="images/bathrooms-icon.png" alt="" />1
										</div>	
										<div class="slide-desc-parking">
											<img src="images/parking-icon.png" alt="" />0
										</div>	
									</div>
									<div class="slide-desc-price">
										€ 1 885 p/mo
									</div>		
									<div class="clearfix"></div>									
								</div>
								
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<form class="adv-search-form" action="#">
			<div class="adv-search-cont" id="searchBox">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-lg-11 adv-search-icons">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs adv-search-tabs" role="tablist">
								<li role="presentation" class="active" data-toggle="tooltip" data-placement="top" title="apartments"><a href="#apartments" aria-controls="apartments" role="tab" data-toggle="tab" id="adv-search-tab1"><i class="fa fa-building"></i></a></li>
								<li role="presentation" data-toggle="tooltip" data-placement="top" title="houses"><a href="#houses" aria-controls="houses" role="tab" data-toggle="tab" id="adv-search-tab2"><i class="fa fa-home"></i></a></li>
								<li role="presentation" data-toggle="tooltip" data-placement="top" title="commercials"><a href="#commercials" aria-controls="commercials" role="tab" data-toggle="tab" id="adv-search-tab3"><i class="fa fa-industry"></i></a></li>
								<li role="presentation" data-toggle="tooltip" data-placement="top" title="lands"><a href="#lands" aria-controls="lands" role="tab" data-toggle="tab" id="adv-search-tab4"><i class="fa fa-tree"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-1 visible-lg">
							<a id="adv-search-hide" href="#"><i class="jfont">&#xe801;</i></a>
						</div>
					</div>
				</div>
				<div class="container">
			<div class="row tab-content">
				<div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade in active" id="apartments">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="transaction1" class="bootstrap-select" title="Choose Developer:" multiple>
								<option>Student</option>
								<option>Business</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="country1" class="bootstrap-select" title="Choosdfgs:" multiple data-actions-box="true">
								<option>Dublin</option>
								<option>Galway</option>
								<option>dev</option>
								<option>dev</option>
								<option>dev</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="city1" class="bootstrap-select" title="Choosdfg:" multiple data-actions-box="true">
								<option>studev</option>
								<option>studev</option>
								<option>studev</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="location1" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
								<option>Some location 1</option>
								<option>Some location 2</option>
								<option>Some location 3</option>
								<option>Some location 4</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">	
								<label for="slider-range-price1-value" class="adv-search-label">Price:</label>
								<span>€</span>
								<input type="text" id="slider-range-price1-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-price1" data-min="0" data-max="5000000" class="slider-range"></div>
							</div>
							
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">	
								<label for="slider-range-area1-value" class="adv-search-label">op2;</label>
								<span>m<sup>2</sup></span>
								<input type="text" id="slider-range-area1-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-area1" data-min="0" data-max="180" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">	
								<label for="slider-range-bedrooms1-value" class="adv-search-label">op3;</label>
								<input type="text" id="slider-range-bedrooms1-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-bedrooms1" data-min="1" data-max="10" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">	
								<label for="slider-range-bathrooms1-value" class="adv-search-label">op4;:</label>
								<input type="text" id="slider-range-bathrooms1-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-bathrooms1" data-min="1" data-max="4" class="slider-range"></div>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade" id="houses">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="transaction2" class="bootstrap-select" title="Transaction:" multiple>
								<option>Forsdfffe</option>
								<option>Fosdfnt</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="country2" class="bootstrap-select" title="Country:" multiple data-actions-box="true">
								
								<option>Uasdfsads</option>
								<option>Csadffda</option>
								<option>Msafdsasdo</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="city2" class="bootstrap-select" title="City:" multiple data-actions-box="true">
								<option>Nstudevk</option>
								<option>Lstudes</option>
								<option>Csdf</option>
								<option>Hosdfn</option>
								<option>Phsfdsfdia</option>
								<option>Phstfsudevx</option>
								<option>Wstudsdevn</option>
								<option>Sstudevty</option>
								<option>Destudevt</option>
								<option>studevn</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="location2" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
								<option>Some location 1</option>
								<option>Some location 2</option>
								<option>Some location 3</option>
								<option>Some location 4</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">	
								<label for="slider-range-price2-value" class="adv-search-label">Price:</label>
								<span>$</span>
								<input type="text" id="slider-range-price2-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-price2" data-min="0" data-max="300000" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">	
								<label for="slider-range-area2-value" class="adv-search-label">studev</label>
								<span>m<sup>2</sup></span>
								<input type="text" id="slider-range-area2-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-area2" data-min="0" data-max="180" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">	
								<label for="slider-range-bedrooms2-value" class="adv-search-label">Bstudevms:</label>
								<input type="text" id="slider-range-bedrooms2-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-bedrooms2" data-min="1" data-max="10" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">	
								<label for="slider-range-bathrooms2-value" class="adv-search-label">Bstudevms:</label>
								<input type="text" id="slider-range-bathrooms2-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-bathrooms2" data-min="1" data-max="4" class="slider-range"></div>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade" id="commercials">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="transaction3" class="bootstrap-select" title="Transaction:" multiple>
								<option>Fostudeve</option>
								<option>Fstudevv</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="country3" class="bootstrap-select" title="Country:" multiple data-actions-box="true">
								
								<option>Ustudevs</option>
								<option>Cstudevda</option>
								<option>Mestudevo</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="city3" class="bootstrap-select" title="City:" multiple data-actions-box="true">
								<option>Nestudevk</option>
								<option>Lstudeves</option>
								<option>Chicago</option>
								<option>Houston</option>
								<option>Phicaelphia</option>
								<option>Phhicaix</option>
								<option>Whicagton</option>
								<option>Sahisdfcake City</option>
								<option>Dhicait</option>
								<option>Bohican</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="location3" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
								<option>Some location 1</option>
								<option>Some location 2</option>
								<option>Some location 3</option>
								<option>Some location 4</option>
							</select>
						</div>
					</div>
					<div class="row">
					<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="type3" class="bootstrap-select short-margin" title="Type:" multiple>
								<option>Shicaice</option>
								<option>Fachicary</option>
								<option>Wahicaouse</option>
								<option>Offhicae</option>
								<option>Other</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">	
								<label for="slider-range-price3-value" class="adv-search-label">Price:</label>
								<span>$</span>
								<input type="text" id="slider-range-price3-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-price3" data-min="0" data-max="300000" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">	
								<label for="slider-range-area3-value" class="adv-search-label">Ahicaa:</label>
								<span>m<sup>2</sup></span>
								<input type="text" id="slider-range-area3-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-area3" data-min="0" data-max="180" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">	
								<label for="slider-range-bedrooms3-value" class="adv-search-label">Rohicas:</label>
								<input type="text" id="slider-range-bedrooms3-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-bedrooms3" data-min="1" data-max="10" class="slider-range"></div>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade" id="lands">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="transaction4" class="bootstrap-select" title="Transaction:" multiple>
								<option>ghjle</option>
								<option>Fhjkft</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="country4" class="bootstrap-select" title="Country:" multiple data-actions-box="true">
								<option>U-------</option>
								<option>C-----</option>
								<option>M------option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="city4" class="bootstrap-select" title="City:" multiple data-actions-box="true">
								<option>N----</option>
								<option>L-------</option>
								<option>C------</option>
								<option>--</option>
								<option>P-------</option>
								<option>----</option>
								<option>W----</option>
								<option>-</option>
								<option>----</option>
								<option>-----</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="location4" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
								<option>Some location 1</option>
								<option>Some location 2</option>
								<option>Some location 3</option>
								<option>Some location 4</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="type4" class="bootstrap-select short-margin" title="Type:" multiple>
								<option>Fstudevsd</option>
								<option>Rstudevs</option>
								<option>studevsd</option>
								<option>studevst</option>
								<option>Ostudevsr</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">	
								<label for="slider-range-price4-value" class="adv-search-label">Price:</label>
								<span>$</span>
								<input type="text" id="slider-range-price4-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-price4" data-min="0" data-max="300000" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">	
								<label for="slider-range-area4-value" class="adv-search-label">Astudevs:</label>
								<span>-----hh---</span>
								<input type="text" id="slider-range-area4-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-area4" data-min="0" data-max="500" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	
				
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-3 col-md-offset-6 col-lg-offset-9 adv-search-button-cont">
							<a href="#" class="button-primary pull-right">
								<span>search</span>
								<div class="button-triangle"></div>
								<div class="button-triangle2"></div>
								<div class="button-icon"><i class="fa fa-search"></i></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</form>
    </section>
	
    <section class="section-light bottom-padding-45 section-both-shadow">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="feature wow fadeInLeft" id="feature1">
						<div class="feature-icon center-block"><i class="fa fa-building"></i></div>
						<div class="feature-text">
							<h5 class="subtitle-margin">Tsdy &amp; Rowqzes</h5>
							<h3>Astudevsnts<span class="special-color">.</span></h3>
							<div class="title-separator center-block feature-separator"></div>
							<p>Yostudevso rens dsad fsadfsd afsaa rd sdsd sd buy fdfsd d gsdffbads fkj sadjkf sdajf sadkj fd sdfsdaf- sdsdaf.</p>
						</div>
					</div>
				</div>			
				<div class="col-sm-6 col-lg-4">
					<div class="feature wow fadeInUp" id="feature2">
						<div class="feature-icon center-block"><i class="fa fa-home"></i></div>
						<div class="feature-text">
							<h5 class="subtitle-margin">Gtty &amp; Rppr</h5>
							<h3>Hoghkj<span class="special-color">.</span></h3>
							<div class="title-separator center-block feature-separator"></div>
							<p>Resi dedsf dntial student development is vias df f sd fksdjkfjds jks jj oi oas  s dafmnn snsm fnm msa fmin our listings.</p>
						</div>
					</div>
				</div>			
				<div class="col-sm-6 col-lg-4">
					<div class="feature wow fadeInUp" id="feature3">
						<div class="feature-icon center-block"><i class="fa fa-industry"></i></div>
						<div class="feature-text">
							<h5 class="subtitle-margin">Bggy &amp; Rkjht</h5>
							<h3>Cosdfty<span class="special-color">.</span></h3>
							<div class="title-separator center-block feature-separator"></div>
							<p>Witdfdaf jk fskj fsjk sdkjkd fkjsdstudevsstudevs studevs studevsvsnfkl kstudevs studevs studevssd df fd studevst</p>
						</div>
					</div>
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
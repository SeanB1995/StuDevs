<?php

include_once 'lib/config.php';


$statement = $conn->prepare("SELECT * FROM project WHERE project_id !=?");
$statement->bind_param("s", $projIdPrep);//this must be "s" !
$projIdPrep = '0';
$statement->execute();
$result = $statement->get_result();
$projectCount = mysqli_num_rows($result);


/*

ADD ANOTHER FOR ASSIGNED PROJECTS AND POP THE THEME PART BACK IN FOR THE 4TH NUMBER

*/


$statement = $conn->prepare("SELECT * FROM company WHERE company_id !=?");
$statement->bind_param("s", $compIdPrep);//this must be "s" !
$compIdPrep = '0';
$statement->execute();
$result = $statement->get_result();
$companyCount = mysqli_num_rows($result);


$statement = $conn->prepare("SELECT * FROM student WHERE student_id !=?");
$statement->bind_param("s", $stuIdPrep);//this must be "s" !
$stuIdPrep = '0';
$statement->execute();
$result = $statement->get_result();
$studentCount = mysqli_num_rows($result);

$statement = $conn->prepare("SELECT * FROM project WHERE project_id !=? AND student_ref IS NULL ORDER BY RAND() LIMIT 3");
$statement->bind_param("s", $projIdPrep);//this must be "s" !
$projIdPrep = '0';
$statement->execute();
$result = $statement->get_result();

$comp = array();
$title = array();
$desc = array();
$req = array();
$recPrice = array();
$price = array();

//, $row['title'], $row['description'], $row['requirements'], $row['rec_price'], $row['price']
while($row = $result->fetch_assoc()){
	array_push($comp, $row['company_name']);
	array_push($title, $row['title']);
	array_push($desc, $row['description']);
	array_push($req, $row['requirements']);
	array_push($recPrice, $row['rec_price']);
	array_push($price, $row['price']);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>StuDevs | Student Sofware Developers</title>
	<?php include_once 'lib/metalinks.php'; ?>
	
</head>
<body>
<div class="loader-bg"></div>
<div id="wrapper">

<!-- Page header -->	
	<header>
		<?php include_once 'lib/navbar.php'; ?>
    </header>

    <section class="no-padding adv-search-section">
		<!-- Slider main container -->
		<div id="swiper1" class="swiper-container">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->


					<!--start of project listing. -->



				<div class="swiper-slide">
					<div class="slide-bg swiper-lazy" data-background="images/coding1.jpg"></div>
					<!-- Preloader image -->
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					<div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-2 col-md-offset-4 col-lg-offset-6 slide-desc-col animated fadeInDown slide-desc-1">
								<div class="slide-desc pull-right">
									<div class="slide-desc-text">
										
										<div class="estate-type">Studevs Guideline</div>
										<div class="transaction-type">€<?php echo $recPrice[0]; ?></div>
										<h4><?php echo $title[0]; ?></h4>
										<div class="clearfix"></div>
										
										<p>
											<b>Company: </b><?php echo $comp[0]; ?><br>
											<b>Requirements: </b><?php echo $req[0]; ?><br>
											<b>Description: </b><?php echo $desc[0]; ?><br>
										</p>

									</div>
									
									<div class="slide-desc-price">
										€<?php echo $price[0]; ?>
									</div>
									<div class="clearfix"></div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				

				
				<div class="swiper-slide">
					<div class="slide-bg swiper-lazy" data-background="images/coding2.jpg"></div>
					<!-- Preloader image -->
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					<div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 slide-desc-col animated slide-desc-2">
								<div class="slide-desc pull-left">
									<div class="slide-desc-text">
										
										<div class="estate-type">Studevs Guideline</div>
										<div class="transaction-type">€<?php echo $recPrice[1]; ?></div>
										<h4><?php echo $title[1]; ?></h4>
										<div class="clearfix"></div>
										
										<p>
											<b>Company: </b><?php echo $comp[1]; ?><br>
											<b>Requirements: </b><?php echo $req[1]; ?><br>
											<b>Description: </b><?php echo $desc[1]; ?><br>
										</p>

									</div>
									
									<div class="slide-desc-price">
										€<?php echo $price[1]; ?>
									</div>
									<div class="clearfix"></div>										
								</div>
								
							</div>
						</div>
					</div>
					
				</div>


				<div class="swiper-slide">
					<div class="slide-bg swiper-lazy" data-background="images/coding3.jpg"></div>
					<!-- Preloader image -->
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					<div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3 slide-desc-col animated slide-desc-3">
								<div class="slide-desc center-block">
									<div class="slide-desc-text">
										
										<div class="estate-type">Studevs Guideline</div>
										<div class="transaction-type">€<?php echo $recPrice[2]; ?></div>
										<h4><?php echo $title[2]; ?></h4>
										<div class="clearfix"></div>
										
										<p>
											<b>Company: </b><?php echo $comp[2]; ?><br>
											<b>Requirements: </b><?php echo $req[2]; ?><br>
											<b>Description: </b><?php echo $desc[2]; ?><br>
										</p>

									</div>
									<div class="slide-desc-params">	
											
										<div style="margin-left: 85%;" class="slide-desc-parking">Price: </div>	
									</div>
									<div class="slide-desc-price">
										€<?php echo $price[2]; ?>
									</div>
									<div class="clearfix"></div>									
								</div>
								
							
							</div>
						</div>
					</div>
				</div>
		




				<!--end of project listing. -->


			</div>
		</div>
    </section>

    <section class="section-light top-padding-45 bottom-padding-45">
		<div class="container">
			<div class="row count-container">
				<div class="col-xs-6 col-lg-4">
					<div class="number" id="number1">
						<div class="number-img">	
							<i class="fa fa-group"></i>
						</div>
						<span class="number-label text-color2">STUDENTS</span>
						<?php $esd = 97; ?>
						<span class="number-big text-color3 count" data-from="0" data-to="<?php echo $studentCount; ?>" data-speed="2000"></span>
					</div>
				</div>
				<div class="col-xs-6 col-lg-4 number_border">
					<div class="number" id="number2">
						<div class="number-img">	
							<i class="fa fa-copyright"></i>	
						</div>			
						<span class="number-label text-color2">COMPANIES</span>
						<span class="number-big text-color3 count" data-from="0" data-to="<?php echo $companyCount; ?>" data-speed="2000"></span>
					</div>
				</div>
				<div class="col-xs-6 col-lg-4 number_border3">
					<div class="number" id="number3">
						<div class="number-img">	
							<i class="fa fa-laptop"></i>
						</div>
						<span class="number-label text-color2">PROJECTS</span>
						<span class="number-big text-color3 count" data-from="0" data-to="<?php echo $projectCount; ?>" data-speed="2000"></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	
    <section class="section-light bottom-padding-45 section-both-shadow">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="feature wow fadeInLeft" id="feature1">
						<div class="feature-icon center-block"><i class="fa fa-group"></i></div>
						<div class="feature-text">
							<h5 class="subtitle-margin"></h5>
							<h3>Students<span class="special-color">.</span></h3>
							<div class="title-separator center-block feature-separator"></div>
							<p>Yostudevso rens dsad fsadfsd afsaa rd sdsd sd buy fdfsd d gsdffbads fkj sadjkf sdajf sadkj fd sdfsdaf- sdsdaf.</p>
						</div>
					</div>
				</div>			
				<div class="col-sm-6 col-lg-4">
					<div class="feature wow fadeInUp" id="feature2">
						<div class="feature-icon center-block"><i class="fa fa-copyright"></i></div>
						<div class="feature-text">
							<h5 class="subtitle-margin"></h5>
							<h3>Companies<span class="special-color">.</span></h3>
							<div class="title-separator center-block feature-separator"></div>
							<p>Resi dedsf dntial student development is vias df f sd fksdjkfjds jks jj oi oas  s dafmnn snsm fnm msa fmin our listings.</p>
						</div>
					</div>
				</div>			
				<div class="col-sm-6 col-lg-4">
					<div class="feature wow fadeInUp" id="feature3">
						<div class="feature-icon center-block"><i class="fa fa-laptop"></i></div>
						<div class="feature-text">
							<h5 class="subtitle-margin"></h5>
							<h3>Projects<span class="special-color">.</span></h3>
							<div class="title-separator center-block feature-separator"></div>
							<p>Witdfdaf jk fskj fsjk sdkjkd fkjsdstudevsstudevs studevs studevsvsnfkl kstudevs studevs studevssd df fd studevst</p>
						</div>
					</div>
				</div>			
				
			</div>
		</div>
    </section>

    
    <?php 
    include_once 'lib/footer.php'; 
    ?>

	</body>
</html>
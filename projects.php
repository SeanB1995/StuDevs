<?php

include_once 'lib/config.php';

$query = "";


if(strpos($url, 'price_lowest_first')){
	$statement = $conn->prepare("SELECT * FROM project WHERE project_id!=? AND student_ref IS NULL ORDER BY price ASC");
	$statement->bind_param("s", $projIdPrep);//this must be "s" !
	$projIdPrep = '0';
}

elseif(strpos($url, 'price_highest_first')){
	$statement = $conn->prepare("SELECT * FROM project WHERE project_id!=? AND student_ref IS NULL ORDER BY price DESC");
	$statement->bind_param("s", $projIdPrep);//this must be "s" !
	$projIdPrep = '0';
}


elseif(strpos($url, 'date_oldest_first')){
	$statement = $conn->prepare("SELECT * FROM project WHERE project_id!=? AND student_ref IS NULL ORDER BY date_advertised ASC");
	$statement->bind_param("s", $projIdPrep);//this must be "s" !
	$projIdPrep = '0';
}

else{
	//this is the default query
	$statement = $conn->prepare("SELECT * FROM project WHERE project_id!=? AND student_ref IS NULL ORDER BY date_advertised DESC ");
	$statement->bind_param("s", $projIdPrep);//this must be "s" !
	$projIdPrep = '0';
}



$statement->execute();
$result = $statement->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>StuDevs | Projects</title>
	<?php include_once 'lib/metalinks.php'; ?>
	
</head>
<body>
<div class="loader-bg"></div>
<div id="wrapper">
<!-- Page header -->	
	<header>
		<?php include_once 'lib/navbar.php';

		 ?>
    </header>
	


	<section class="section-light section-top-shadow">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-12 col-lg-6">
								<h5 class="subtitle-margin">Company Software Projects</h5>
								<h1><?php echo mysqli_num_rows($result);?> open projects found<span class="special-color">.</span></h1>
							</div>
							<div class="col-xs-12 col-lg-6">											
								
								<div class="order-by-container">
									<form action="lib/sort-results.php" method="post">
									<select class="bootstrap-select" name="project-sort" title="Sort By:">
										<option value="1">Price: lowest first</option>
										<option value="2">Price: highest first</option>
										<option value="3">Date: newest first</option>
										<option value="4">Date: oldest first</option>
									</select>
									<button style="margin-left: 80%;" class="btn btn-primary" type="submit">Go</button>
									</form>
								</div>	
								
								
							</div>							
							<div class="col-xs-12">
								<div class="title-separator-primary"></div>
							</div>
						</div>
						<div class="row list-offer-row">
							<div class="col-xs-12">




								<?php 
								while ($row = $result->fetch_assoc())  
								{
								?>

								<!--start of project listing. -->
								<div class="list-offer">
									<div class="list-offer-left">
										<div class="list-offer-front">
									
											<div class="list-offer-photo">
												<?php if($row['pic_type']=='0'){
													echo "<img src='images/project-default.PNG' alt='' />";
												}
												 else{ 
													echo "<img src='images/uploads/project".strtotime($row['date_advertised']).".".$row['pic_type']."' alt='' />";
												 } ?>
											
												<div class="type-container">
													<div class="estate-type">Studevs guideline:</div>
													<div class="transaction-type">€<?php echo $row['rec_price']; ?></div>
												</div>
											</div>
											
										</div>
										<div class="list-offer-back">
											<div id="list-map1" class="list-offer-map"></div>
										</div>
									</div>
									<a class="list-offer-right-large" href="estate-details-right-sidebar.html">
										<div class="list-offer-text">
											<i class="fa fa-copyright list-offer-localization hidden-xs"></i>
											<p><b>Company: </b><?php echo $row['company_name']; ?></p>
											<?php if(strpos($row['title'], "app")||strpos($row['title'], "application")) echo "<i class='fa fa-mobile-phone list-offer-localization hidden-xs'></i>";
											else echo "<i class='fa fa-laptop list-offer-localization hidden-xs'></i>"; ?>
											
											<div class="list-offer-h4"><h4 class="list-offer-title"><?php echo $row['title']; ?></h4></div>
											<div class="clearfix"></div>
											<?php echo $row['description']."<br><br><b>Requirements:</b> ".$row['requirements']; ?>
											<p class="invisible-line"><?php echo $studesc; ?></p>
											<div class="clearfix"></div>
										</div>
										<div class="price-list-cont">
											<div class="list-price">
												€ <?php echo $row['price']; ?>
											</div>	
										</div>
									</a>
									<div class="clearfix"></div>
								</div>
								<!--end of project listing. -->

								   <?php
								}

								?>






				
								
								
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
<?php

include_once 'lib/header.php';

if($_SESSION['loggedIn']!==true){
	header("Location: index.php?login_or_signup_to_advertise_projects");
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>StuDevs | Advertise Project</title>
	<?php include_once 'lib/metalinks.php'; ?>
	
</head>
<body>
<div class="loader-bg"></div>
<div id="wrapper">

<!-- Page header -->	
	<header>
		<?php include_once 'lib/navbar.php'; ?>
    </header>
	
  	
    <section class="short-image no-padding blog-short-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h5 class="black-text-pro subtitle-margin second-color">Advertise Project</h5>
					<h1 class="black-text-pro second-color">Advertise Project</h1>
					<div class="short-title-separator"></div>
				</div>
			</div>
		</div>
    </section>
	
	<section class="section-light section-top-shadow">
		<form action="lib/saveadvert.php" method="post" name="advertise-project" enctype="multipart/form-data">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="title-negative-margin">Project details<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						<div class="dark-col margin-top-60">
							<div class="row">
							
								<div class="col-xs-12 col-sm-6">
									<select name="transaction2" class="bootstrap-select" title="Primary Language:">
										<option>PHP</option>
										<option>Java</option>
										<option>C#</option>
										<option>C</option>
										<option>Python</option>
										<option>Ruby on Rails</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-xs-15">
									<select name="transaction2" class="bootstrap-select" title="Framework:">
										<option>node.js</option>
										<option>Spring</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-15">
									<input name="title" type="text" class="input-full main-input" placeholder="Project Title" />
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-15">
									<input name="price" type="text" class="input-full main-input" placeholder="Price" />
								</div>
								
							
							</div>
							<textarea name="description" class="input-full main-input property-textarea" placeholder="Description"></textarea>
							<div class="row">
							<h4>Choose Project Requirements</h4>
								<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 margin-top-15">
									<input type="checkbox" id="c1" name="cc" class="main-checkbox" />
									<label for="c1"><span></span>Log in System</label><br/>
									<input type="checkbox" id="c2" name="cc" class="main-checkbox" />
									<label for="c2"><span></span>Image Gallery</label><br/>
									<input type="checkbox" id="c3" name="cc" class="main-checkbox" />
									<label for="c3"><span></span>Comment Section</label><br/>
									<input type="checkbox" id="c4" name="cc" class="main-checkbox" />
									<label for="c4"><span></span>User Messaging System</label><br/>
									<input type="checkbox" id="c5" name="cc" class="main-checkbox" />
									<label for="c5"><span></span>User Video Chat</label><br/>
									
								</div>
					
							
							</div>
						</div>				
					</div>
					<!--
					<div class="col-xs-12 col-md-6 margin-top-xs-60 margin-top-sm-60">
						<h3 class="title-negative-margin">Project Location<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						<div class="dark-col margin-top-60">
							<input id="geocomplete" name="projLocation" required="" type="text" class="input-full main-input" placeholder="Enter the town/city of your company/branch." />
							<p class="negative-margin bold-indent">Or drag the marker to the location<p>
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
					</div> -->
					<div class="col-xs-12 margin-top-60">
						<h3 class="title-negative-margin">gallery<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
					</div>
					<div class="col-xs-12 margin-top-60">
						<input id="file-upload" name="files[]" type="file" multiple>
					</div>
					<div class="col-xs-12">
						<div class="center-button-cont margin-top-60">
						<button type="submit" name="submit_ad" class="button-primary button-shadow button-full">Submit Project</button>
							<!-- <a href="#" class="button-primary button-shadow">
								<span>submit project</span>
								<div class="button-triangle"></div>
								<div class="button-triangle2"></div>
								<div class="button-icon"><i class="fa fa-lg fa-home"></i></div>
							</a> -->
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
</div>	

	
<?php 
    include_once 'lib/footer.php'; 
    ?>



	</body>
</html>
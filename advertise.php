<?php
include_once 'headpage.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Studevs | Student Development</title>
	<?php include 'headlinks.php' ?>
	
</head>
<body>
<div class="loader-bg"></div>
<div id="wrapper">

<!-- Page header -->	
	<header>
		<?php include 'headnav.php' ?>
    </header>
	
  	
    <section class="short-image no-padding blog-short-titl">
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
		<form action="saveadvert.php" method="post" enctype="multipart/form-data">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<h3 class="title-negative-margin">Listing details<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						<div class="dark-col margin-top-60">
							<div class="row">
								
								<div class="col-xs-12 col-sm-6">
									<select name="prop type" class="bootstrap-select" title="student development type:">
										<option>Apartment</option>
										<option>House</option>
										<option>Commercial</option>
										<option>Land</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-xs-15">
									<select name="sale rent" class="bootstrap-select" title="For Sale/Rent">
										<option>For sale</option>
										<option>For rent</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-15">
									<input name="price" type="text" class="input-full main-input" placeholder="Price" />
								</div>
								<div class="col-xs-12 col-sm-6 margin-top-15 margin-top-xs-0">
									<input name="council" type="text" class="input-full main-input" placeholder="Local Council" />
								</div>
								<div class="col-xs-12 col-sm-6">
									<input name="bedrooms" type="text" class="input-full main-input" placeholder="Bedrooms" />
								</div>
								<div class="col-xs-12 col-sm-6">
									<input name="bathrooms" type="text" class="input-full main-input" placeholder="Bathrooms" />
								</div>
							</div>
							<textarea name="description" class="input-full main-input student development-textarea" placeholder="Description"></textarea>
							
						</div>				
					</div>
					<div class="col-xs-12 col-md-6 margin-top-xs-60 margin-top-sm-60">
						<h3 class="title-negative-margin">Area<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						<div class="dark-col margin-top-60">
							<input id="geocomplete" name="area" type="text" class="input-full main-input" placeholder="Area" />
							<p class="negative-margin bold-indent">Or drag the marker to student development position<p>
							<div id="submit-student development-map" class="submit-student development-map"></div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 margin-top-15">
									<input name="long" type="text" class="input-full main-input input-last" placeholder="Longitude" readonly="readonly" />
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
								<span>submit student development</span>
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
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 small-cont">
					<img src="images/jhbsfdbhjfdsbh.jpg" alt="Studevs" class="img-responsive footer-logo" id="navLogo" />
				</div>
				<div class="col-xs-12 col-md-6 footer-copyrights">
					&copy; Copyright Studevs 2017<a href="http://www.studevs.com" target="blank"></a> | All Rights Reserved
				</div>
			</div>
		</div>
	</footer>
</div>	

<!-- Move to top button -->

<div class="move-top">
	<div class="big-triangle-second-color"></div>
	<div class="big-icon-second-color"><i class="jfont fa-lg">&#xe803;</i></div>
</div>	

<!-- Login modal -->
	<div class="modal fade apartment-modal" id="login-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title">
						<h1>Login<span class="special-color">.</span></h1>
						<div class="short-title-separator"></div>
					</div>
					<input name="login" type="email" class="input-full main-input" placeholder="Email" />
					<input name="password" type="password" class="input-full main-input" placeholder="Your Password" />
					<a href="my-profile.html" class="button-primary button-shadow button-full">
						<span>Sign In</span>
						<div class="button-triangle"></div>
						<div class="button-triangle2"></div>
						<div class="button-icon"><i class="fa fa-user"></i></div>
					</a>
					<a href="#" class="forgot-link pull-right">Forgot your password?</a>
					<div class="clearfix"></div>
					<p class="login-or">OR</p>
					<a href="#" class="facebook-button">
						<i class="fa fa-facebook"></i>
						<span>Login with Facebook</span>
					</a>
					<a href="#" class="google-button margin-top-15">
						<i class="fa fa-google-plus"></i>
						<span>Login with Google</span>
					</a>
					<p class="modal-bottom">Don't have an account? <a href="#" class="register-link">REGISTER</a></p>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<!-- Register modal -->
	<div class="modal fade apartment-modal" id="register-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title">
						<h1>Register<span class="special-color">.</span></h1>
						<div class="short-title-separator"></div>
					</div>
					<input name="first-name" type="text" class="input-full main-input" placeholder="Frist name" />
					<input name="last-name" type="text" class="input-full main-input" placeholder="Last name" />
					<input name="email" type="email" class="input-full main-input" placeholder="Email" />
					<input name="password" type="password" class="input-full main-input" placeholder="Password" />
					<input name="repeat-password" type="password" class="input-full main-input" placeholder="Repeat Password" />
					<a href="my-profile.html" class="button-primary button-shadow button-full">
						<span>Sign up</span>
						<div class="button-triangle"></div>
						<div class="button-triangle2"></div>
						<div class="button-icon"><i class="fa fa-user"></i></div>
					</a>
					<div class="clearfix"></div>
					<p class="login-or">OR</p>
					<a href="#" class="facebook-button">
						<i class="fa fa-facebook"></i>
						<span>Sign Up with Facebook</span>
					</a>
					<a href="#" class="google-button margin-top-15">
						<i class="fa fa-google-plus"></i>
						<span>Sign Up with Google</span>
					</a>
					<p class="modal-bottom">Already registered? <a href="#" class="login-link">SIGN IN</a></p>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<!-- Forgotten password modal -->
	<div class="modal fade apartment-modal" id="forgot-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title">
						<h1>Forgot your password<span class="special-color">?</span></h1>
						<div class="short-title-separator"></div>
					</div>
					<p class="negative-margin forgot-info">Instert your account email address.<br/>We will send you a link to reset your password.</p>
					<input name="login" type="email" class="input-full main-input" placeholder="Your email" />
					<a href="my-profile.html" class="button-primary button-shadow button-full">
						<span>Reset password</span>
						<div class="button-triangle"></div>
						<div class="button-triangle2"></div>
						<div class="button-icon"><i class="fa fa-user"></i></div>
					</a>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<!-- jQuery  -->
    <script type="text/javascript" src="js/jQuery/jquery.min.js"></script>
	<script type="text/javascript" src="js/jQuery/jquery-ui.min.js"></script>
	
<!-- Bootstrap-->
    <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>

<!-- Google Maps -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDfDCV5hXiPamCIT8_vwGXuzimLQ9MF76g&amp;sensor=false&amp;libraries=places"></script>
	
<!-- plugins script -->
	<script type="text/javascript" src="js/plugins.js"></script>

<!-- template scripts -->
	<script type="text/javascript" src="mail/validate.js"></script>
    <script type="text/javascript" src="js/apartment.js"></script>
	
	</body>
</html>
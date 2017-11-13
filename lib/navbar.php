<?php
include_once 'header.php';
?>



<div class="top-bar-wrapper">
			<div class="container top-bar">
				<div class="row">
					<div class="col-xs-5 col-sm-8">
						<div class="top-mail pull-left hidden-xs">
							<span class="top-icon-circle">
								<i class="fa fa-envelope fa-sm"></i>
							</span>
							<span class="top-bar-text">info@studevs.com</span>
						</div>
						
						<div class="top-localization pull-left hidden-sm hidden-md hidden-xs">
							<span class="top-icon-circle pull-left">
								<i class="fa fa-map-marker"></i>
							</span>
							<span class="top-bar-text">Dublin 1, Ireland</span>
						</div>
					</div>
					<?php if($_SESSION['loggedIn']!==true){ ?>
					<div class="col-xs-7 col-sm-4">
						<div class="top-social-last top-dark pull-right" data-toggle="tooltip" data-placement="bottom" title="Login/Register">
							<a class="top-icon-circle" href="#login-modal" data-toggle="modal">
								<i class="fa fa-lock"></i>
							</a>
						</div>
					</div>
					<?php } ?>
				</div>
			</div><!-- /.top-bar -->	
		</div><!-- /.Page top-bar-wrapper -->	
		<nav class="navbar main-menu-cont">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar icon-bar1"></span>
						<span class="icon-bar icon-bar2"></span>
						<span class="icon-bar icon-bar3"></span>
					</button>
					<a href="http://www.studevs.com" title="" class="navbar-brand">
						<img src="../images/logorect.PNG" alt="Studevs.com" id="navLogo"/>
					</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="http://www.studevs.com" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
						</li>
						

						<?php if($_SESSION['accountType']=='Company'){ ?>
						<li class="dropdown">
							<a href="listings.php" role="button" aria-haspopup="true" aria-expanded="false">Students</a>
						</li>


						<?php } else{ ?>
						<li class="dropdown">
							<a href="listings.php" role="button" aria-haspopup="true" aria-expanded="false">Projects</a>
						</li>
						<?php } 
						

						
						
						 if($_SESSION['loggedIn']!==true){ ?>
							
							<li class="dropdown"><a href="#login-modal" data-toggle="modal">Log In</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up</a>
								<ul class="dropdown-menu">
									<li><a href="#" onclick="showcompmod()">Company</a></li>
									<li><a href="#" onclick="showstumod()">Student</a></li>
								</ul>
							</li>

						<?php } else{ ?>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
								<ul class="dropdown-menu">
									<li><a href="profile.php">My Profile</a></li>
									<li><a href="offers.php">My Offers</a></li>
									<li><a href="lib/logout.php">Logout</a></li>
								</ul>
							</li>
						<?php 
						} 
						?>


						<li class="dropdown">
							<a href="contact.php" role="button" aria-haspopup="true" aria-expanded="false">Contact Us</a>
						</li>
						<?php if($_SESSION['loggedIn']!==true){
							
							echo "<li><a href=\"#\" class=\"special-color\" onclick=\"showlogmod()\">Advertise Project</a></li>";
						}
						else{
							if(isset($_SESSION['compId'])){
							echo "<li><a href=\"advertise.php\" class=\"special-color\">Advertise Project</a></li>";
							}
						}
						?>
						
					</ul>
				</div>
			</div>
		</nav>


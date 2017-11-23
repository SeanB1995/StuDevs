<?php

include_once 'lib/header.php';
if($_SESSION['loggedIn']!==true){
	header("Location: index.php?log_in_or_sign_up_to_view_profile");
	exit();
}


$statement = $conn->prepare("SELECT * FROM session WHERE login_date=? AND acc_ref=?");
$statement->bind_param("ss", $loginDatePrep, $accountRefPrep);//this must be "s" !
$loginDatePrep = $_SESSION['loginDate'];
$accountRefPrep = $_SESSION['accountRef'];
//end of prepared statement
$statement->execute();
$result = $statement->get_result();
$row = $result->fetch_assoc();

$_SESSION['sessionId'] = $row['session_id'];

$_SESSION['table'] = strtolower($_SESSION['accountType']);

$table = $_SESSION['table'];

//selecting profile picture extension type eg png, jpg, jpeg
$statement = $conn->prepare("SELECT * FROM $table WHERE acc_ref=?");
$statement->bind_param("s", $accountRefPrep);//this must be "s" !
$accountRefPrep = $_SESSION['accountRef'];
$statement->execute();
$result = $statement->get_result();
$row = $result->fetch_assoc();
$_SESSION['picType'] = $row['pic_type'];




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>StuDevs | Listings</title>
	<?php include_once 'lib/metalinks.php' ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="loader-bg"></div>
<div id="wrapper">

<!-- Page header -->	
	<header>
		<?php include_once 'lib/navbar.php' ?>
    </header>
  		
    <section class="short-image no-padding blog-short-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h5 class="black-text-pro subtitle-margin second-color">Dashboard</h5>
					<h1 class="black-text-pro second-color">
							<?php

							if(isset($_SESSION['compName'])) echo $_SESSION['compName']; 

							else echo $_SESSION['firstName']; 

							 ?>'s Profile</h1>
					<div class="short-title-separator"></div>
				</div>
			</div>
		</div>
    </section>
	
	<section class="section-light section-top-shadow">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-9 col-md-push-3">
					<div class="row">
						<div class="col-xs-12">
							<h5 class="subtitle-margin">
							<?php

							if(isset($_SESSION['compName'])) echo $_SESSION['compName']; 

							else echo $_SESSION['firstName']; 

							 ?>'s</h5>

							<h1>Profile<span class="special-color">.</span></h1>
							<div class="title-separator-primary"></div>
						</div>
					</div>	

					<!-- Start of profile picture form -->
					<form name="profile-picture-form" method="post" action="lib/profile-picture.php" enctype="multipart/form-data">

						<div class="row margin-top-60">
						<div class="col-xs-6 col-xs-offset-3 col-sm-offset-0 col-sm-3 col-md-4">	
							<div class="agent-photos">

								<?php

							
								if($_SESSION['picType']=='0'){
									echo "<img src='images/profdefault.jpg' id='profile-photo' class='img-responsive' alt='Profile Picture' />";
								} 
								else{ 
									echo "<img id='profile-photo' class='img-responsive' 
									src='images/uploads/user".$_SESSION['accountRef'].".".$_SESSION['picType']."' alt='Profile Picture' />";
								}

								?>

								<div class="change-photo">


									  <i class="fa fa-pencil fa-lg"></i>
									<input type="file" name="profilePic" id="photo-file" onchange="document.getElementById('profile-photo').src = window.URL.createObjectURL(this.files[0])"/>

									
								</div>
								
								<input type="text" disabled="disabled" id="agent-file-name" class="main-input" />
							</div>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-8">
							<div class="labelled-input">
								<label for="full-name"><?php

							if(isset($_SESSION['compName'])) echo "Company Name";

							else echo "Full Name";

							 ?></label><input id="full-name" name="full-name" readonly type="text" class="input-full main-input" placeholder="" value="<?php echo $_SESSION['fullName']; ?>"/>
								<div class="clearfix"></div>
							</div>
							<div class="labelled-input">
								<label for="email">Email</label><input id="email" name="email" type="email" readonly class="input-full main-input" placeholder="" value="<?php echo $_SESSION['email']; ?>"/>
								<div class="clearfix"></div>
							</div>
							<div class="labelled-input">
								<label for="accountType">Account Type</label><input id="accountType" readonly name="accountType" type="text" class="input-full main-input" placeholder="" value="<?php echo $_SESSION['accountType']; ?>"/>
								<div class="clearfix"></div>
							</div>
							<?php if(isset($_SESSION['compName'])){ ?>
							<div class="labelled-input">
								<label for="compReg">Company Reg.</label><input id="compReg" readonly name="compReg" type="text" class="input-full main-input" placeholder="" value="<?php echo $_SESSION['compReg']; ?>"/>
								<div class="clearfix"></div>
							</div>
							<?php } ?>

							<div class="labelled-input last">
								<label for="accountRef">Account Ref.</label><input id="accountRef" readonly name="accountRef" type="text" class="input-full main-input" placeholder="" value="<?php echo $_SESSION['accountRef']; ?>"/>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>


					<div class="row margin-top-15">
						
						<div class="col-xs-4">
							<div class="center-button-cont margin-top-15">
								<button type="submit" class="button-primary button-shadow button-full">Save Profile Picture</button>
							</div>
							<div class="col-xs-8"></div>
						</div>
					</div>

				</form>
				<!-- End of profile picture form -->

				<div class="row margin-top-30">
						<br><br>
						<div class="col-xs-12">
							<div class="info-box">
								<p>Your Skills and Experience</p>
								<div class="small-triangle"></div>
								<div class="small-icon"><i class="fa fa-info fa-lg"></i></div>
							</div>
						</div>
					</div>

					<form name="stu-details-form" method="post" action="lib/save-stu_details.php" enctype="multipart/form-data">
							<div class="row">
								<br><br>
							
								<h5>What Are Your Primary Languages?</h5>
								<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 margin-top-15">
									<input type="checkbox" id="check1" name="ccc" class="main-checkbox" />
									<label for="check1"><span></span>PHP</label><br/>
									<input type="checkbox" id="check2" name="ccc" class="main-checkbox" />
									<label for="check2"><span></span>Java</label><br/>
									<input type="checkbox" id="check3" name="ccc" class="main-checkbox" />
									<label for="check3"><span></span>C#</label><br/>
									<input type="checkbox" id="check4" name="ccc" class="main-checkbox" />
									<label for="check4"><span></span>C</label><br/>
									<input type="checkbox" id="check5" name="ccc" class="main-checkbox" />
									<label for="check5"><span></span>Python</label><br/>
									<input type="checkbox" id="check6" name="ccc" class="main-checkbox" />
									<label for="check6"><span></span>Ruby On Rails</label><br/>
									<input type="checkbox" id="check7" name="ccc" class="main-checkbox" />
									<label for="check7"><span></span>JavaScript</label>
									
									
								</div>
								<h5>Frameworks You Have Experience With?</h5>
								<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 margin-top-15">
									<input type="checkbox" id="check8" name="cc" class="main-checkbox" />
									<label for="check8"><span></span>Node.js</label><br/>
									<input type="checkbox" id="check9" name="ccc" class="main-checkbox" />
									<label for="check9"><span></span>Spring</label><br/>
									<input type="checkbox" id="check10" name="ccc" class="main-checkbox" />
									<label for="check10"><span></span>TomCat</label><br/>
									<input type="checkbox" id="check11" name="ccc" class="main-checkbox" />
									<label for="check11"><span></span>ASP.NET</label><br/>
									<input type="checkbox" id="check12" name="ccc" class="main-checkbox" />
									<label for="check12"><span></span>Express.js</label><br/><br/>
									
								</div>
							</div> 
								<br/>
								<h5>About You:</h5>
								<textarea name="stu_description" class="input-full main-input property-textarea" placeholder=""></textarea>
									<div class="center-button-cont margin-top-15">
										<button type="submit" class="button-primary button-shadow button-full">Save Changes</button>
									</div>
								<br/>
					</form>

								<div class="row margin-top-30">
									<br><br>
									<div class="col-xs-12">
										<div class="info-box">
											<p>Past Projects</p>
											<div class="small-triangle"></div>
											<div class="small-icon"><i class="fa fa-info fa-lg"></i></div>
										</div>
									</div>
								</div>
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  
									  <ol class="carousel-indicators">
									    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									    <li data-target="#myCarousel" data-slide-to="1"></li>
									    <li data-target="#myCarousel" data-slide-to="2"></li>
									  </ol>

									  
									  <div class="carousel-inner">
									    <div class="item active">
									      <img src="images/projExample.png" alt="">
									      <div class="carousel-caption">

									        <h3>Project 1<br/></h3>
									        <p style="color:black;">Login System</p>
									      </div>
									    </div>

									    <div class="item">
									      <img src="images/projExample.png" alt="">
									      <div class="carousel-caption">
									        <h3>Project 2</h3>
									        <p style="color:black;">Home Page</p>
									      </div>
									    </div>

									    <div class="item">
									      <img src="images/projExample.png" alt="">
									      <div class="carousel-caption">
									        <h3>Project 3</h3>
									        <p style="color:black;">Messaging System</p>
									      </div>
									    </div>
									  </div>

									  
									  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
									    <span class="glyphicon glyphicon-chevron-left"></span>
									    <span class="sr-only">Previous</span>
									  </a>
									  <a class="right carousel-control" href="#myCarousel" data-slide="next">
									    <span class="glyphicon glyphicon-chevron-right"></span>
									    <span class="sr-only">Next</span>
									  </a>

									  <br/>
								</div>
								
						<div class="row margin-top-30">
							<br><br>
							<div class="col-xs-12">
								<div class="info-box">
									<p>Fill this fields only if you want to change your password</p>
									<div class="small-triangle"></div>
									<div class="small-icon"><i class="fa fa-info fa-lg"></i></div>
								</div>
							</div>
						</div>
				


					<!-- Start of new password form -->
					<form name="new-password-form" method="post" action="lib/new-password.php">

					<div class="row margin-top-15">
						<div class="col-xs-12 col-lg-6">
							<div class="labelled-input-short">
								<label for="first-name">New Password</label>
								<input id="password" name="password" type="password" class="input-full main-input" placeholder="" value=""/>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-xs-12 col-lg-6">
							<div class="labelled-input-short">
								<label for="first-name">Repeat Password</label>
								<input id="repeat-password" name="repeatPassword" type="password" class="input-full main-input" placeholder="" value=""/>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					

					<div class="row margin-top-15">
						<div class="col-xs-4"></div>
						<div class="col-xs-4">
							<div class="center-button-cont margin-top-15">
								<button type="submit" class="button-primary button-shadow button-full">Save New Password</button>
							</div>
						<div class="col-xs-4"></div>
						</div>
					</div>

					</form>
					<!-- End of new password form -->


					<div class="row margin-top-60"></div>
				</div>			
				<div class="col-xs-12 col-md-3 col-md-pull-9">
					<div class="sidebar-left">
						<h3 class="sidebar-title"><?php echo $_SESSION['fullName']; ?><span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						
						<div class="profile-info margin-top-60">
							<div class="profile-info-title negative-margin"><?php echo $_SESSION['fullName']; ?></div>

							<?php 
							if($_SESSION['picType']=='0'){
								echo "<img src='images/profdefault.jpg' id='profile-photo' class='img-responsive' alt='Profile Picture' />";
							} 
							else{ 
								echo "<img id='profile-photo' class='img-responsive' 
								src='images/uploads/user".$_SESSION['accountRef'].".".$_SESSION['picType']."' alt='Profile Picture' />";
							}
							?>


							<div class="profile-info-text pull-left">
								
								<p class="subtitle-margin"><br><br>Account</p>
								<p class="">Reference No.</p>
								<p class=""><?php echo $_SESSION['accountRef']; ?></p>
								<a href="lib/logout.php" class="logout-link margin-top-30"><i class="fa fa-lg fa-sign-out"></i>Logout</a><br><br>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="center-button-cont margin-top-30">
							<a href="my-offers.html" class="button-primary button-shadow button-full">
								<span>My offers</span>
								<div class="button-triangle"></div>
								<div class="button-triangle2"></div>
								<div class="button-icon"><i class="fa fa-th-list"></i></div>
							</a>
						</div>

						<div class="center-button-cont margin-top-30">
							<a href="my-offers.html" class="button-primary button-shadow button-full">
								<span>Dashboard</span>
								<div class="button-triangle"></div>
								<div class="button-triangle2"></div>
								<div class="button-icon"><i class="fa fa-th-list"></i></div>
							</a>
						</div>
						
						<?php if($_SESSION['accountType']=='Company'){ ?>
						<div class="center-button-cont margin-top-15">
							<a href="advertise.php" class="button-alternative button-shadow button-full">
								<span>Advertise Project</span>
								<div class="button-triangle"></div>
								<div class="button-triangle2"></div>
								<div class="button-icon"><i class="jfont fa-lg">&#xe804;</i></div>
							</a>
						</div>
						<?php } ?>
					
					
						<h3 class="sidebar-title margin-top-60">Search Ads<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						
						<div class="sidebar-select-cont">
							<select name="lang1" class="bootstrap-select" title="Language:" multiple>
								<option>Java</option>
								<option>PHP</option>
							</select>
							<select name="framework1" class="bootstrap-select" title="Framework:" multiple data-actions-box="true">
								<option>Node.js</option>
								<option>Spring</option>
								<option>ASP.NET</option>
							</select>
							<select name="city1" class="bootstrap-select" title="City:" multiple data-actions-box="true">
								<option>Dublin</option>
								<option>Limerick</option>
								<option>Cork</option>
								<option>Kildare</option>
								<option>Meath</option>
								
							</select>					
							
						</div>
							
						<div class="sidebar-search-button-cont">
							<a href="#" class="button-primary">
								<span>search</span>
								<div class="button-triangle"></div>
								<div class="button-triangle2"></div>
								<div class="button-icon"><i class="fa fa-search"></i></div>
							</a>
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
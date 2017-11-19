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


if(isset($_SESSION['college'])){
	//student
	$statement = $conn->prepare("SELECT * FROM student WHERE acc_ref=?");
	$statement->bind_param("s", $accountRefPrep);//this must be "s" !
	$accountRefPrep = $_SESSION['accountRef'];
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();
	if($row['pic_set'] == 1) $_SESSION['hasPic'] = true;
	else $_SESSION['hasPic'] = false;
}

else{
	//company
	$statement = $conn->prepare("SELECT * FROM company WHERE acc_ref=?");
	$statement->bind_param("s", $accountRefPrep);//this must be "s" !
	$accountRefPrep = $_SESSION['accountRef'];
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();
	if($row['pic_set'] == 1) $_SESSION['hasPic'] = true;
	else $_SESSION['hasPic'] = false;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>StuDevs | Listings</title>
	<?php include_once 'lib/metalinks.php' ?>
	
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
					<form name="agent-from" method="post" action="lib/edit-profile.php" enctype="multipart/form-data">
					<div class="row margin-top-60">
						<div class="col-xs-6 col-xs-offset-3 col-sm-offset-0 col-sm-3 col-md-4">	
							<div class="agent-photos">

								<?php if($_SESSION['hasPic']){
									echo "<img class='img-responsive' alt='Profile Picture' id='profile-photo' 
									src='images/uploads/user".$_SESSION['accountRef'].".png'/>";
									} 
									else{ 
										echo "<img src='images/profdefault.jpg' alt='Profile Picture' id='profile-photo' class='img-responsive' />";
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
					
					<div class="row margin-top-30">
						<div class="col-xs-12">
							<div class="info-box">
								<p>Fill this fields only if you want to change your password</p>
								<div class="small-triangle"></div>
								<div class="small-icon"><i class="fa fa-info fa-lg"></i></div>
							</div>
						</div>
					</div>
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
						<div class="col-xs-3"></div>
						<div class="col-xs-6">
							<div class="center-button-cont center-button-cont-border">
								
									<button type="submit" id ="saveProfileBtn" class="button-primary button-shadow button-full">Save Profile Changes</button>
									
							</div>
							<div class="col-xs-3"></div>
						</div>
					</div>


					</form>


					<div class="row margin-top-60"></div>
				</div>			
				<div class="col-xs-12 col-md-3 col-md-pull-9">
					<div class="sidebar-left">
						<h3 class="sidebar-title"><?php echo $_SESSION['fullName']; ?><span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						
						<div class="profile-info margin-top-60">
							<div class="profile-info-title negative-margin"><?php echo $_SESSION['fullName']; ?></div>
							<img src="images/profdefault.jpg" alt="" class="pull-left" />
							<div class="profile-info-text pull-left">
								
								<p class="subtitle-margin">Account</p>
								<p class="">Reference No.</p>
								<p class=""><?php echo $_SESSION['accountRef']; ?></p>
								<a href="lib/logout.php" class="logout-link margin-top-30"><i class="fa fa-lg fa-sign-out"></i>Logout</a>
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
						<div class="center-button-cont margin-top-15">
							<a href="my-profile.html" class="button-primary button-shadow button-full">
								<span>My profile</span>
								<div class="button-triangle"></div>
								<div class="button-triangle2"></div>
								<div class="button-icon"><i class="fa fa-user"></i></div>
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
					
					
						<h3 class="sidebar-title margin-top-60">Your offers<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						
						<div class="sidebar-select-cont">
							<select name="transaction1" class="bootstrap-select" title="Transaction:" multiple>
								<option>For sale</option>
								<option>For rent</option>
							</select>
							<select name="conuntry1" class="bootstrap-select" title="Country:" multiple data-actions-box="true">
								<option>United States</option>
								<option>Canada</option>
								<option>Mexico</option>
							</select>
							<select name="city1" class="bootstrap-select" title="City:" multiple data-actions-box="true">
								<option>New York</option>
								<option>Los Angeles</option>
								<option>Chicago</option>
								<option>Houston</option>
								<option>Philadelphia</option>
								<option>Phoenix</option>
								<option>Washington</option>
								<option>Salt Lake Cty</option>
								<option>Detroit</option>
								<option>Boston</option>
							</select>					
							<select name="location1" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
								<option>Some location 1</option>
								<option>Some location 2</option>
								<option>Some location 3</option>
								<option>Some location 4</option>
							</select>
						</div>
							<div class="adv-search-range-cont">	
								<label for="slider-range-price-sidebar-value" class="adv-search-label">Price:</label>
								<span>$</span>
								<input type="text" id="slider-range-price-sidebar-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-price-sidebar" data-min="0" data-max="300000" class="slider-range"></div>
							</div>
							<div class="adv-search-range-cont">	
								<label for="slider-range-area-sidebar-value" class="adv-search-label">Area:</label>
								<span>m<sup>2</sup></span>
								<input type="text" id="slider-range-area-sidebar-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-area-sidebar" data-min="0" data-max="180" class="slider-range"></div>
							</div>
							<div class="adv-search-range-cont">	
								<label for="slider-range-bedrooms-sidebar-value" class="adv-search-label">Bedrooms:</label>
								<input type="text" id="slider-range-bedrooms-sidebar-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-bedrooms-sidebar" data-min="1" data-max="10" class="slider-range"></div>
							</div>
							<div class="adv-search-range-cont">	
								<label for="slider-range-bathrooms-sidebar-value" class="adv-search-label">Bathrooms:</label>
								<input type="text" id="slider-range-bathrooms-sidebar-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-bathrooms-sidebar" data-min="1" data-max="4" class="slider-range"></div>
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
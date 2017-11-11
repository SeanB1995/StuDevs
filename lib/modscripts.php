<?php
//modscripts stands for modals and scripts

include_once 'header.php';
?>


<!-- Move to top button -->

<div class="move-top">
	<div class="big-triangle-second-color"></div>
	<div class="big-icon-second-color"><i class="jfont fa-lg">&#xe803;</i></div>
</div>	

<!-- Login modal LOGIN FORM LOG IN FORM-->
	<div class="modal fade apartment-modal" id="login-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title">
						<h1>Log In<span class="special-color">.</span></h1>
						<div class="short-title-separator"></div>
					</div>

					<form method="post" action ="lib/login.php">
					<input id="logemail" name="loginEmail" type="email" required="" class="input-full main-input" placeholder="Email" 
					value="<?php echo $_SESSION['loginEmail']; ?>"/>
					<input id="logpword" name="loginPassword" type="password" required="" class="input-full main-input" placeholder="Password"/>
					
					<button type="submit" id="loginBtn" class="button-primary button-shadow button-full">Log In</button>
						
						
					</form>
					<a href="#" class="forgot-link"><center><p> </p>Forgot your password?</center></a>
				


					<!--

					<p class="login-or">OR</p>
					<a href="#" class="facebook-button">
						<i class="fa fa-facebook"></i>
						<span>Login with Facebook</span>
					</a>
					<a href="#" class="google-button margin-top-15">
						<i class="fa fa-google-plus"></i>
						<span>Login with Google</span>
					</a>

					-->


					<p class="modal-bottom">Don't have an account? <a href="#register-modal" class="register-link">SIGN UP</a>.  It's free</p>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<!-- Register modal    SIGN UP FORM SIGNUP FORM-->
	<div class="modal fade apartment-modal" id="register-modal">

		<div class="modal-dialog">

			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

					<div class="modal-title">
	
	
						<h1><?php 
						if(strpos($url, 'sign_up_error=empty_fields')!==false){
							echo "Empty Fields";
							$errorDetails = 'Please fill in all fields';
						}

						else if(strpos($url, 'sign_up_error=unmatching_passwords')!==false){
							echo "Unmatching Passwords";
							$errorDetails = 'Please ensure your passwords match.';
						}

						
						else if(strpos($url, 'sign_up_error=invalid_first_name_length')!==false){
							echo "Invalid Name";
							$errorDetails = 'Names must be between 2 and 50 characters in long.';
						}

						else if(strpos($url, 'sign_up_error=invalid_first_name_characters')!==false){
							echo "Invalid Name";
							$errorDetails = 'At studevs we require your real name. Special characters such as \'%\' or \'€\' are not allowed.';
						}

						else if(strpos($url, 'sign_up_error=invalid_last_name_length')!==false){
							echo "Invalid Name";
							$errorDetails = 'Names must be between 2 and 50 characters long.';
						}

						else if(strpos($url, 'sign_up_error=invalid_last_name_characters')!==false){
							echo "Invalid Name";
							$errorDetails = 'At studevs we require your real name. Special characters such as \'%\' or \'€\' are not allowed.';
						}

						else if(strpos($url, 'sign_up_error=password_has_name')!==false){
							echo "Invalid Password";
							$errorDetails = 'You can\'t use your name in your password.';
						}

						else if(strpos($url, 'sign_up_error=password_has_email')!==false){
							echo "Invalid Password";
							$errorDetails = 'You can\'t use your email in your password.';
						}

						

						else if(strpos($url, 'sign_up_error=invalid_email')!==false){
							echo "Invalid Email";
							$errorDetails = 'Please enter your real email address.';
						}

						else if(strpos($url, 'sign_up_error=email_already_in_use')!==false){
							echo "Invalid Email";
							$errorDetails = 'The email address you entered is already in use. Please enter another email address.';
						}
						
						
						else if(strpos($url, 'sign_up_error=student_email_required')!==false){
							echo "Invalid Email";
							$errorDetails = 'Students must sign up with an email address from an Irish college/university.';
						}
						

						else if(strpos($url, 'sign_up_error=password_too_short')!==false){
							echo "Password too short";
							$errorDetails = 'Your password must be at least 6 characters long. Please try another.';
						}

						else if(strpos($url, 'sign_up_error=password_too_long')!==false){
							echo "Password too long";
							$errorDetails = 'Your password must be less than 9,000 characters long. Please try another.';
						}

						else if(strpos($url, 'sign_up_error=email_too_long')!==false){
							echo "Email too long";
							$errorDetails = 'Please use an email address less than 250 characters long.';
						}



						
						else{
							echo "Sign Up";

						}


						?>
						<span class="special-color">.</span></h1>
						<div class="short-title-separator"></div><p> </p>
						<p class = "error-to-screen"><?php echo $errorDetails; ?></p>
						<!--detailed error goes here : EG: password must contain number-->
					</div>
					<form method="post" action ="lib/signup.php">
					<input id="signfirst" name="firstName" type="text" required="" class="input-full main-input" placeholder="First Name" 
					value="<?php echo $_SESSION['firstName']; ?>"/>
					<input id="signlast" name="lastName" type="text" required="" class="input-full main-input" placeholder="Last name" 
					value="<?php echo $_SESSION['lastName']; ?>"/>
					<input id="signemail" name="email" type="email" required="" class="input-full main-input" placeholder="Email" 
					value="<?php echo $_SESSION['email']; ?>"/>
					<input id="signpword" name="password" type="password" required="" class="input-full main-input" placeholder="Password" 
					value="<?php echo $_SESSION['password']; ?>"/>
					<input id="signrepeatpword" name="repeatPassword" type="password" required="" class="input-full main-input" placeholder="Re-Enter Password" 
					value="<?php echo $_SESSION['repeatPassword']; ?>"/>
					<select id="accountType" name="accountType" class="input-full main-input" placeholder="Account Type" 
					value="<?php echo $_SESSION['accountType']; ?>">
						<option value="Student">Student</option>
						<option value="Company">Company</option>
					</select>


					<!--
					<select class="input-full main-input" id="signdescription" name="description" class="input-full main-input" placeholder="What describes you best?" 
					value="<?php echo $_SESSION['description']; ?>">

						<option value = "buy">I want to buy</option>
						<option value = "rent">I want to rent</option>
						<option value = "seller">I am a seller</option>
						<option value = "landlord">I am a landlord</option>
						<option value = "other">Other</option>

					</select>
					-->

					
					<button type="submit" id ="signupBtn" class="button-primary button-shadow button-full">Sign up for Free</button>
						
						
					</form>
					
					<div class="clearfix"></div>


					<!--

					<p class="login-or">OR</p>
					<a href="#" class="facebook-button">
						<i class="fa fa-facebook"></i>
						<span>Sign up with Facebook</span>
					</a>
					<a href="#" class="google-button margin-top-15">
						<i class="fa fa-google-plus"></i>
						<span>Sign up with Google</span>
					</a>

					-->


					<p class="modal-bottom">Already registered? <a href="#" class="login-link">LOGIN</a></p>
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
					<p class="negative-margin forgot-info">Enter your account's email address.<br/>We will send you a link to reset your password.</p>
					<input name="login" type="email" class="input-full main-input" placeholder="Your email" />
					<a href="#" class="button-primary button-shadow button-full">
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
    <script type="text/javascript" src="../js/jQuery/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jQuery/jquery-ui.min.js"></script>
	
<!-- Bootstrap-->
    <script type="text/javascript" src="../bootstrap/bootstrap.min.js"></script>

<!-- Google Maps -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCOjwfj8tBWla6ko5tuKXhKifvQVxLnaZc&amp;sensor=false&amp;libraries=places"></script>
	


<!-- plugins script -->
	<script type="text/javascript" src="../js/plugins.js"></script>

<!-- template scripts -->
	<script type="text/javascript" src="../mail/validate.js"></script>
    <script type="text/javascript" src="../js/apartment.js"></script>
    <script type="text/javascript" src="../js/mainfunctions.js"></script>
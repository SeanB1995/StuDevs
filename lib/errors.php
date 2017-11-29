<?php  

//for empty fields write: please fill in all fields
//BE VERY CAREFUL BECAUSE STRPOS IS CHECKING IF IT CONTAINS, NOT MATCHES

//strpos($url, 'sign_up_today')  :  This means : Does the URL contain 'sign_up_today'.

include_once 'config.php';

if(strpos($url, 'student_sign_up_error=')!==false){
	?>
	<script>
	showstumod();
	</script>
	<?php
}

if(strpos($url, 'company_sign_up_error=')!==false){
	?>
	<script>
	showcompmod();
	</script>
	<?php
}

if(strpos($url, 'log_in_error=')!==false){
	?>
	<script>
	showlogmod();
	</script>
	<?php
}





/*





if(strpos($url, 'sign_up_error=unmatching_passwords')!==false){
	?>
	<script>
	focusSignupPassword();
	</script>
	<?php
}

if(strpos($url, 'sign_up_error=empty_fields')!==false){
	?>
	<script>
	focusSignupFirstName();
	</script>
	<?php
}





if(strpos($url, 'sign_up_error=invalid_first')!==false){
	?>
	<script>
	focusSignupFirstName();
	</script>
	<?php
}


if(strpos($url, 'sign_up_error=invalid_last')!==false){
	?>
	<script>
	focusSignupLastName();
	</script>
	<?php
}






if(strpos($url, 'sign_up_error=invalid_email')!==false){
	?>
	<script>
	focusSignupEmail();
	</script>
	<?php
}


if(strpos($url, 'sign_up_error=email_already_in_use')!==false){
	?>
	<script>
	focusSignupEmail();
	</script>
	<?php
}


if(strpos($url, 'sign_up_error=student_email_required')!==false){
	?>
	<script>
	focusSignupEmail();
	</script>
	<?php
}


if(strpos($url, 'sign_up_error=password')!==false){
	?>
	<script>
	focusSignupPassword();
	</script>
	<?php
}




if(strpos($url, 'log_in_error=invalid_email')!==false){
	?>
	<script>
	focusLoginEmail();
	</script>
	<?php
}

*/


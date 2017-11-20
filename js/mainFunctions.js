//main js functions for all pages


function showcompmod(){
	$('#company-register-modal').modal('show');
	$('#student-register-modal').modal('hide');
	$('#login-modal').modal('hide');
	$('#forgot-modal').modal('hide');
}

function showstumod(){
	$('#student-register-modal').modal('show');
	$('#company-register-modal').modal('hide');
	$('#login-modal').modal('hide');
	$('#forgot-modal').modal('hide');
}




function showlogmod(){
	$('#login-modal').modal('show');
	$('#student-register-modal').modal('hide');
	$('#company-register-modal').modal('hide');
	$('#forgot-modal').modal('hide');
}


function showfgmod(){
	$('#forgot-modal').modal('show');
	$('#student-register-modal').modal('hide');
	$('#login-modal').modal('hide');
	$('#company-register-modal').modal('hide');
}




function focusSignupFirstName(){
    $('#signfirst').focus();
}

function focusSignupLastName(){
    $('#signlast').focus();
}

function focusSignupEmail(){
    $('#signemail').focus();
}


function focusSignupPassword(){
    $('#signpword').focus();
}


function focusLoginEmail(){
    $('#logemail').focus();
}

function focusLoginPassword(){
    $('#logpword').focus();
}

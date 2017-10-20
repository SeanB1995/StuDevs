//main js functions for all pages



function showregmod(){
	$('#register-modal').modal('show');
}
function hideregmod(){
	$('#register-modal').modal('hide');
}

function showlogmod(){
	$('#login-modal').modal('show');
}
function hidelogmod(){
	$('#login-modal').modal('hide');
}

function showfgmod(){
	$('#forgot-modal').modal('show');
}
function hidefgmod(){
	$('#forgot-modal').modal('hide');
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
<?php

//These functions are accessible by all files that include header.php.

function setCollege($email){
	if(strpos($email, '@student.ncirl.ie')!==false) return 'National College of Ireland';
	elseif(strpos($email, '@tcd.ie')!==false) return 'Trinity College Dublin';
	elseif(strpos($email, '@mail.dcu.ie')!==false) return 'Dublin City University';
	elseif(strpos($email, '@mail.wit.ie')!==false) return 'Waterford Institute of Technology';
	elseif(strpos($email, '@ucdconnect.ie')!==false) return 'University College Dublin';
	else return 'None';
}


function isValidImage($image){
	$name = $image['name'];
	$tempName = $image['tmp_name'];
	$size = $image['size'];
	$error = $image['error'];
	$type = $image['type'];

	$ext = explode('.', $name);
	$realExt = strtolower(end($ext));

	$valid = array('jpg', 'jpeg', 'png');

	if (!in_array($realExt, $valid)) return false;

	elseif ($error !== 0) return false;

	//setting 10MB as max
	elseif ($size > 10000000) return false;

	else return true;
}
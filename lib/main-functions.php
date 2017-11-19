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


function isValidImage($file){
	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];

	$fileExten = explode('.', $fileName);
	$fileRealExten = strtolower(end($fileExten));

	$allowed = array('jpg', 'jpeg', 'png');

	if (!in_array($fileRealExten, $allowed)) return false;

	elseif ($fileError !== 0) return false;

	//setting 10MB as max
	elseif ($fileSize > 10000000) return false;

	else return true;
}
<?php


function hashPassword($password){

	$byteArray = unpack('C*', $password);

	$password = 91749;

	for ($i=0; $i < sizeof($byteArray); $i++)
		$password .= $byteArray[$i];


	$password /= 393823.845638;


	$password = (string)$password;

	


	//change all numbers, E, minus, plus and dot.
	$hashedPassword="";
	for ($i=0; $i < strlen($password); $i++) { 
		if($password[i]=='E') $hashedPassword .= "F";
	}


	return $hashedPassword;
}
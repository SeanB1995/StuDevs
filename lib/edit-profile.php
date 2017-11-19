<?php

include_once 'header.php';



if(!isset($_POST['full-name'])){
	header("Location: ../index.php?go_to_profile_page_to_edit_profile");
	exit();
}

if((!empty($password) && empty($repeatPassword)) || ((empty($password) && !empty($repeatPassword))){
	//if only 1 password field is filled

	header("Location: ../profile.php?edit_profile_error=fill_both_password_fields");
	exit();
}


$profilePic = $_FILES['profilePic'];

//this function is in main-functions.php
if(!isValidImage($profilePic){
	header("Location: ../profile.php?edit_profile_error=invalid_image");
	exit();
}




if(!empty($password) && !empty($repeatPassword)){
	/*** changing password and image ***/

	if(strlen($password) < 6){
		header("Location: ../profile.php?edit_profile_error=password_too_short");
		exit();
	}

	if(strlen($password) > 8999){
		header("Location: ../profile.php?edit_profile_error=password_too_long");
		exit();
	}

	$password = password_hash($password, PASSWORD_DEFAULT);



	//if they're student
	if(isset($_SESSION['college'])) $statement = $conn->prepare("UPDATE student SET profile_pic=?, password=? WHERE acc_ref=?");

	//else they're company
	else $statement = $conn->prepare("UPDATE company SET profile_pic=?, password=? WHERE acc_ref=?");

	$statement->bind_param("sss", $profPicP, $passwordP, $accountRefP);

	$profPicP = $profilePic;
	$passwordP = $password;
	$accountRefP = $_SESSION['accountRef'];

	$statement->execute();

	$result = $conn->query($statement);
	header("Location: ../profile.php?profile_updated_successfully");
	exit();

}


/*** if script reaches here, just changing image ***/

//if they're student
if(isset($_SESSION['college'])) $statement = $conn->prepare("UPDATE student SET profile_pic=? WHERE acc_ref=?");

//else they're company
else $statement = $conn->prepare("UPDATE company SET profile_pic=? WHERE acc_ref=?");

$statement->bind_param("ss", $profPicP, $accountRefP);

$profPicP = $profilePic;
$accountRefP = $_SESSION['accountRef'];

$statement->execute();

$result = $conn->query($statement);
header("Location: ../profile.php?profile_updated_successfully");
exit();


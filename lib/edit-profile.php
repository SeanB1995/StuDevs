<?php

include_once 'header.php';


$file = $_FILES['profilePic'];

function uploadProfilePic($profilePic){
	$fileName = $profilePic['name'];
	$fileTmpName = $profilePic['tmp_name'];
	$fileSize = $profilePic['size'];
	$fileError = $profilePic['error'];
	$fileType = $profilePic['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	$fileNameNew = "user".$_SESSION['accountRef'].".".$fileActualExt;
	$fileDestination = '../images/uploads/'.$fileNameNew;
	move_uploaded_file($fileTmpName, $fileDestination);
	
}

$set1 = 1;

if(!isset($_POST['full-name'])){
	header("Location: ../index.php?go_to_profile_page_to_edit_profile");
	exit();
}

if((!empty($password) && empty($repeatPassword)) || (empty($password) && !empty($repeatPassword))){
	//if only 1 password field is filled

	header("Location: ../profile.php?edit_profile_error=fill_both_password_fields");
	exit();
}


//this function is in main-functions.php
if(!isValidImage($file)){
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

	uploadProfilePic($file);



	//if they're student
	if(isset($_SESSION['college'])) $statement = $conn->prepare("UPDATE student SET pic_set=?, password=? WHERE acc_ref=?");

	//else they're company
	else $statement = $conn->prepare("UPDATE company SET pic_set=?, password=? WHERE acc_ref=?");

	$statement->bind_param("sss", $picSetP, $passwordP, $accountRefP);

	$picSetP = $set1;
	$passwordP = $password;
	$accountRefP = $_SESSION['accountRef'];

	$statement->execute();

	$result = $conn->query($statement);
	header("Location: ../profile.php?profile_updated_successfully");
	exit();

}


/*** if script reaches here, just changing image ***/


uploadProfilePic($file);


//if they're student
if(isset($_SESSION['college'])) $statement = $conn->prepare("UPDATE student SET pic_set=? WHERE acc_ref=?");

//else they're company
else $statement = $conn->prepare("UPDATE company SET pic_set=? WHERE acc_ref=?");

$statement->bind_param("ss", $picSetP, $accountRefP);

$picSetP = $set1;
$accountRefP = $_SESSION['accountRef'];

$statement->execute();

$result = $conn->query($statement);
header("Location: ../profile.php?profile_updated_successfully");
exit();





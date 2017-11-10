<?php

//dont forget to include last login

include_once 'header.php';


$email = strtolower($_POST['loginEmail']);
$password = $_POST['loginPassword'];


/*
include 'Password.php';
$passObj = new Password();
$password = $passObj->hashPassword($password);
*/


$_SESSION['loginEmail'] = $email;









//prepared statement
$statement = $conn->prepare("SELECT * FROM student WHERE email=?");
$statement->bind_param("s", $emailPrepared);//this must be "s" !
$emailPrepared = $email;
//end of prepared statement

$statement->execute();

$result = $statement->get_result();
$row = $result->fetch_assoc();
//$hashedPassword = $row['password'];

$studentEmailCheck = $result->num_rows;



//prepared statement
$statement = $conn->prepare("SELECT * FROM business WHERE email=?");
$statement->bind_param("s", $emailPrepared);//this must be "s" !
$emailPrepared = $email;
//end of prepared statement

$statement->execute();

$result = $statement->get_result();
$row = $result->fetch_assoc();
//$hashedPassword = $row['password'];

$businessEmailCheck = $result->num_rows;

if($studentEmailCheck<1 && $businessEmailCheck<1){
	unset($_SESSION['loginEmail']);
	unset($_SESSION['loginPassword']);
	header("Location: ../index.php?log_in_error=invalid_email");
	exit();
}






//determing whether student or business and checking password matches database password
function validType($password){
	$statement = $conn->prepare("SELECT * FROM student WHERE email=?");
	$statement->bind_param("s", $emailPrepared);//this must be "s" !
	$emailPrepared = $email;
	//end of prepared statement
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();

	//if details are fully found in student database return "student"
	if(password_verify($password, $row['password'])) return "student";

	$statement = $conn->prepare("SELECT * FROM business WHERE email=?");
	$statement->bind_param("s", $emailPrepared);//this must be "s" !
	$emailPrepared = $email;
	//end of prepared statement
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();

	//if details are fully found in business database return "business"
	if(password_verify($password, $row['password'])) return "business";

	//otherwise return "none"
	return "none";
}



if($validType($password)==='none'){
	unset($_SESSION['loginPassword']);
	header("Location: ../index.php?log_in_error=invalid_password");
	exit();
}



if($validType==='student'){
	$statement = $conn->prepare("SELECT * FROM student WHERE email=?");
	$statement->bind_param("s", $emailPrepared);//this must be "s" !
	$emailPrepared = $email;
	//end of prepared statement
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();

	$_SESSION['firstName'] = $row['first'];
	$_SESSION['lastName'] = $row['last'];
	$_SESSION['fullName'] = $row['first'] . " " . $row['last'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['accountRef'] = $row['acc_ref'];
}



if($validType==='business'){
	$statement = $conn->prepare("SELECT * FROM business WHERE email=?");
	$statement->bind_param("s", $emailPrepared);//this must be "s" !
	$emailPrepared = $email;
	//end of prepared statement
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();

	$_SESSION['firstName'] = $row['first'];
	$_SESSION['lastName'] = $row['last'];
	$_SESSION['fullName'] = $row['first'] . " " . $row['last'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['accountRef'] = $row['acc_ref'];
}


//use an SQL update statement for last login datetime


$_SESSION['loggedIn'] = true;

header("Location: ../profile.php?log_in_successful");
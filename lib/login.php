<?php

//dont forget to include last login

include_once 'header.php';


$email = strtolower($_POST['loginEmail']);
$password = $_POST['loginPassword'];




$_SESSION['loginEmail'] = $email;



$loginDate = date('Y-m-d H:i:s');





//prepared statement
$statement = $conn->prepare("SELECT * FROM student WHERE email=?");
$statement->bind_param("s", $emailPrepared);//this must be "s" !
$emailPrepared = $email;
//end of prepared statement

$statement->execute();

$result = $statement->get_result();
$row = $result->fetch_assoc();

$studentEmailCheck = $result->num_rows;



//prepared statement
$statement = $conn->prepare("SELECT * FROM company WHERE email=?");
$statement->bind_param("s", $emailPrepared);//this must be "s" !
$emailPrepared = $email;
//end of prepared statement

$statement->execute();

$result = $statement->get_result();
$row = $result->fetch_assoc();

$companyEmailCheck = $result->num_rows;

if(($studentEmailCheck<1) && ($companyEmailCheck<1)){
	unset($_SESSION['loginEmail']);
	unset($_SESSION['loginPassword']);
	header("Location: ../index.php?log_in_error=invalid_email");
	exit();
}



$validType = 'none';


//determing whether student or company and checking password matches database password

$statement = $conn->prepare("SELECT * FROM student WHERE email=?");
$statement->bind_param("s", $emailPrepared);//this must be "s" !
$emailPrepared = $email;
//end of prepared statement
$statement->execute();
$result = $statement->get_result();
$row = $result->fetch_assoc();


if(password_verify($password, $row['password'])) $validType = 'student';

$statement = $conn->prepare("SELECT * FROM company WHERE email=?");
$statement->bind_param("s", $emailPrepared);//this must be "s" !
$emailPrepared = $email;
//end of prepared statement
$statement->execute();
$result = $statement->get_result();
$row = $result->fetch_assoc();


if(password_verify($password, $row['password'])) $validType = 'company';



if($validType=='none'){
	unset($_SESSION['loginPassword']);
	header("Location: ../index.php?log_in_error=invalid_password");
	exit();
}




if($validType=='student'){
	$statement = $conn->prepare("SELECT * FROM student WHERE email=?");
	$statement->bind_param("s", $emailPrepared);//this must be "s" !
	$emailPrepared = $email;
	//end of prepared statement
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();

	$_SESSION['studentId'] = $row['student_id'];
	$_SESSION['firstName'] = $row['first'];
	$_SESSION['lastName'] = $row['last'];
	$_SESSION['fullName'] = $row['first'] . " " . $row['last'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['accountRef'] = $row['acc_ref'];
	$_SESSION['dateJoined'] = $row['date_joined'];
	$_SESSION['college'] = $row['college'];
	$_SESSION['accountType'] = 'Student';
	$_SESSION['student'] = true;
	$_SESSION['company'] = false;
}



if($validType=='company'){
	$statement = $conn->prepare("SELECT * FROM company WHERE email=?");
	$statement->bind_param("s", $emailPrepared);//this must be "s" !
	$emailPrepared = $email;
	//end of prepared statement
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();

	$_SESSION['compId'] = $row['company_id'];
	$_SESSION['compName'] = $row['company_name'];
	$_SESSION['fullName'] = $row['company_name'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['accountRef'] = $row['acc_ref'];
	$_SESSION['compReg'] = $row['company_reg'];
	$_SESSION['dateJoined'] = $row['date_joined'];
	$_SESSION['accountType'] = 'Company';
	$_SESSION['company'] = true;
	$_SESSION['student'] = false;
}


//use an SQL update statement for last login datetime


$_SESSION['loggedIn'] = true;


$statement = $conn->prepare("INSERT INTO session (acc_ref, login_date) VALUES (?, ?)");



$statement->bind_param("ss", $accountRefP, $loginDateP);

$accountRefP = $_SESSION['accountRef'];
$loginDateP= $loginDate;

$statement->execute();

$result = $conn->query($statement);



$_SESSION['loginDate'] = $loginDate;

header("Location: ../profile.php?log_in_successful");
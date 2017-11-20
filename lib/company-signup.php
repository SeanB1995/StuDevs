<?php

include_once 'header.php';



include_once 'generate-refno.php';




$dateJoined = date('Y-m-d H:i:s');

$compName = $_POST['compName'];

$email = $_POST['email'];

$compReg = $_POST['compReg'];

$password = $_POST['password'];

$repeatPassword = $_POST['repeatPassword'];

$accountType = 'Company';


$_SESSION['compName'] = $compName;
$_SESSION['email'] = $email;
$_SESSION['compReg'] = $compReg;
$_SESSION['password'] = $password;
$_SESSION['repeatPassword'] = $repeatPassword;
$_SESSION['accountType'] = $accountType;

$_SESSION['fullName'] = $compName;



if (empty($compName)||empty($compReg)||empty($password)||empty($email)||empty($repeatPassword)){
	header("Location: ../index.php?company_sign_up_error=empty_fields");
	exit();
}




if($password !== $repeatPassword){
	unset($_SESSION['password']);
	unset($_SESSION['repeatPassword']);
	header("Location: ../index.php?company_sign_up_error=unmatching_passwords");
	exit();
}



//hhhhhhhhhhhhhhhhhh
if((strlen($compName)<2)||(strlen($compName)>50)){
	unset($_SESSION['firstName']);
	header("Location: ../index.php?company_sign_up_error=invalid_company_name_length");
	exit();
}

//hhhhhhhhhhhhhhhhhhhhhhhhhhh
if (!preg_match("/^(?:[\s,.'-]*[a-zA-Z\pL][\s,.'-]*)+$/u", $compName)){
	unset($_SESSION['firstName']);
	header("Location: ../index.php?company_sign_up_error=invalid_company_name_characters");
	exit();
}





include_once 'email-validation.php';



if(strlen($password) < 6){
	unset($_SESSION['password']);
	unset($_SESSION['repeatPassword']);
	header("Location: ../index.php?company_sign_up_error=password_too_short");
	exit();
}

if(strlen($password) > 8999){
	unset($_SESSION['password']);
	unset($_SESSION['repeatPassword']);
	header("Location: ../index.php?company_sign_up_error=password_too_long");
	exit();
}








/************ IF IT PASSES ALL ERRORS ABOVE, THEN PREPARE STATEMENT AND INSERT STATEMENT*****************/
trim($firstName);
trim($lastName);
trim($email);

//one last check for empty fields because major problems will occur if empty fields are inserted.
if (empty($password)||empty($compName)||empty($compReg)||empty($email)){
	header("Location: ../index.php?company_sign_up_error=empty_fields");
	exit();
}
if(empty($accountRef)||empty($dateJoined)||empty($accountType)){
	header("Location: ../index.php?company_sign_up_error=internal_sign_up_error");
	exit();
}



$password = password_hash($password, PASSWORD_DEFAULT);


$statement = $conn->prepare("INSERT INTO company (password, company_name, company_reg, email, acc_ref, date_joined) VALUES (?, ?, ?, ?, ?, ?)");



$statement->bind_param("ssssss", $passwordPrepared, $compNamePrepared, $compRegPrepared, $emailPrepared, $accountRefPrepared, $dateJoinedPrepared);

$passwordPrepared = $password;
$compNamePrepared = $compName;
$compRegPrepared = $compReg;
$emailPrepared = $email;
$accountRefPrepared = $accountRef;
$dateJoinedPrepared = $dateJoined;

$statement->execute();

$result = $conn->query($statement);

$_SESSION['loggedIn'] = true;

//use an SQL update statement for last login datetime


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







$statement = $conn->prepare("INSERT INTO session (acc_ref, login_date) VALUES (?, ?)");



$statement->bind_param("ss", $accountRefP, $dateJoinedP);

$accountRefP = $accountRef;
$dateJoinedP= $dateJoined;

$statement->execute();

$result = $conn->query($statement);


$_SESSION['loginDate'] = $dateJoined;

header("Location: ../profile.php?sign_up_successful");
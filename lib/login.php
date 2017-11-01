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

$emailCheck = $result->num_rows;

if($emailCheck<1){
	unset($_SESSION['loginEmail']);
	unset($_SESSION['loginPassword']);
	header("Location: index.php?log_in_error=invalid_email");
	exit();
}


//prepared statement
$statement = $conn->prepare("SELECT * FROM business WHERE email=?");
$statement->bind_param("s", $emailPrepared);//this must be "s" !
$emailPrepared = $email;
//end of prepared statement

$statement->execute();

$result = $statement->get_result();
$row = $result->fetch_assoc();
//$hashedPassword = $row['password'];

$emailCheck = $result->num_rows;

if($emailCheck<1){
	unset($_SESSION['loginEmail']);
	unset($_SESSION['loginPassword']);
	header("Location: index.php?log_in_error=invalid_email");
	exit();
}









//prepared statement
$statement = $conn->prepare("SELECT * FROM student WHERE email=?");
$statement->bind_param("s", $emailPrepared);//this must be "s" !
$emailPrepared = $email;
//end of prepared statement

$statement->execute();

$result = $statement->get_result();
$row = $result->fetch_assoc();
//$hashedPassword = $row['password'];



if(!password_verify($password, $row['password'])){
	unset($_SESSION['loginPassword']);
	header("Location: index.php?log_in_error=invalid_password");
	exit();
}


//prepared statement
$statement = $conn->prepare("SELECT * FROM business WHERE email=?");
$statement->bind_param("s", $emailPrepared);//this must be "s" !
$emailPrepared = $email;
//end of prepared statement

$statement->execute();

$result = $statement->get_result();
$row = $result->fetch_assoc();
//$hashedPassword = $row['password'];



if(!password_verify($password, $row['password'])){
	unset($_SESSION['loginPassword']);
	header("Location: index.php?log_in_error=invalid_password");
	exit();
}










$_SESSION['loggedIn'] = true;
/*
$_SESSION['firstName'] = $row['first'];
$_SESSION['lastName'] = $row['last'];
$_SESSION['fullName'] = $row['first'] . " " . $row['last'];
$_SESSION['email'] = $row['email'];
$_SESSION['accountRef'] = $row['acc_ref'];
$_SESSION['accountID'] = $row['account_id'];
*/

//$lastLogin = date('Y-m-d H:i:s');
//$_SESSION['lastLogin'] = $lastLogin;

//$statement = $conn->prepare("INSERT INTO accounts_main (last_login)
//VALUES (?)");

//$statement->bind_param("s", $lastLoginPrepared);

//$lastLoginPrepared = $lastLogin;

//$statement->execute();

//$result = $conn->query($statement);

header("Location: prof.php?log_in_successful");
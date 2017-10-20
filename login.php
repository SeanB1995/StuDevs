<?php

//dont forget to include last login

include_once 'header.php';


$email = strtolower($_POST['loginEmail']);
$password = $_POST['loginPassword'];

//use val mail function to stop injection
//also do real escape
//but no real escape for password coz some might have ' in them.
$_SESSION['loginEmail'] = $email;


//prepared statement
$statement = $conn->prepare("SELECT * FROM accounts_main WHERE email=?");
$statement->bind_param("s", $emailPrepared);//this must be "s" !
$emailPrepared = $email;
//end of prepared statement

$statement->execute();

$result = $statement->get_result();
$row = $result->fetch_assoc();
$hashedPassword = $row['password'];

$emailCheck = $result->num_rows;

if($emailCheck<1){
	$_SESSION['errorCount']++;
	unset($_SESSION['loginEmail']);
	header("Location: index.php?log_in_error=invalid_email");
	exit();
}

if(password_verify($password, $hashedPassword)==0){
	$_SESSION['errorCount']++;
	header("Location: index.php?log_in_error=invalid_password");
	exit();
}


$_SESSION['loggedIn'] = true;
$_SESSION['firstName'] = $row['first_name'];
$_SESSION['lastName'] = $row['last_name'];
$_SESSION['fullName'] = $row['first_name'] . " " . $row['last_name'];
$_SESSION['email'] = $row['email'];
$_SESSION['accountRef'] = $row['account_ref'];
$_SESSION['accountID'] = $row['account_id'];

$lastLogin = date('Y-m-d H:i:s');
$_SESSION['lastLogin'] = $lastLogin;

$statement = $conn->prepare("INSERT INTO accounts_main (last_login)
VALUES (?)");

$statement->bind_param("s", $lastLoginPrepared);

$lastLoginPrepared = $lastLogin;

$statement->execute();

$result = $conn->query($statement);

header("Location: index.php?log_in_successful");
<?php

include_once 'header.php';


function referenceLetters($length = 3) {
    $characters = 'ABCDEFGHJKMNPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomStrLet = '';
    for ($i = 0; $i < $length; $i++) {
        $randomStrLet .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomStrLet;
} 

function referenceNumbers($length = 4) {
    $characters = '23456789';
    $charactersLength = strlen($characters);
    $randomStrNum = '';
    for ($i = 0; $i < $length; $i++) {
        $randomStrNum .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomStrNum;
}




$accountRef = referenceLetters() . referenceNumbers();

$dateJoined = date('Y-m-d H:i:s');

$firstName = $_POST['firstName'];

$lastName = $_POST['lastName'];

$email = $_POST['email'];

$password = $_POST['password'];

$repeatPassword = $_POST['repeatPassword'];


$_SESSION['firstName'] = $firstName;
$_SESSION['lastName'] = $lastName;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['repeatPassword'] = $repeatPassword;





$query = "SELECT account_ref FROM accounts_main WHERE account_ref='$accountRef'";
$result = $conn->query($query);
$accountRefCheck = mysqli_num_rows($result);

while($accountRefCheck>0){
	$accountRef = referenceLetters() . referenceNumbers();
	$query = "SELECT account_ref FROM accounts_main WHERE account_ref='$accountRef'";
	$result = $conn->query($query);
	$accountRefCheck = mysqli_num_rows($result);
}



if (empty($password)||empty($firstName)||empty($lastName)||empty($email)||empty($repeatPassword)){
	header("Location: index.php?sign_up_error=empty_fields");
	exit();
}




if($password !== $repeatPassword){
	unset($_SESSION['password']);
	unset($_SESSION['repeatPassword']);
	header("Location: index.php?sign_up_error=unmatching_passwords");
	exit();
}




if((strlen($firstName)<2)||(strlen($firstName)>50)){
	unset($_SESSION['firstName']);
	header("Location: index.php?sign_up_error=invalid_first_name_length");
	exit();
}


if (!preg_match("/^(?:[\s,.'-]*[a-zA-Z\pL][\s,.'-]*)+$/u", $firstName)){
	unset($_SESSION['firstName']);
	header("Location: index.php?sign_up_error=invalid_first_name_characters");
	exit();
}


if((strlen($lastName)<2)||(strlen($lastName)>50)){
	unset($_SESSION['lastName']);
	header("Location: index.php?sign_up_error=invalid_last_name_length");
	exit();
}

if (!preg_match("/^(?:[\s,.'-]*[a-zA-Z\pL][\s,.'-]*)+$/u", $lastName)){
	unset($_SESSION['lastName']);
	header("Location: index.php?sign_up_error=invalid_last_name_characters");
	exit();
}


if(strlen($email)>100){
	unset($_SESSION['email']);
	header("Location: index.php?sign_up_error=email_too_long");
	exit();
}



function validEmail($email){
	$regexp='/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
	return preg_match($regexp, trim($email));
}


if(!validEmail($email)){ //if email is invalid
	unset($_SESSION['email']);
	header("Location: index.php?sign_up_error=invalid_email");
	exit();
}

//check is email already in the database


//prepared statement
$statement = $conn->prepare("SELECT email FROM accounts_main WHERE email=?");
$statement->bind_param("s", $emailPrepared);//this must be "s" !
$emailPrepared = $email;
//end of prepared statement

$statement->execute();

$result = $statement->get_result();

$emailCheck = $result->num_rows;


if($emailCheck > 0){
	unset($_SESSION['email']);
	header("Location: index.php?sign_up_error=email_already_in_use");
	exit();
}


if(strlen($password)<6){
	unset($_SESSION['password']);
	unset($_SESSION['repeatPassword']);
	header("Location: index.php?sign_up_error=password_too_short");
	exit();
}


if(strlen($password)>10000){
	unset($_SESSION['password']);
	unset($_SESSION['repeatPassword']);
	header("Location: index.php?sign_up_error=password_too_long");
	exit();
}




//then hashing and dehashing.





/************ IF IT PASSES ALL ERRORS ABOVE, THEN DO THIS*****************/
trim($firstName);
trim($lastName);
trim($email);


//one last check for empty fields because major problems will occur if empty fields are inserted.
if (empty($password)||empty($firstName)||empty($lastName)||empty($email)){
	header("Location: index.php?sign_up_error=empty_fields");
	exit();
}
if(empty($accountRef)||empty($dateJoined)){
	header("Location: index.php?error=internal_sign_up_error");
	exit();
}

/*
EXTREMELY IMPORTANT TO HASH PASSWORD HERE
*/
$password = password_hash($password, PASSWORD_DEFAULT);
/*
EXTREMELY IMPORTANT TO HASH PASSWORD HERE
*/




$statement = $conn->prepare("INSERT INTO accounts_main (password, first_name, last_name, email, account_ref, date_joined)
VALUES (?, ?, ?, ?, ?, ?)");

$statement->bind_param("ssssss", $passwordPrepared, $firstNamePrepared, $lastNamePrepared, $emailPrepared, $accountRefPrepared, $dateJoinedPrepared);

$passwordPrepared = $password;
$firstNamePrepared = $firstName;
$lastNamePrepared = $lastName;
$emailPrepared = $email;
$accountRefPrepared = $accountRef;
$dateJoinedPrepared = $dateJoined;

$statement->execute();

$result = $conn->query($statement);
session_destroy();

session_start();
$_SESSION['loggedIn'] = true;
header("Location: index.php?sign_up_successful");
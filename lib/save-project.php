<?php

include_once 'config.php';


if(!isset($_POST['description'])){
	header("Location: ../profile.php?go_to_advertise_page");
	exit();
}



$title = $_POST['title'];
$description = $_POST['description'];

//these 2 must be together to work, milliseconds in the difference will throw it off
$date = date('Y-m-d H:i:s');
$stamp = strtotime($date);
//these 2 must be together to work, milliseconds in the difference will throw it off


$projectPic = $_FILES['projectPic'];
$price = $_POST['myPrice'];
$recPrice = 180;




$requirements = $_POST['requirements'];


if(strlen($_POST['description'])<10){
	header("Location: ../advertise.php?description_must_be_10_characters_minimum");
	exit();
}

if(strlen($_POST['title'])<6){
	header("Location: ../advertise.php?title_must_be_6_characters_minimum");
	exit();
}

if(strlen($_POST['description'])>=500){
	header("Location: ../advertise.php?description_must_be_less_than_500_characters");
	exit();
}

if(strlen($_POST['title'])>=100){
	header("Location: ../advertise.php?title_must_be_less_than_100_characters");
	exit();
}

if(empty($price)){
	header("Location: ../advertise.php?please_enter_a_price");
	exit();
}

if(!is_numeric($price)){
	header("Location: ../advertise.php?please_enter_only_numbers_for_price");
	exit();
}


$strReq = "";

if(!empty($requirements)){
	for($i=0; $i<sizeof($requirements); $i++){
		$strReq.=$requirements[$i].", ";
	}
}

$strReq.="Display Information"; //every site has to display information






//setting requirements' values

if(in_array('Login System', $requirements)) $recPrice+=100;

if(in_array('Photo Gallery', $requirements)) $recPrice+=60;

if(in_array('Contact Form', $requirements)) $recPrice+=30;

if(in_array('Messaging System', $requirements)) $recPrice+=115;

if(in_array('ID/Verification', $requirements)) $recPrice+=80;

if(in_array('Logo Design for Company', $requirements)) $recPrice+=40;

if(in_array('User to User e-Commerce', $requirements)) $recPrice+=465;

if(in_array('Site to User e-Commerce', $requirements)) $recPrice+=320;

if(in_array('Advertisements', $requirements)) $recPrice+=210;

if(in_array('Map for Company Location', $requirements)) $recPrice+=25;

if(in_array('Map for Key Features', $requirements)) $recPrice+=240;





/* THIS WORKED BUT NUM_ROWS WAY IS BETTER. CAN USE THIS FOR LISTINGS PAGE

$statement = $conn->prepare("SELECT * FROM project WHERE project_id!=?");
$statement->bind_param("s", $projIdPrep);//this must be "s" !
$projIdPrep = '0';

//end of prepared statement
$statement->execute();
$result = $statement->get_result();
//$row = $result->fetch_assoc();

while ($row = $result->fetch_assoc())  
{
    echo $row['project_id'];
}
*/







$name = $projectPic['name'];
$tempName = $projectPic['tmp_name'];
$size = $projectPic['size'];
$error = $projectPic['error'];
$type = $projectPic['type'];

$ext = explode('.', $name);
$realExt = strtolower(end($ext));

$newName = "project".$stamp.".".$realExt;
$dest = '../images/uploads/'.$newName;



if($size<1){
	$realExt = '0';
}
else{
	//isValidImage from mainfunctions php file
	if(!isValidImage($projectPic)){
		header("Location: ../advertise.php?invalid_project_image");
		exit();
	}
	move_uploaded_file($tempName, $dest);
}







$statement = $conn->prepare("INSERT INTO project (company_ref, company_reg, company_name, title, description, requirements, rec_price, price, date_advertised, pic_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");



$statement->bind_param("ssssssssss", $refPrep, $regPrep, $namePrep, $titlePrep, $descPrep, $reqPrep, $recPricePrep, $pricePrep, $datePrep, $picPrep);

$refPrep = $_SESSION['accountRef'];
$regPrep = $_SESSION['compReg'];
$namePrep = $_SESSION['compName'];
$titlePrep = $title;
$descPrep = $description;
$reqPrep = $strReq;
$recPricePrep = $recPrice;
$pricePrep = $price;
$datePrep = $date;
$picPrep = $realExt;

$statement->execute();

$result = $conn->query($statement);

header("Location: ../profile.php?project_ad_submitted_successfully");


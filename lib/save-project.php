<?php

include_once 'header.php';


if(!isset($_POST['description'])){
	header("Location: ../profile.php?go_to_advertise_page");
	exit();
}



$title = $_POST['title'];
$description = $_POST['description'];
$date = date('Y-m-d H:i:s');
$projectPic = $_FILES['projectPic'];
$price = $_POST['myPrice'];
$recPrice = 180;




$requirements = $_POST['requirements'];

if(empty($requirements)){
	$requirements = "Display Information";
}

$strReq = "";

for($i=0; $i<sizeof($requirements); $i++){
	if($i<(sizeof($requirements)-1)) $strReq.=$requirements[$i].", ";
	else $strReq.=$requirements[$i];
}



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

echo "total ".$recPrice;




/*


$statement = "INSERT INTO project (title, price, description, date_advertised)
VALUES ('$_POST[title]', '$_POST[price]', '$_POST[description]', date('Y-m-d H:i:s'))";


if ($conn->query($statement) === TRUE) {
    header("Location: ../profile.php?project_ad_submitted_successfully");
    exit();
}

else {
    header("Location: ../profile.php?project_ad_not_submitted");
    exit();
}


*/


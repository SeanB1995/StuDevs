<?php

include_once 'header.php';


if(isset($_POST['submit_ad'])){
	//$companyId = $_SESSION['compId']
$projTitle = $_POST["title"];
$projDesc = $_POST["description"];
$projDate = date("Y-m-d H:i:s");
$projPrice = $_POST["price"];


$statement = "INSERT INTO project (title, price, description, date_advertised)
VALUES ('$_POST[title]', '$_POST[price]', '$_POST[description]', date('Y-m-d H:i:s'))";


if ($conn->query($statement) === TRUE) {
    header("Location: ../profile.php?project_ad_submitted_successfully");
    exit();
} else {
    header("Location: ../profile.php?project_ad_not_submitted");
    exit();
}

}

/*

define('DB_NAME', 'RG344090_studevs');
define('DB_USER', 'studevs');
define('DB_PASSWORD', 'DevByStuds88');
define('DB_HOST', 'mysql4.mylogin.ie');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link){
	die('Could not connect');
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected){
	die('Can\'t use ';
}


if (!mysql_query($sql)){
	die('Error: ');
}

mysql_close();

*/
?>
<?php 
include_once 'header.php';

if($_SESSION['ADMIN']!==true){
	header("Location: ../index.php?log_in_error=log_in_using_admin_account");
	exit();
}


?>
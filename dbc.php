<?php


$conn = mysqli_connect("mysql4.mylogin.ie", "studevs", "DevByStuds88", "RG344090_studevs");



if(!$conn){
	die("Database connection failed. Please email studevs1@gmail.com");
}

$conn->query("SET NAMES 'utf8'");
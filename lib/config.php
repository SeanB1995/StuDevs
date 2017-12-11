<?php
//configuration file for db and fundamentals of site
//all files should include_once this file

$conn = mysqli_connect("go on", "nice try", "go for it", "ha");



if(!$conn){
	die("Database connection failed. Please email info@studevs.com");
}


$conn->query("SET NAMES 'utf8'");

session_start();

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
date_default_timezone_set('London');


include_once 'main-functions.php';




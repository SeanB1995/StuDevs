<?php
//configuration file for db and fundamentals of site
//all files should include_once this file

$conn = mysqli_connect("mysql4.mylogin.ie", "studevs", "DevByStuds88", "RG344090_studevs");



if(!$conn){
	die("Database connection failed. Please email info@studevs.com");
}

$conn->query("SET NAMES 'utf8'");


include_once 'main-functions.php';

session_start();

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
date_default_timezone_set('London');

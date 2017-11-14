<?php

include_once 'dbc.php';
include_once 'main-functions.php';

session_start();

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
date_default_timezone_set('London');

<?php

include_once 'dbc.php';

session_start();

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
date_default_timezone_set('London');
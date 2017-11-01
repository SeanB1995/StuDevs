<?php

include_once 'lib/header.php';

/*
echo "hello";


$a1 = array();


$query = mysql_query("SELECT acc_ref, email FROM student");

// look through query
while($row = mysql_fetch_assoc($query)){

  // add each row returned into an array
  $a1[] = $row;

}

$a2 = array();

$query = mysql_query("SELECT  acc_ref, email FROM business");

// look through query
while($row = mysql_fetch_assoc($query)){

  // add each row returned into an array
  $a2[] = $row;

}

$data = array();

$data = array_merge($a1, $a2);

*/

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


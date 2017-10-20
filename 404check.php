<?php
// IF WE CREATE A NEW PAGE THAT WE WANT TO BE VIEWED/INDEXED IT MUST BE ADDED HERE
// WHEN PAGE BECOMES HTTPS THIS MUST BE ALSO INCLUDED
// IF THIS IS SLOWING PAGE DOWN: GET RID OF IT


//pu stands for possible url

$pu1 = "http://studevs.com/";
$pu2 = "http://www.studevs.com/";

if($url==$pu1

    ||$url==$pu2


    ){
    //echo "correct";
}
else{
    include '404.php';
}
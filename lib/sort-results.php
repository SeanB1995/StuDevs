<?php

include_once 'config.php';


if(isset($_POST['project-sort'])){
	if($_POST['project-sort']=='1') header("Location: ../projects.php?price_lowest_first");
	elseif($_POST['project-sort']=='2') header("Location: ../projects.php?price_highest_first");
	elseif($_POST['project-sort']=='3') header("Location: ../projects.php?date_newest_first");
	elseif($_POST['project-sort']=='4') header("Location: ../projects.php?date_oldest_first");
	else header("location:javascript://history.go(-1)");
}

elseif(isset($_POST['student-sort'])) header("Location: ../index.php?asdfasdfasdfasdfasdfle");

elseif(isset($_POST['something-sort'])) header("Location: ../index.php?lasdfasfasdfasdfafasdfe");


else header("location:javascript://history.go(-1)");
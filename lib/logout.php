<?php

include_once 'header.php';

$logoutDate = date('Y-m-d H:i:s');

$statement = $conn->prepare("UPDATE session SET logout_date=? WHERE session_id=?");

$statement->bind_param("ss", $logoutDateP, $sessionIdP);

$logoutDateP = $logoutDate;
$sessionIdP = $_SESSION['sessionId'];

$statement->execute();

$result = $conn->query($statement);

session_start();
session_destroy();
header("Location: ../index.php?logged_out");
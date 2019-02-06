<?php

require_once "initialize.php";
$user = getDetails();
$_SESSION['user'] = $user;
header("location: display.php");

?>
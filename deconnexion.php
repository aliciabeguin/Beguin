<?php

session_start();

include("rappel.connection.inc.php");
$_SESSION["id"] = "";
$_SESSION["email"] = "";
session_unset();

header('Location: ./index.php');
exit();

?>
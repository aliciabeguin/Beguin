<?php

session_start();

include("rappel.connection.inc.php");

$_SESSION["userLogin"] = "";
session_unset();

header('Location: ./index.php');
exit();

?>
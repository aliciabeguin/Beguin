<?php 

session_start();

include("rappel.connection.inc.php");
// Connection information

try{
    $pdo = new PDO($DB_dsn, $DB_login, $DB_pass);
}
catch(PDOException $pdoe){
    echo("$pdoe");
    exit();
}

if (!$pdo) {
	echo("Impossible de se connecter");
	exit();
}

$priorite = $pdo->quote($_REQUEST['priorite']);
$sujet = $pdo->quote($_REQUEST['sujet']);
$description = $pdo->quote($_REQUEST['description']);
$secteur = $pdo->quote($_REQUEST['secteur']);
$login = "'".$_SESSION['email']."'";
$statut = "'encours'";

$myQuery = "INSERT INTO ticket (priorite, sujet, description, secteur, login, statut) VALUES ($priorite, $sujet, $description, $secteur, $login, $statut)";

$result = $pdo->query($myQuery);


if (!$result) {
	echo "Impossible to execute query";
	print_r($myQuery);
	exit();
}else{
	echo "Envoyé";
}

?>
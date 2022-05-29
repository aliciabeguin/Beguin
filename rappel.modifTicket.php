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

$id = $pdo->quote($_REQUEST['id']);
$priorite = $pdo->quote($_REQUEST['priorite']);
$sujet = $pdo->quote($_REQUEST['sujet']);
$description = $pdo->quote($_REQUEST['description']);
$secteur = $pdo->quote($_REQUEST['secteur']);

$myQuery = "UPDATE ticket SET priorite = $priorite, sujet = $sujet, description = $description, secteur = $secteur  WHERE id = $id";

$result = $pdo->query($myQuery);


if (!$result) {
	echo "Impossible to execute query";
	print_r($myQuery);
	exit();
}else{
	echo "Envoyé";
}

?>
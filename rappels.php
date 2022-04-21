<?php 

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

$email = $pdo->quote($_REQUEST['email']);
$mdp = $pdo->quote($_REQUEST['mdp']);

$myQuery = "SELECT * FROM `user` WHERE email = $email AND mdp = $mdp;";

$result = $pdo->query($myQuery);


if (!$result) {
	echo "Impossible to execute query";
	print_r($myQuery);
	exit();
}

$rowCount = $result->rowCount();

if($rowCount == 0){
	echo "Pas connecté";
}else{
	echo "Connecté";
	session_start();
	$fetch = $result->fetch(PDO::FETCH_ASSOC);
	$_SESSION["id"] = $fetch["id"];
	$_SESSION['email'] = $fetch["email"];

}

?>

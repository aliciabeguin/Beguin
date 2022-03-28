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
$pseudo = $pdo->quote($_REQUEST['pseudo']);
$nom = $pdo->quote($_REQUEST['nom']);
$prenom = $pdo->quote($_REQUEST['prenom']);
$email = $pdo->quote($_REQUEST['email']);
$mdp = $pdo->quote($_REQUEST['mdp']);
$vmdp = $pdo->quote($_REQUEST['vmdp']);


$myQuery = "SELECT * FROM `user` WHERE email = $email;";

$result = $pdo->query($myQuery);

if (!$result) {
	echo "Impossible to execute query";
	print_r($myQuery);
	exit();
}

$rowCount = $result->rowCount();

if($rowCount > 0){
	echo "Déjà inscrit";
}else if($vmdp != $mdp){
	echo "Mauvaise combinaison mdp";
}else{
	$myQuery2 = "INSERT INTO `user` (pseudo, nom, prenom, email, mdp) VALUES ($pseudo, $nom, $prenom, $email, $mdp);"
	$res = $pdo->query($myQuery2);
	if(!$res){
		echo("erreur insert");
		print_r($myQuery2);
		exit();
	}else{
		$myQuery3 = "SELECT * FROM `user` WHERE email = $email;";
		$result2 = $pdo->query($myQuery3);
		if (!$result2) {
			echo "Impossible to execute query";
			print_r($myQuery3);
			exit();
		}else{
			echo("Inscrit");
			session_start();
			$_SESSION['id'] = $result2->fetch(PDO::FETCH_ASSOC)["id"];	
		}
		
	}
}
?>

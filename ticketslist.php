<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="ticketslist.css"/>
	<link rel="icon" type="image/png" href="images/SUBMARINA.png">
	<script type="text/javascript" src="ticketslist.js"></script>
	<title>zoo</title>
</head>
<body>

	<?php include("header.php"); ?>

	<?php include("rappel.connection.inc.php");
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
	$myQuery = "SELECT * FROM `ticket`";
	$result = $pdo->query($myQuery);
	if (!$result) {
		echo "Impossible to execute query";
		print_r($myQuery);
		exit();
	}
	$rowCount = $result->rowCount();
	if($rowCount <= 0){
		echo "Pas de tickets";
	}
?>


	<article>
		<div id="tableau">
			<table>
				<tr>
					<th>Id</th>
					<th>Priorité</th>
					<th>Sujet</th>
					<th>Description</th>
					<th>Secteur</th>
					<th>Login</th>
					<th>Satut</th>
				</tr>
				<?php
				for($i = 0; $i < $rowCount; $i++){  
					$arr = $result->fetch(PDO::FETCH_BOTH);
					?>
				<tr>
					<td> <?php $id = $arr["id"]; echo($id); ?> </td>
					<td> <?php $priorite = $arr["priorite"]; echo($priorite); ?> </td>
					<td> <?php $sujet = $arr["sujet"]; echo($sujet); ?> </td>
					<td> <?php $description = $arr["description"]; echo($description); ?> </td>
					<td> <?php $secteur = $arr["secteur"]; echo($secteur); ?> </td>
					<td> <?php $login = $arr["login"]; echo($login); ?> </td>
					<td> <?php $statut = $arr["statut"]; echo($statut); ?> </td>
				</tr>
				<?php } ?>
			</table>
		</div>

	</article>

	<footer>
		22 rue de la Mediterranée, 75000 Paris

	</footer>

	
</body>
</html>

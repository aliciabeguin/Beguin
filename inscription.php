<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="inscription.css"/>
	<script type="text/javascript" src="inscription.js"></script>
	<title>zoo</title>
</head>
<body>

	<?php include("header.php"); ?>

	<article>
		<form>
			<div class="form-group">
				<label for="pseudo">Pseudo</label>
				<input type="text" class="form-control" id="pseudo" placeholder="Pseudo" name="pseudo">	
			</div>
			<div class="form-group">
				<label for="nom">Nom</label>
				<input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
			</div>
			<div class="form-group">
				<label for="prenom">Prénom</label>
				<input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email">	
			</div>
			<div class="form-group">
				<label for="mdp">Mot de passe</label>
				<input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp">
			</div>
			<div class="form-group">
				<label for="vmdp">Vérification mot de passe</label>
				<input type="password" class="form-control" id="vmdp" placeholder="Mot de passe" name="vmdp">
			</div>
			<button type="button" class="btn btn-primary" id="bouton_inscription">Inscription</button>
		</form>
		<div id="inscription">
			<?php
				if(isset($_SESSION["id"])){
					echo("Inscrit et connecté");
				}else{
					echo("Pas connecté");
				}
			?>

		</div>

		
	</article>

	<footer>
		22 rue de la Mediterranée, 75000 Paris

	</footer>

	
</body>
</html>

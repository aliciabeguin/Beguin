<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="connexion.css"/>
	<link rel="icon" type="image/png" href="images/SUBMARINA.png">
	<script type="text/javascript" src="connexion.js"></script>
	<title>zoo</title>
</head>
<body>

	<header>
		
		<div class = "firstHeader">
			<a href="index.php">
				SubMarina
			</a>
			<div class="sideHeader">	
				<a href="connexion.php">
					<div class = "account">
						Connexion
					</div>
				</a>
				<a href="ticket.php">
					<div class = "tickets">
						Tickets
					</div>
				</a>
			</div>
		</div>

		<div class="secondHeader">
			<a href="spectacles.php">
				<div>
					Spectacles
				</div>
			</a>
			<a href="goodies.php">
				<div>
					Goodies
				</div>
			</a>
			<a href="tarifs.php">
				<div>
					Tarifs
				</div>
			</a>
		</div>

	</header>

	<article>
		<form>
			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">	
			</div>
			<div class="form-group">
				<label for="mdp">Password</label>
				<input type="password" class="form-control" id="mdp" placeholder="Password" name="mdp">
			</div>
			<button type="button" class="btn btn-primary" id="bouton_connexion">Connexion</button>
			<button type="button" class="btn btn-primary" id="bouton_deconnexion">Déconnexion</button>
			<button type="button" class="btn btn-primary" id="bouton_inscription" onclick="window.location='inscription.php'">Inscription</button>
		</form>

		<div id="connexion">
			<?php
				session_start();
				if(isset($_SESSION["id"])){
					echo("Connecté");
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

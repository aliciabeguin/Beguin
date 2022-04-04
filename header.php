<div class = "firstHeader">
	<a href="index.php">
		<?php
		$heure = date("H");
		if($heure>8 && $heure<17){ ?>
			<img src="images/dauphin_icone.png" id="icone">
		<?php }elseif ($heure>=17 && $heure<21) { ?>
			<img src="images/lamantin.webp" id="icone">
		<?php }else{ ?>
			<img src="images/meduse.png" id="icone">
		<?php } ?>
		SubMarina
	</a>
	<div class="sideHeader">	
		<a href="connexion.php">
			<div class = "account">
				Connexion
			</div>
		</a>
		<?php session_start();
		if(isset($_SESSION['id'])){ ?>
		<a href="ticketslist.php">
				<div class = "tickets">Liste tickets</div> 
		</a>
		<?php } ?>
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
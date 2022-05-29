function updateStatut(statut, id){
	var request = new XMLHttpRequest();
	request.open("get", "rappels.mytickets.php?statut="+statut+"&id="+id);
	var promise = new Promise(function(resolve){
		request.onreadystatechange = function(){
			if(request.readyState == XMLHttpRequest.DONE){
				resolve(request.response == "Modifié");
			}
		};
	});
	console.log("uwu");
	request.send();
	return promise;
}

function modifTicket(id, priorite, sujet, description, secteur){
	var request = new XMLHttpRequest();
	request.open("get", "rappels.mytickets.php?id="+id+"&priorite="+priorite+"&sujet="+sujet+"&description="+description+"&secteur="+secteur);
	request.send();
	var promise = new Promise(function(resolve){
		request.onreadystatechange = function(){
			if(request.readyState == XMLHttpRequest.DONE){
				resolve(request.response == "Envoyé");
			}
		};
	});
	return promise;
}

function modifierMyTicket(id, priorite, sujet, description, secteur){
	var request = new XMLHttpRequest();
	request.open("get", "rappel.modifTicket.php?id="+id+"&priorite="+priorite+"&sujet="+sujet+"&description="+description+"&secteur="+secteur);
	request.send();
	var promise = new Promise(function(resolve){
		request.onreadystatechange = function(){
			if(request.readyState == XMLHttpRequest.DONE){
				resolve(request.response == "Envoyé");
			}
		};
	});
	return promise;
}

window.addEventListener("load", function(){
	var envoie = document.getElementsByClassName("envoie");
	var longueur = envoie.length;
	for(var i = 0; i<longueur; i++){
		envoie[i].addEventListener("click", onclick_update);
	}

	var modifier = document.getElementsByClassName("modifier");
	var longueur = modifier.length;
	for(var i = 0; i<longueur; i++){
		modifier[i].addEventListener("click", modifier_ticket);
	}

	var myticket = document.getElementById("bouton_myticket");
		myticket.addEventListener("click", modifier_myticket);
})

function modifier_ticket(){
	var id = this.parentNode.parentNode.dataset.id;
	var priorite = this.parentNode.parentNode.dataset.priorite;
	var sujet = this.parentNode.parentNode.dataset.sujet;
	var description = this.parentNode.parentNode.dataset.description;
	var secteur = this.parentNode.parentNode.dataset.secteur;
	if(modifTicket){
		window.location.replace("modifTicket.php?id="+id+"&priorite="+priorite+"&sujet="+sujet+"&description="+description+"&secteur="+secteur);
	}else{
		var confirm = document.getElementById("confirm");
		confirm.innerText = "Erreur serveur";
	}
}

function modifier_myticket(){
	var id = document.getElementById("id").value;
	var priorite = document.getElementById("priorite").value;
	var sujet = document.getElementById("sujet").value;
	var description = document.getElementById("description").value;
	var secteur = document.getElementById("secteur").value;
	var promise = modifierMyTicket(id, priorite, sujet, description, secteur);
	promise.then(function(modifie){
		if(modifie){
			var confirm = document.getElementById("confirm");
			confirm.innerText = "Modifié";
		}else{
			var confirm = document.getElementById("confirm");
			confirm.innerText = "Erreur serveur";
		}
	});
}



function onclick_update(){
	console.log(this);
	var statut = this.parentNode.getElementsByClassName("statut")[0].value;
	var id = this.parentNode.parentNode.dataset.id;
	var promise = updateStatut(statut, id);
	promise.then((connecte)=>{
		if(updateStatut){
			var confirm = document.getElementById("confirm");
			confirm.innerText = "Envoyé";
			this.parentNode.parentNode.getElementsByClassName("statut")[0].innerText = statut;
		}else{
			var confirm = document.getElementById("confirm");
			confirm.innerText = "Erreur serveur";
		}
	});
}

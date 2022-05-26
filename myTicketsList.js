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
	request.open("get", "rappels.modifTicket.php?id="+id+"&priorite="+priorite+"&sujet="+sujet+"&description="+description+"&secteur="+secteur);
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
})

window.addEventListener("load", function(){
	var modifier = document.getElementsByClassName("modifier");
	var longueur = modifier.length;
	for(var i = 0; i<longueur; i++){
		modifier[i].addEventListener("click", modifier_ticket);
	}
})

function modifier_ticket(){
	var id = this.parentNode.parentNode.dataset.id;
	var priorite = this.parentNode.parentNode.dataset.priorite;
	var sujet = this.parentNode.parentNode.dataset.sujet;
	var description = this.parentNode.parentNode.dataset.description;
	var secteur = this.parentNode.parentNode.dataset.secteur;
	var login = this.parentNode.parentNode.dataset.login;
	var statut = this.parentNode.parentNode.dataset.statut;
	var promise = modifTicket(id, priorite, description, secteur);
	promise.then(function(connecte){
		if(modifTicket){
			window.location.replace("modifTicket.php?id="+id+"&priorite="+priorite+"&sujet="+sujet+"&description="+description+"&secteur="+secteur);
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

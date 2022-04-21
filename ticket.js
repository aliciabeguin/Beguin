function ticket(priorite, sujet, description, secteur){
	var request = new XMLHttpRequest();
	request.open("get", "rappels.ticket.php?priorite="+priorite+"&sujet="+sujet+"&description="+description+"&secteur="+secteur);
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
	var bouton_ticket = document.getElementById("bouton_ticket");
	bouton_ticket.addEventListener("click", onclick_ticket);
})

function onclick_ticket(){
	var priorite = document.getElementById("priorite").value;
	var sujet = document.getElementById("sujet").value;
	var description = document.getElementById("description").value;
	var secteur = document.getElementById("secteur").value;
	var promise = ticket(priorite, sujet, description, secteur);
	promise.then(function(envoie){
		if(envoie){
			var envoye = document.getElementById("envoye");
			envoye.innerText = "Envoyé";
		}else{
			var envoye = document.getElementById("envoye");
			envoye.innerText = "Pas envoyé";
		}
		//document.location.href = "index.php";
	});
}
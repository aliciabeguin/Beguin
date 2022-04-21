window.addEventListener("load", function(){
	var bouton_ticket = document.getElementsByClassName("bouton_ticket");
	var longueur = bouton_ticket.length;
	for(var i = 0; i<longueur; i++){
		bouton_ticket.addEventListener("click", onclick_update_ticket);
	}
})

function onclick_update_ticket(){
	var statut = this.value;
	var id = this.parentElement.value;
	console.log(id);
	var promise = update(statut, id);
	promise.then(function(connecte){
		if(connecte){
			
		}
	});
}

function update(statut, id){
	var request = new XMLHttpRequest();
	request.open("get", "rappel.ticketsliste.php?statut="+statut+"&id="+id);
	request.send();
	var promise = new Promise(function(resolve){
		request.onreadystatechange = function(){
			if(request.readyState == XMLHttpRequest.DONE){
				resolve(request.response == "modifie");
			}
		};
	});
	return promise;
}
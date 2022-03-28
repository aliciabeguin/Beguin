function inscription(pseudo, nom, prenom, email, mdp, vmdp){
	var request = new XMLHttpRequest();
	request.open("get", "rappels.inscription.php?pseudo="+pseudo+"&nom="+nom+"&prenom="+prenom+"&email="+email+"&mdp="+mdp+"&vmdp"+vmdp);
	request.send();
	var promise = new Promise(function(resolve){
		request.onreadystatechange = function(){
			if(request.readyState == XMLHttpRequest.DONE){
				resolve(request.response == "Inscrit");
			}
		};
	});
	return promise;
}


window.addEventListener("load", function(){
	var bouton_inscription = document.getElementById("bouton_inscription");
	bouton_inscription.addEventListener("click", onclick_inscription);
})

function onclick_inscription(){
	var pseudo = document.getElementById("pseudo").value;
	var nom = document.getElementById("nom").value;
	var prenom = document.getElementById("prenom").value;
	var email = document.getElementById("email").value;
	var mdp = document.getElementById("mdp").value;
	var vmdp = document.getElementById("vmdp").value;
	var promise = inscription(pseudo, nom, prenom, email, mdp, vmdp);
	promise.then(function(inscrit){
		if(inscrit){
			var inscription = document.getElementById("inscription");
			inscription.innerText = "Inscrit";
		}else{
			var inscription = document.getElementById("inscription");
			inscription.innerText = "Pas inscrit";
		}
	});
}
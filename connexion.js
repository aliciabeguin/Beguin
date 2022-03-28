function connexion(email, mdp){
	var request = new XMLHttpRequest();
	request.open("get", "rappels.php?email="+email+"&mdp="+mdp);
	request.send();
	var promise = new Promise(function(resolve){
		request.onreadystatechange = function(){
			if(request.readyState == XMLHttpRequest.DONE){
				resolve(request.response == "Connecté");
			}
		};
	});
	return promise;
}

window.addEventListener("load", function(){
	var bouton_connexion = document.getElementById("bouton_connexion");
	bouton_connexion.addEventListener("click", onclick_connexion);
})

window.addEventListener("load", function(){
	var bouton_connexion = document.getElementById("bouton_deconnexion");
	bouton_connexion.addEventListener("click", onclick_deconnexion);
})

function onclick_connexion(){
	var email = document.getElementById("email").value;
	var mdp = document.getElementById("mdp").value;
	var promise = connexion(email, mdp);
	promise.then(function(connecte){
		if(connecte){
			var connexion = document.getElementById("connexion");
			connexion.innerText = "Connecté";
		}else{
			var connexion = document.getElementById("connexion");
			connexion.innerText = "Pas connecté";
		}
	});
}

function onclick_deconnexion(){
	document.location.href = "deconnexion.php";
}
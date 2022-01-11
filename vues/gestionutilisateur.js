function chercher_utilisateur() {
	let input = document.getElementById('barrerecherche').value
	input=input.toLowercas();
	let x = document.getElementByClassName('utilisateur');
	
	for (i = 0; i < x.length; i++) {
		if (!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display="none";
		}

		else {
			x[i].style.display="liste-utilisateur"

		}

	}

}
		





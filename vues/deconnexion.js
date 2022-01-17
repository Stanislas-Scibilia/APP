function pop_up(){
  var result = confirm("Voulez-vous vraiment vous déconnecter ?"); if (result == true) {
    alert("Vous êtes bien déconnecté");
  }
  else {
    alert("Vous êtes toujours connecté");
  }
}
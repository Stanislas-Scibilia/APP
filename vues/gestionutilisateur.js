function chercher_utilisateur() {
  
  input = document.getElementById("recherche");

  filter = input.value.toUpperCase();
  table = document.getElementById("utilisateurs");
  tr = table.getElementsByTagName("tr");
  affiche = [];
  for (k = 0; k < 3; k++) {
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[k];
      console.log(td);
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
          affiche.push(i);
        } else if (affiche.find(element => element === i) === undefined) {
          tr[i].style.display = "none";
        }
      }
    }
  }
}
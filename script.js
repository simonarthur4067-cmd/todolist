// 1. Vérification du titre vide
function validerFormulaire() {
  // On récupère le champ titre par son nom
  var champ = document.querySelector('input[name="titre"]');
  var titre = champ.value;

  if (titre == "") {
    alert("Tu as oublié de donner un titre à ta tâche !");
    return false;
  }
  return true;
}

// 2. Filtre des tâches (syntaxe classique sans flèche)
function filtrer(statutCible) {
  // On récupère toutes les div qui ont la classe "tache"
  var taches = document.querySelectorAll(".tache");

  for (var i = 0; i < taches.length; i++) {
    var uneTache = taches[i];

    if (statutCible == "tous" || uneTache.textContent.includes(statutCible)) {
      uneTache.style.display = "block";
    } else {
      uneTache.style.display = "none";
    }
  }
}

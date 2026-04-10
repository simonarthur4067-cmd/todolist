<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ma Todo List</title>
</head>
<body>

    <h1>Gestion de mes tâches</h1>

    <div id="formulaire">
        <h3>Nouvelle tâche</h3>
        <form action="ajouter.php" method="POST" onsubmit="return validerFormulaire()">
            <div>
                Titre : <input type="text" name="titre">
            </div>
            <div>
                Description : <input type="text" name="description">
            </div>
            <div>
                Priorité : 
                <select name="priorite">
                    <option>Basse</option>
                    <option>Normale</option>
                    <option>Haute</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Ajouter la tâche">
            </div>
        </form>
    </div>

    <div id="filtres">
        <button onclick="filtrer('tous')">Toutes</button>
        <button onclick="filtrer('A faire')">À faire</button>
        <button onclick="filtrer('Termine')">Terminées</button>
    </div>

    <div id="affichage">
        <h3>Mes tâches</h3>
        
        <div id="liste-taches">
            <div class="tache">
                <strong>Réviser le SQL</strong> - Statut : <span>A faire</span> | Priorité : Haute 
                <a href="supprimer.php?id=1">Supprimer</a>
            </div>

            <div class="tache">
                <strong>Projet PHP</strong> - Statut : <span>Termine</span> | Priorité : Basse 
                <a href="supprimer.php?id=2">Supprimer</a>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>
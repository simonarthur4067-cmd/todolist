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
        <form action="ajouter.php" method="POST">
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

    <div id="affichage">
        <h3>Tâches à faire</h3>
        
        <div class="tache">
            <strong>Réviser le SQL</strong> - Priorité : Haute 
            <a href="supprimer.php?id=1">Supprimer</a>
        </div>

        <div class="tache">
            <strong>Faire les courses</strong> - Priorité : Basse 
            <a href="supprimer.php?id=2">Supprimer</a>
        </div>
    </div>

</body>
</html>
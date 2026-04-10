<?php
require 'connexion.php';
$taches = $pdo->query("SELECT * FROM taches");
?>
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
            Titre : <input type="text" name="titre"><br>
            Description : <input type="text" name="description"><br>
            Priorité :
            <select name="priorite">
                <option>Basse</option>
                <option>Normale</option>
                <option>Haute</option>
            </select><br>
            <input type="submit" value="Ajouter la tâche">
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
            <?php foreach($taches as $tache): ?>
                <div class="tache">
                    <strong><?= htmlspecialchars($tache['titre']) ?></strong>
                    - Statut : <span><?= htmlspecialchars($tache['statut']) ?></span>
                    | Priorité : <?= htmlspecialchars($tache['priorite']) ?>
                    <a href="supprimer.php?id=<?= $tache['id'] ?>">Supprimer</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
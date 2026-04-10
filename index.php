<?php
require 'connexion.php';
$taches = $pdo->query("SELECT * FROM taches");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
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
        <table border="1">
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Priorité</th>
                <th>Action</th>
            </tr>
            <?php foreach($taches as $tache): ?>
            <tr class="tache">
                <td><?= htmlspecialchars($tache['titre']) ?></td>
                <td><?= htmlspecialchars($tache['description']) ?></td>
                <td><span><?= htmlspecialchars($tache['statut']) ?></span></td>
                <td><?= htmlspecialchars($tache['priorite']) ?></td>
                <td><a href="supprimer.php?id=<?= $tache['id'] ?>">Supprimer</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <script src="script.js"></script>
</body>
</html>
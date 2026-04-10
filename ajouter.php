<?php
require 'connexion.php';

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $priorite = $_POST['priorite'];

    $sql = "INSERT INTO taches (titre, description, priorite) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$titre, $description, $priorite]);

    header('Location: index.php');
}
?>
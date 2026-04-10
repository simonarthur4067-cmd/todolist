<?php
require 'connexion.php';
$id = $_GET['id'];
$sql = "DELETE FROM taches WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
header('Location: index.php');
?>
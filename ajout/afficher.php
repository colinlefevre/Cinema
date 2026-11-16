<?php
include '../conf_server.php';

$titre = $_POST['titre'];
$realisateur = $_POST['realisateur'];
$genre = $_POST['genre'];
$proprio = $_POST['proprio'];

$conn = new mysqli($servername, $username, $password, $dbname);

// Create Connexion
if ($conn->connect_error) {
    die("La connexion a échouée : " . $conn->connect_error);
}
// Check connection
$conn->query("SET NAMES UTF8");
$sql = "INSERT INTO films (titre, realisateur, genre, proprio) VALUES ('$titre', '$realisateur', '$genre', '$proprio')";

if ($conn->query($sql) === TRUE) {
    echo "film enregistré";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}
$conn->close();
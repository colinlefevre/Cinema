<?php
include '../conf_server.php';

$proprio = $_POST['proprio'];

// Create Connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("La connexion a échouée : " . $conn->connect_error);
}

$conn->query("SET NAMES UTF8");
$sql = "SELECT titre, realisateur, genre FROM films WHERE proprio='$proprio'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["titre"] . " réaliser par " . $row["realisateur"] . " appartenant à " . $proprio;
        echo '<br>';
    }
} else {
    echo "Propriétaire inconnu";
}
$conn->close();
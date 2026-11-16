<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ajoutProprio</title>
</head>
<body>
    <h1>Voir les films d'un proprio</h1>
    <a href="../index.php">Retour à l'acceuil</a>
    <br><br>
    <form action="" method="post">
        <label for="proprio">Proprio : </label>
        <input type="text" name="proprio" id="proprio">
        <br><br>
        <input type="submit" value="Envoyer">
    </form>
    <br><br>
    <?php
    if (isset($_POST['proprio'])) {
        include('afficherfilmsproprio.php');
    }
    ?>
</body>
</html>
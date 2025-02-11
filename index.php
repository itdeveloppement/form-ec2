<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Nom et Prénom</title>
</head>
<body>
    <h2>Formulaire Nom et Prénom</h2>
    <form action="submit.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
<?php
$servername = "votre-endpoint-rds";
$username = "votre-utilisateur";
$password = "votre-mot-de-passe";
$dbname = "votre-base-de-donnees";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

// Préparer et exécuter la requête SQL pour insérer les données
$sql = "INSERT INTO utilisateurs (nom, prenom) VALUES ('$nom', '$prenom')";

if ($conn->query($sql) === TRUE) {
    echo "Nouvel enregistrement créé avec succès<br><br>";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

// Requête SQL pour sélectionner tous les enregistrements de la table utilisateurs
$sql = "SELECT id, nom, prenom FROM utilisateurs";
$result = $conn->query($sql);

// Vérifier si des enregistrements ont été trouvés
if ($result->num_rows > 0) {
    // Afficher les enregistrements dans un tableau HTML
    echo "<h2>Liste des utilisateurs :</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nom"] . "</td>
                <td>" . $row["prenom"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Aucun enregistrement trouvé";
}

// Fermer la connexion
$conn->close();
?>

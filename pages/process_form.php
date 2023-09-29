<?php
// Connexion à la base de données (utilisez les informations de connexion à votre propre base de données)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "natyres";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion à la base de données
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Récupérer les données du formulaire
$nom = $_GET['nom'];
$nom_user = $_GET['nom_user'];
$date_naissance = $_GET['date_naissance'];
$adresse_email = $_GET['adresse_email'];
$mot_de_passe = $_GET['mot_de_passe'];

// Hacher le mot de passe
$mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);

// Insérer les données dans la base de données
$sql = "INSERT INTO utilisateur (nom, nom_user, date_naissance, adresse_email, mot_de_passe)
VALUES ('$nom', '$nom_user', '$date_naissance', '$adresse_email', '$mot_de_passe_hache')";

if ($conn->query($sql) === TRUE) {
    echo "Inscription réussie !";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>

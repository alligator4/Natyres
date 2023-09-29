<?php header("Location : ");
die(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <?php
        // Récupérez les données du formulaire
        $email = $_GET['adresse_email'];
        $mot_de_passe = $_GET['mot_de_passe'];

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

        // Requête SQL pour récupérer le mot de passe hashé
        $sql = "SELECT mot_de_passe FROM utilisateur WHERE adresse_email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $mot_de_passe_hash = $row['mot_de_passe'];

            // Utilisez password_verify pour vérifier le mot de passe
            if (password_verify($mot_de_passe, $mot_de_passe_hash)) {
                // L'utilisateur est authentifié avec succès
                // Vous pouvez rediriger l'utilisateur vers une page de tableau de bord ou effectuer d'autres actions ici
                echo "Authentification réussie !";
            } else {
                // L'authentification a échoué
                // Vous pouvez afficher un message d'erreur ou rediriger l'utilisateur vers la page de connexion
                echo "L'authentification a échoué. Veuillez vérifier vos informations de connexion.";
            }
        } else {
            // L'utilisateur n'existe pas dans la base de données
            // Vous pouvez afficher un message d'erreur ou rediriger l'utilisateur vers la page de connexion
            echo "L'adresse email n'existe pas dans notre système.";
        }

        // Fermer la connexion à la base de données
        $conn->close();
        ?>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/connexion.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="signin_form">
        <form action="process_login.php" method="get">
        <h2>CONNEXION</h2>
            <section>
                <input type="email" name="adresse_email" id="mail_input" placeholder="   adresse de messagerie">
            </section>
            <section>
                <input type="password" name="mot_de_passe" id="" placeholder="   mot de passe">
            </section>
            <button type="submit">CONNEXION</button>
            <a id="registeration_btn" href="inscription.php">Vous n'avez pas de compte?</a>
        </form>
    </div>
</body>
</html>
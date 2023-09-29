<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/inscription.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body> 
    <div class="signup_form">
        <form action="process_form.php" method="get">
        <h2>INSCRIPTION</h2>
            <section>
                <input type="text" name="nom" placeholder="   nom">
            </section>
            <section>
                <input type="text" name="nom_user" placeholder="   nom d'utilisateur">
            </section>
            <section>
                <input type="text" name="date_naissance" placeholder="   date de naissance" onfocus="(this.type='date')" onblur="(this.type='text')">
            </section>
            <section>
                <input type="email" name="adresse_email" id="mail_input" placeholder="   adresse de messagerie">
            </section>
            <section>
                <input type="password" name="mot_de_passe" id="" placeholder="   mot de passe">
            </section>
            <section>
                <input type="password" name="confirmer_mot_de_passe" id="" placeholder="   confirmer mot de passe">
            </section>
            <button type="submit">S'INSCRIRE</button>
            <a id="registered_btn" href="connexion.php">Vous êtes déjà membre?</a>
        </form>
    </div>
</body>

</html>
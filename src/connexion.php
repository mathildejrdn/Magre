<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Inscription</title>
</head>

<body>
    <main>
        <form method="POST">
            <img src="./images/logos/MG logo trans.png" alt="Logo">
            <div class="container-email">
                <label for="email">Email :</label>
                <input type="email" class="form.input" name="email" id="email" placeholder="Email">
            </div>
            <div class="container-password">
                <label for="pass">Mot de passe :</label>
                <input type="password" class="form.input" name="pass" id="pass" placeholder="Mot de passe">
            </div>
            <button type="submit" class="connexion-button">Se connecter</button>

            <div class="container-inscription">
                <p>Vous n'avez pas de compte ?</p>
                <a href="inscription.php">S'inscrire</a>
            </div>

            <div class="container-logos">
                <a href="#"><img src="./images/logos/facebook.svg" alt="Logo facebook"></a>
                <a href="#"><img src="./images/logos/instagram.svg" alt="Logo instagram"></a>
                <a href="#"><img src="./images/logos/twitter.svg" alt="Logo twitter"></a>
            </div>
        </form>
    </main>

</body>

</html>
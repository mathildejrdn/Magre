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
            <img src="" alt="">
            <h1>Inscription</h1>
            <div class="container-surname">
                <label for="surname">Nom :</label>
                <input type="text" class="form.input" name="surname" id="surname" placeholder="Nom de famille">
            </div>
            <div class="container-name">
                <label for="name">Prénom :</label>
                <input type="text" class="form.input" name="name" id="name" placeholder="Prénom">
            </div>
            <div class="container-email">
                <label for="email">Email :</label>
                <input type="email" class="form.input" name="email" id="email" placeholder="Email">
            </div>
            <div class="container-password">
                <label for="pass">Mot de passe :</label>
                <input type="password" class="form.input" name="pass" id="pass" placeholder="Mot de passe">
            </div>
            <div class="container-confirm">
                <label for="pass2">Confirmation :</label>
                <input type="password" class="form.input" name="pass2" id="pass2" placeholder="Confirmation de mot de passe">
            </div>
            <button type="submit" class="connexion-button">S'inscrire</button>
            <p>Vous avez déjà un compte ? <a href="connexion.php">Connectez-vous</a></p>
            <span class="follow">Suivez-nous</span>
            <div class="container-logos">
                <a href="#"><img src="./img/connexion/facebook.svg" alt="Logo facebook"></a>
                <a href="#"><img src="./img/connexion/instagram.svg" alt="Logo instagram"></a>
                <a href="#"><img src="./img/connexion/twitter-x.svg" alt="Logo twitter"></a>
            </div>
        </form>
    </main>

</body>

</html>
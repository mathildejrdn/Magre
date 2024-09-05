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
        <section>
            <article class="container-display">
                <p>Avez-vous un compte ?</p>
                <button type="submit" class="connexion-button">Se connecter</button>
            </article>
            <form method="POST">
                <img src="./images/logos/MG logo trans.png" alt="Logo">
                <div class="container-surname">
                    <label for="surname">Nom :</label>
                    <input type="text" class="form.input" name="surname" id="surname" placeholder="Nom">
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
                    <input type="password" class="form.input" name="pass2" id="pass2" placeholder="Confirmation">
                </div>
                <button type="submit" class="connexion-button">S'inscrire</button>

                <div class="container-login">
                    <p>Avez-vous un compte ?</p>
                    <button type="submit" class="connexion-button">Se connecter</button>
                </div>

                <div class="container-logos">
                    <a href="#"><img src="./images/logos/facebook.svg" alt="Logo facebook"></a>
                    <a href="#"><img src="./images/logos/instagram.svg" alt="Logo instagram"></a>
                    <a href="#"><img src="./images/logos/twitter.svg" alt="Logo twitter"></a>
                </div>
            </form>
        </section>
    </main>

</body>

</html>
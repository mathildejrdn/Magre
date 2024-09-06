<?php
// Vérifie que c'est une adresse email conforme pour sécuriser
function ValidateEmail($email) 
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Ici on vérifie que la variable $_POST n'est pas vide
if (!empty($_POST)) {
    if (isset($_POST["name"], $_POST["surname"], $_POST["email"], $_POST["pass"], $_POST["pass2"]) &&
        !empty($_POST["name"]) &&
        !empty($_POST["surname"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["pass"]) &&
        !empty($_POST["pass2"])) 
    {
        // Strip tags du prénom et du nom pour protéger des injections
        $name = strip_tags($_POST["name"]);
        $surname = strip_tags($_POST["surname"]);

        // Vérifie aussi que l'user a mis une vraie adresse email en appelant la fonction établie plus haut
        if (!ValidateEmail($_POST["email"])) {
            die("Ce n'est pas une adresse email valide.");
        }

        // Vérification des deux champs de MDP pass et pass2
        $pass = $_POST["pass"];
        $pass2 = $_POST["pass2"];

        // Doivent être strictement identiques avec l'indicateur ===
        if ($pass === $pass2) {
            $pass = password_hash($pass, PASSWORD_ARGON2ID);
        } else {
            die("Les mots de passe ne correspondent pas.");
        }

        require_once("./connect.php");

        // Requête SQL avec des placeholders
        $sql = "INSERT INTO users (name, surname, email, pass) VALUES (:name, :surname, :email, :pass)";

        $query = $db->prepare($sql);
        $query->bindValue(':name', $name);
        $query->bindValue(':surname', $surname);
        $query->bindValue(':email', $_POST['email']);
        $query->bindValue(':pass', $pass);

        if ($query->execute()) {
            // Redirection vers la page de login
            header("Location: login.php");
            exit();
        } else {
            die('Échec');
        }
    } else {
        die('formulaire incomplet.');
    }
}
?>
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
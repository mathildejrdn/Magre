<?php
// Vérifie que c'est une adresse email conforme pour sécuriser
function ValidateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Ici on vérifie que la variable $_POST n'est pas vide
if (!empty($_POST)) {
    if (
        isset($_POST["email"], $_POST["pass"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["pass"]) 
    ) {
        // Vérifie aussi que l'user a mis une vraie adresse email en appelant la fonction établie plus haut
        if (!ValidateEmail($_POST["email"])) {
            die("Ce n'est pas une adresse email valide.");
        }

        //connexion BDD
        require_once('./connect.php');

        //requête SQL
        $sql = "SELECT * FROM 'user' WHERE 'email' = :email";
        
        //préparation requête
        $query = $db -> prepare ($sql);
    
        $query->bindValue(':email', $_POST['email']);

        //exécution de la requête
        $query->execute() 

        $user = $query->fetch();

        if (!$user) {
            die("l'utilisateur ou/et le mot de passe est invalide");
        }

        //si l'user existe on peut vérifier son mdp
        if (!password_verify)($_POST["pass"], $user["pass"])) 
        {
            die("l'utilisateur ou/et le mot de passe est invalide");            
        }

        //utilisateur et MDP corrects, on continue pour se connecter en stockat dans la session les infos utilisateur
        $_SESSION ["user"] = [
            "user_id" => $user ["id"],
            "name" => $name ["name"],
            "surname" => $surname ["surname"],
            "email" => $email ["email"],
            "role" => $role ["role"] 
        ] ;

        //reconnaissance du rôle de l'utilisateur après la connexion
        if(!$user ["role"] == "admin") {
            $redirectUrl = "../backindex.php";
        } elseif { 
            (!$user ["role"] == "user")
            $redirectUrl= "./index.php" ;
        } else {
            die("aucun rôle n'a été trouvé");
        }

        header(location: $redirectUrl);
        exit ();
        else {
            die('formulaire incomplet');
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
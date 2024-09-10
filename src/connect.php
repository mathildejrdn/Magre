<?php

try {
    $server_name = "db";
    $db_name = "magre";
    $user_name = "magre";
    $password = "magre_password";
    $db = new PDO("mysql:host=$server_name; dbname=$db_name;charset=utf8mb4", $user_name, $password);
} catch (PDOException $e) {
    echo "Echec de connexion :" . $e->getMessage();
}

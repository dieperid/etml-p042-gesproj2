<?php
    // Fichier de connexion à la base de données
    require('config.php');

    //Inintialisation de la session
    session_start();

    // Declaration des variables, (recuperation de l'information mise dans le formulaire)
    $cliNom = $_POST["cliNom"];
    $cliPrenom = $_POST["cliPrenom"];
    $cliNumTel = $_POST["cliNumTel"];
    $cliLocalite = $_POST["cliLocalite"];
    $cliCp = $_POST["cliCp"];
    $cliUsername = $_POST["cliUsername"];
    $cliPassword = $_POST["cliPassword"];
    $cliAvatar = $_POST["cliAvatar"];

    // Hachage du mot de passe
    $hashPassword = password_hash($cliPassword, PASSWORD_DEFAULT); 

    // Enregistrement de l'information inserée dans le formulaire
    try{
    
        // Requête preparée
        $req = "INSERT INTO t_client (cliNom, cliPrenom, cliNumTel, cliLocalite, cliCp, cliUsername, cliPassword, cliAvatar)
        VALUES('$cliNom','$cliPrenom', '$cliNumTel', '$cliLocalite', '$cliCp', '$cliUsername','$hashPassword', '$cliAvatar')";

        // Si la requête fonctionne
        if($bdd->query($req) === TRUE)
        {
            function_alert("Bienvenue");
        }
        else
        {
            function_alert("Echec");
        }  
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    // Affiche un popup d'alerte et redirecionne vers la page d'accueil
    function function_alert($message) {     
        echo "<script>
        alert('$message');
        window.location.href='../../html/index.html';
        </script>";
    }
?>
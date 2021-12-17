<?php
    // Fichier de connexion à la base de données
    require('config.php');

    //Inintialisation de la session
    session_start();

    // Déclaration des variables, (Récuperation des données de connexion)
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    // Requête preparée
    $req = "SELECT idClient, cliUsername, cliPassword, cliAvatar FROM t_client WHERE cliUsername = '$userName'";

    // Execution de la requête
    $reqRun  = mysqli_query($bdd, $req);

    // S'il y a un utilisateur avec ce nom
    if(mysqli_num_rows($reqRun) > 0)
    {
        foreach($reqRun as $infoUser)
        {
            // Verification du mot de passe haché
            $hashPassword = password_verify($_POST["password"], $infoUser['cliPassword']);

            // Si les mots de passe correspondent
            if($hashPassword)
            {
                // Initialise la session
                session_start();

                // Variables de session
                $_SESSION['userName'] = $infoUser['cliUsername'];
                $_SESSION['avatar'] = $infoUser['cliAvatar'];

                // Redirectionne à la page d'accueil
                function_alert("Welcome!"); 
            }
            else
            {
                function_alert("Incorrect password");
            }
        }
    }
    else 
    {
        function_alert("User not found");
    }

    // Affiche un popup d'alerte et redirecionne vers la page d'accueil
    function function_alert($message) {     
        echo "<script>
        alert('$message');
        window.location.href='../index.php';
        </script>";
    }
?>

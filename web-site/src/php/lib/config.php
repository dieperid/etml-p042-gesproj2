<?php 
try{
	// Connexion à MySQL
	$bdd = mysqli_connect("localhost","root","root","db_gesproj2");
}   
    // Message d'erreur si on n'arrive pas à se connecter
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}
?>
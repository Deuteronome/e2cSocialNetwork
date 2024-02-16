<?php
session_start();//première fonction à utiliser - si besoin de la variable $_SESSION
if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
header('../model/model.php');
}
/*travail de controller 
    - définition des variables
    - vérification des droits 
    - récupération des données entrantes ($_SESSION, $_POST, $_GET)
*/

require_once('../view/connexionView.php');
/*rien en dessous - l'appel à la vue marque la fin du controller*/
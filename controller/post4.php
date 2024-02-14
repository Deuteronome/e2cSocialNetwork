<?php
session_start();//première fonction à utiliser - si besoin de la variable $_SESSION

require_once('../model/post4.php');

/*travail de controller 
    - définition des variables
    - vérification des droits 
    - récupération des données entrantes ($_SESSION, $_POST, $_GET)
*/

require_once('../view/postView4.php');
/*rien en dessous - l'appel à la vue marque la fin du controller*/
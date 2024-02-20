<?php
session_start();//première fonction à utiliser - si besoin de la variable $_SESSION

require_once('../model/model.php');



require_once('../view/listeAmiView.php');
/*rien en dessous - l'appel à la vue marque la fin du controller*/
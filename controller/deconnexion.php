<?php
session_start();
session_destroy();
header("Location:../controller/connexion.php");


require_once('../model/model.php');




require_once('../controller/connexion.php');

?>
<?php
session_start();
require_once('../model/model.php');


$pseudo= htmlspecialchars($_POST['username']);
$password= htmlspecialchars($_POST['password']);

if(!empty($pseudo)&& !empty($password)) {
$bdd = connectDb();
$user = recUtilParPseudo($bdd ,$pseudo);

   if($user!=false) {

    if($user['mdp'] == $password) {
        $_SESSION['id'] = $user ['id'];
        $_SESSION['pseudo'] = $user ['pseudo'];

        header('location: ../controller/home.php');

    } else {

            $message = 'mot de passe incorrect';
        
            header("location:../controller/connexion.php?message=$message");
        
    }

   } else {

    $message = 'Utilisateur inexistant';

    header("location:../controller/connexion.php?message=$message");

   }

} else {
    $message = 'Le pseudo et le mot de passe sont obligatoires';

    header("location:../controller/connexion.php?message=$message");
}

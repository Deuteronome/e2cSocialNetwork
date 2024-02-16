<?php
session_start();
require_once('../model/model.php');


$pseudo= htmlspecialchars($_POST['username']);
$password= htmlspecialchars($_POST['password']);
$prenom= htmlspecialchars($_POST['prenom']);
$name= htmlspecialchars($_POST['name']);

 if(!empty($pseudo)&& !empty($password)&& !empty($prenom)&& ($name)){
     $bdd = connectDb();
     
     $newUser = AjoutUilisateur($bdd, $pseudo,$password, $prenom, $name);

     if($newUser) {
        echo "votre compte a bien été crée !";
     } else {
        echo "votre compte n'a pas été crée !";
     }
     

    
} 
    else {

        $message = 'Tous les champs doivent etre completer';
        header("location: ../controller/createutilisateur.php?message=$message");
    
}

 
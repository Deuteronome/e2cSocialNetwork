<?php
session_start();//première fonction à utiliser - si besoin de la variable $_SESSION

require_once('../model/model.php');



/*$bdd=new PDO("mysql:host=127.0.0.1:3306;dbname=reseau_message_e2c;charset=utf8",'e2cmyadmin','TDNe2c');
  
  if(isset($_POST['article_titre'] , $_POST['description'])){
    if(!empty($_POST['article_titre'] && !empty($_POST['description']))){
    $arcticle_titre = htmlspecialchars($_POST['article_titre']);
    $description = htmlspecialchars($_POST['description']);
    $newPost = CreaPost ($bdd,$auteur , $img,$media, $titre,$date,$tag ,$photo);
    if($newPost) {
      echo "votre compte a bien été crée !";
   } else {
      echo "votre post n'a pas été crée !";
   }
   }else{
      $error = 'veuillez remplir tout les champs';
    }
  }*/
  if(isset($_FILES['photo'])){
  $dir ="image/";
  $nameFile = $_FILES['photo']['name'];
  $tmpFile = $_FILES['photo']['tmp_name'];
  $typeFile = explode("." , $nameFile)[1];

  $correct= array("png", 'jpg' , "gif");
  if(in_array($typeFile, $correct)){
   echo "correct type file";

  }else{
    echo"no correct type file";
  }
  }
require_once('../view/createPostView.php');
?>

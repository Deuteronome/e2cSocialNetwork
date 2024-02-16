<?php

/**
 * Fonction de connexion à la base de données
 * 
 * pas de paramètre
 * 
 * retourne un objet PDO
 */
function connectDb() {
    $bdd=new PDO("mysql:host=127.0.0.1:3306;dbname=reseau_message_e2c;charset=utf8",'e2cmyadmin','TDNe2c');
    return $bdd;
}

/*Ensuite les fonction d'accès aux données (CRUD : create, read, update, delete)*/

/*première function : on veut récupérer id, son pseudo, son mot de passe un utilisateur par son pseudo*/


function recUtilParPseudo($bdd, $pseudo) {
    
        $sqlQuery = " SELECT id,pseudo,mdp FROM utilisateur WHERE pseudo = :pseudo ";
        $logStatement = $bdd->prepare($sqlQuery);
        $logStatement->execute([
        'pseudo' => $pseudo
         ]);
        $req = $logStatement->fetch();
        $logStatement->closeCursor();
    
        return $req;

}
function AjoutUilisateur ($bdd, $pseudo, $password, $prenom, $name) {
    
  $sqlQuery = " INSERT INTO utilisateur (pseudo, mdp , prenom , nom) VALUE(:pseudo, :mdp, :prenom, :nom)";
  $logStatement = $bdd->prepare($sqlQuery);
  try {
    $logStatement->execute([
      'pseudo' => $pseudo,
      'nom' => $name,
      'prenom' => $prenom,
      'mdp'  => $password
      ]);
  } catch(Exception $e) {
    return false;
  }
  
  
  $logStatement->closeCursor();

  return true;

}





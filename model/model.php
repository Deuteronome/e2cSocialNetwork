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
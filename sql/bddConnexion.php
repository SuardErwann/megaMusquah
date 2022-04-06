<?php
//constantes de connexion
const HOST = '127.0.0.1';
const PORT = '3307';
const DBNAME ='musquash_test_commun';
const CHARSET = 'utf8';

//Login et MDP
const LOGIN = 'root';
const MDP = '';

//se connecter à la BDD
function getBddConnexion(){  
    

    $dsn = 'mysql:host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME .';charset=' . CHARSET;

    //test de $dsn
    //var_dump('$dsn = ' . $dsn);
    //echo 'Connexion bdd OK <br><br>';
    try{
        $cnx = new PDO($dsn, LOGIN, MDP);
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnx;
    }
    catch (PDOException $ex){
        die('Erreur : ' . $ex->getMessage());
    }
}


?>
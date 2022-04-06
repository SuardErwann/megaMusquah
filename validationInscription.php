<?php
session_start();
require('./sql/bddConnexion.php');

// Requetes de verification login et mail
$verifLogin = 'select count(*) as \'nb_login\' from authentification where login_authentification = :login';
$verifMail = 'select count(*) as \'nb_mail\' from authentification where mail_authentification = :mail';
// Verif ID + variable du futur ID
$idArray = [];
$verifId = 'SELECT id_utilisateur FROM utilisateur;';
$idUtilisateur = 1;


// On compte le nombre de lignes contenant le login
$cnx = getBddConnexion();
$stmt = $cnx->prepare($verifLogin);
$stmt->bindParam(':login', $_POST['login']);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$row = $stmt->fetch();
$nb_login = $row['nb_login'];

// On coupe si le login existe
if($nb_login > 0){
    echo '<p>Le login "'. $_POST['login'] .'" existe déjà !</p>
    <br><br>
    <form action="/index.php" method="post">
        <input type="submit" value="Retour à l\'accueil">
    </form>';
}

// Sinon, on verifie le mail 
else{
    // On compte le nombre de lignes contenant le mail
    $cnx = getBddConnexion();
    $stmt = $cnx->prepare($verifMail);
    $stmt->bindParam(':mail', $_POST['mail']);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $row = $stmt->fetch();
    $nb_mail = $row['nb_mail'];

    // On coupe si le mail existe
    if($nb_mail > 0){
        echo '<p>Le mail "'. $_POST['mail'] .'" possède déjà un compte chez Musquash</p>
        <br><br>
        <form action="/index.php" method="post">
            <input type="submit" value="Retour à l\'accueil">
        </form>';
    }

    // On peut lancer l'inscription en BDD
    else{
        // Check ID
        $cnx = getBddConnexion();
        $stmt = $cnx->prepare($verifId);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $stmt->fetch()){
            array_push($idArray, $row['id_utilisateur']);
        }
        
        // Vérification longueur de l'array, si elle est vide l'ID reste 1
        $idArrayLength = count($idArray);
        if($idArrayLength > 0){
            for($i = 0; $i<$idArrayLength; $i++){
                if(array_key_exists(($i+1), $idArray) == false ||($idArray[$i] + 1) != $idArray[($i+1)]){
                    
                    $idUtilisateur = ($idArray[$i] + 1);
                    break;
                }
            }
        }
        
        
        try{
            // Requete enregistrement BDD
            $enregitrerClient = 
            'INSERT INTO utilisateur (`id_utilisateur`,`nom_utilisateur`, `prenom_utilisateur`, `date_naissance`, `groupe_utilisateur`) 
            VALUES (:id, :nom, :prenom, :dateNaissance, NULL);
            
            INSERT INTO authentification (`mail_authentification`, `mdp_authentification`, `login_authentification`, `role_authentification`, `id_utilisateur`)
            VALUES (:mail, :mdp, :login, "utilisateur", :id);
            ';

            // Inscription dans la bdd
            $stmt = $cnx->prepare($enregitrerClient);
            $stmt->bindParam(':id', $idUtilisateur);
            $stmt->bindParam(':nom', $_POST['nom']);
            $stmt->bindParam(':prenom', $_POST['prenom']);
            $stmt->bindParam(':dateNaissance', $_POST['dateNaissance']);
            $stmt->bindParam(':mail', $_POST['mail']);
            $stmt->bindParam(':login', $_POST['login']);
            $stmt->bindParam(':mdp', $_POST['mdp']);
            $stmt->execute();
            echo '<p>Félicitations '. $_POST['login'] .', vous êtes inscrit</p>
            <br><br>
            <form action="/index.php" method="post">
                <input type="submit" value="Retour à l\'accueil">
            </form>';
        }
        catch(PDOException $err){
            die('Erreur : ' . $err->getMessage());
        }
    }
}
?>
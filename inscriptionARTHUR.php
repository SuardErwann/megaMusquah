<?php
/*
* inscription.php
* page d'inscription du projet musquash
*
* @auteur: A Soupa
* @date: 03/2022
*/
    session_start();
?>

<!DOCTYPE html>
<html lang="fr-FR">

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>formulaire</title>
<!-- inclus bootstrap via CDN = Content Delivery Network (réseau de distribution de contenu) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Accueil</a>
        <a class="navbar-brand" href="inscription.php">Inscription</a>
    </nav>

    
<!-- Contenu -->

  <div class="form-control">
    <form method="post" action="traitement_inscription.php">
    Entrez votre login: <input type="text" name="login"  required class="w-25 form-control aria-describedby=aideLogin">
    <small id="aideLogin" class="form-text">Votre login doit contenir au moins 8 caractères sans espace</small></br></br>
    Entrez votre mot de passe: <input type="password" name="password"  required class="w-25 form-control aria-describedby=aidePasswd">
    <small id="aidePasswd" class="form-text">Votre mot de passe doit contenir au moins 8 caractères avec 1 majuscule, 1 minuscule et 1 chiffre</small></br></br>
    Confirmez votre mot de passe: <input type="password" name="confpassword"  required class="w-25 form-control"></br>
    Entrez votre email:  <input type="email" name="email"  required class="w-25 form-control"></br>
    Entrez votre date de naissance: <input type="date" name="naissance" required></br>

    <button class="btn btn-outline-success" type="submit"> valider </button>
    <h1>TEST</h1>
    </form>
  </div>

 






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Fin du contenu -->

</body>
</html>
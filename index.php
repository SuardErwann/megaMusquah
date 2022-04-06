<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/reset.css">
  <title>Musquash</title>
</head>

<body>

  <!-- AJOUT INSCRIPTION MOD ERWANN -->
  <div id="testPopUpInscription" class="cachee">
  <form  action="/validationInscription.php" method="POST" onsubmit="return validationInscription()">
    <h2>Formulaire d'inscription</h2>
    <br><br>
    <label for="login">Login : </label>
    <input required type="text" maxlength="20" name="login" id="login"><br><br>
    
    <label for="nom">Nom : </label>
    <input type="text" name="nom" id="nom" maxlength="30" required>
    <label for="prenom">Prenom : </label>
    <input type="text" name="prenom" id="prenom" maxlength="30" required><br><br>
    
    <label for="dateNaissance">Date de naissance : </label>
    <input required type="date" name="dateNaissance" id="dateNaissance"><br><br>
    
    <label for="mail">Mail : </label>
    <input type="email" name="mail" id="mail" maxlength="30" required><br><br>
    
    <label for="mdp">Mot de passe : </label>
    <input required type="password" minlength="8" maxlength="50" name="mdp" id="mdp">
    <label for="mdpConfirm">Confirmation du MDP : </label>
    <input required type="password" minlength="8" maxlength="50" name="mdpConfirm" id="mdpConfirm"><br><br>
    
    
    <input type="submit" value="S'inscrire" id="validerInscription">
  </form>
    
  </div>
  <!-- Navbar -->
  <nav>
    <!-- Logo Musquash -->
    <a href="index.html" class="logo-musquash-navbar">
      <img src="./ressources/images/logo_musquash.svg" alt="Logo_Musquash">
    </a>
    <button class="btn-profile">
      <img src="./ressources/icons/icone-profile.svg" alt="icone-profile">
    </button>
      <!-- Container bouton ISCRIPTION / CONNEXION  -->
      <!-- ENLEVE PAR ERWANN -->
      <!-- <form name=" btnInscription/Connexion" action="" class="nav-btn-container" method="POST"> -->
      <div class="nav-btn-container">
      <!-- Bouton s'inscrire -->
      <div id="btnInscription" class="btn-inscription">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path
            d="M17.5 10H5.83333C5.61232 10 5.40036 9.9122 5.24408 9.75592C5.0878 9.59964 5 9.38768 5 9.16667V5.83333C5 5.61232 5.0878 5.40036 5.24408 5.24408C5.40036 5.0878 5.61232 5 5.83333 5H17.5C17.721 5 17.933 5.0878 18.0893 5.24408C18.2455 5.40036 18.3333 5.61232 18.3333 5.83333V9.16667C18.3333 9.38768 18.2455 9.59964 18.0893 9.75592C17.933 9.9122 17.721 10 17.5 10ZM6.66667 8.33333H16.6667V6.61667H6.66667V8.33333Z"
            fill="#F96244" /><path
            d="M17.5 11.7334H5.83333C5.61232 11.7334 5.40036 11.8212 5.24408 11.9775C5.0878 12.1338 5 12.3457 5 12.5667V15.8334C5 16.0544 5.0878 16.2664 5.24408 16.4227C5.40036 16.5789 5.61232 16.6667 5.83333 16.6667H15.3L18.3333 13.5834V12.5667C18.3333 12.3457 18.2455 12.1338 18.0893 11.9775C17.933 11.8212 17.721 11.7334 17.5 11.7334ZM16.6667 15.0001H6.66667V13.3334H16.6667V15.0001Z"
            fill="#F96244" /><path
            d="M9.21699 26.2584V26.2084L9.48366 25.0501H3.33366V3.33341H20.0003V11.8751L21.667 10.3001V2.50008C21.667 2.27907 21.5792 2.06711 21.4229 1.91083C21.2666 1.75455 21.0547 1.66675 20.8337 1.66675H2.50033C2.27931 1.66675 2.06735 1.75455 1.91107 1.91083C1.75479 2.06711 1.66699 2.27907 1.66699 2.50008V25.8334C1.66699 26.0544 1.75479 26.2664 1.91107 26.4227C2.06735 26.579 2.27931 26.6667 2.50033 26.6667H9.16699C9.17386 26.5296 9.19057 26.3932 9.21699 26.2584Z"
            fill="#F96244" /><path
            d="M18.3336 15.9751L17.6836 16.6334C17.8449 16.6002 17.9927 16.5199 18.1083 16.4028C18.224 16.2856 18.3024 16.1368 18.3336 15.9751Z"
            fill="#F96244" /><path
            d="M5 22.4499C5 22.6709 5.0878 22.8829 5.24408 23.0392C5.40036 23.1955 5.61232 23.2833 5.83333 23.2833H9.86667L10.1167 22.1999L10.225 21.7416V21.6999H6.66667V19.9999H11.95L13.6167 18.3333H5.83333C5.61232 18.3333 5.40036 18.421 5.24408 18.5773C5.0878 18.7336 5 18.9456 5 19.1666V22.4499Z"
            fill="#F96244" /><path
            d="M27.9087 13.8916L25.1003 11.0832C24.9757 10.9583 24.8276 10.8591 24.6646 10.7914C24.5016 10.7238 24.3268 10.689 24.1503 10.689C23.9738 10.689 23.7991 10.7238 23.6361 10.7914C23.473 10.8591 23.325 10.9583 23.2003 11.0832L11.7754 22.5749L10.8337 26.5832C10.7984 26.7562 10.7976 26.9343 10.8314 27.1076C10.8651 27.2808 10.9326 27.4457 11.0302 27.5928C11.1277 27.7398 11.2533 27.8662 11.3998 27.9647C11.5462 28.0632 11.7107 28.1318 11.8837 28.1666C11.9696 28.1752 12.0561 28.1752 12.142 28.1666C12.2441 28.1832 12.3482 28.1832 12.4504 28.1666L16.492 27.2749L27.9087 15.8332C28.0334 15.7093 28.1324 15.5619 28.1999 15.3996C28.2675 15.2373 28.3022 15.0632 28.3022 14.8874C28.3022 14.7116 28.2675 14.5375 28.1999 14.3752C28.1324 14.2128 28.0334 14.0655 27.9087 13.9416V13.8916ZM15.642 25.7582L12.592 26.4332L13.3337 23.4082L21.9003 14.7499L24.2503 17.0999L15.642 25.7582ZM25.192 16.1582L22.842 13.8082L24.167 12.4999L26.5337 14.8666L25.192 16.1582Z"
            fill="#F96244" />
        </svg>

        <!-- <input id="btnInscription" type="submit" name="inscription" value="S'INSCRIRE"> -->
        <p>S'INSCRIRE</p>
      </div>
      <!-- Bouton se connecter -->
      <div class="btn-connexion">
        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M11 22V23.375C11 24.469 11.4346 25.5182 12.2082 26.2918C12.9818 27.0654 14.031 27.5 15.125 27.5H24.75C25.844 27.5 26.8932 27.0654 27.6668 26.2918C28.4404 25.5182 28.875 24.469 28.875 23.375V9.625C28.875 8.53098 28.4404 7.48177 27.6668 6.70818C26.8932 5.9346 25.844 5.5 24.75 5.5H15.125C14.031 5.5 12.9818 5.9346 12.2082 6.70818C11.4346 7.48177 11 8.53098 11 9.625V11M17.875 22L23.375 16.5L17.875 22ZM23.375 16.5L17.875 11L23.375 16.5ZM23.375 16.5H4.125H23.375Z" />
        </svg>
        <!-- <input type="submit" name="connexion" value="SE CONNECTER"> -->
        <p>SE CONNECTER</p>
      </div>
      <!-- </form> -->
      </div>
  </nav>




  <!--bandeau promo-->
  <div class="hero-container">

    <div class="presentation">
      <h1>Le complexe multi sport Musquash </h1>
      <p>
        vous accueille et vous coach <br>
        dans ses 17 salles. <br>
        Squash, gym, musculation.
      </p>
    </div>
    <div class="offre-promos">
      <div class="offre1">
        <h2>Un superbe stylo 4 couleurs offert</h2>
        <p>pour toute nouvelle adhésion !!!</p>
      </div>
      <div class="offre2">
        <h2> Jusqu’au 31 Avril !</h2>
        <br>
        <h4>le 11 ieme cours privé de Squash est offert ! </h4><br>
        <i>(offre valable pour ce trimestre)</i>


      </div>
    </div>
  </div>

  <!--contenaire vitrine-->
  <div class="navigation">
    <!-- <h1>Vitrine</h1> -->

      <a class="nav bleu gauche" href="#Muscu" id="heroMuscu">
        <h1>MUSCU</h1>
        <img src="./ressources/illustrations/muscu.svg" class="illu-hero">
      </a>

      <a href="#Squash" class="nav orange" id="heroSquash">
        <h1>SQUASH</h1>
        <img src="./ressources/illustrations/squash.svg" class="illu-hero">
      </a>

      <a href="#Gym" class="nav bleu droite" id="heroGym">
        <h1>GYM</h1>
        <img src="./ressources/illustrations/gym.svg" class="illu-hero">
      </a>
  </div>


  <div class="titre-section">
    <div class="img-titre">
      <img src="./ressources/icons/M-Logo.svg" id="logoFormule">
    </div>
    <h1>Nos formules</h1>
  </div>

  <!--contenaire formule-->
  <div class="container-formules">
    <!--contenaire squash -->
    <balise id="Squash"></balise>
    <div class="formule squash">
      <div class="infos">
        <div class="titre">
          <img src="./ressources/icons/icon-squash.svg" alt="">
          <h1>Squash</h1>
        </div>
        <div class="text">
          INFOS <br>
          -6 terrains<br>
          <br><br>
          Offres / Formules<br>
          -Adhérent terrain<br>
          -adhérent cours perso<br>
          -adhérent cours groupe
          <br><br>
          Tarifs<br>
          -a PARTIR DE 10€
        </div>
      </div>

      <div class="images">
        <img src="./ressources/images/image_squash.png" alt="image de courts de squash">
      </div>
      <div class="nos-adhesions" style="grid-column-end: span 2;">
        <!-- TODO ARRANGER CETTE FORMULE -->
        <!-- LES BOUTONS DEPASSENT -->
        <h3 class="btn-blanc-bleu">&nbsp Plus d'infos &nbsp</h3>
        <h1 class="btn-orange">&nbsp NOS ADHÉSIONS &nbsp</h1>
        <h3 class="btn-blanc-bleu">&nbsp Planing Réservation &nbsp</h3>
      </div>



    </div>

    <balise id="Muscu"></balise>
    <div class="formule muscu">
      <div class="infos">
        <div class="titre">
          <img src="./ressources/icons/icon-muscu.svg" alt="">
          <h1>Musculation</h1>
        </div>
        <div class="text">
          INFOS <br>
          -6 terrains<br>
          <br>
          Offres / Formules<br>
          -Adhérent terrain<br>
          -adhérent cours perso<br>
          -adhérent cours groupe
          <br><br>
          Tarifs<br>
          -a PARTIR DE 10€
        </div>
      </div>

      <div class="Images">
        <img src="./ressources/images/image_muscu.png" alt="" srcset="">
        <div class="nos-adhesions">
          <h1 class="btn-orange">&nbsp;ADHÉRER&nbsp;</h1>
        </div>
      </div>



    </div>

    <balise id="Gym"></balise>
    <div class="formule gym">
      <div class="infos">
        <div class="titre">
          <img src="./ressources/icons/icon-gym.svg" alt="">
          <h1>Gym</h1>
        </div>
        <div class="text">
          INFOS <br>
          -6 terrains<br>
          <br><br>
          Offres / Formules<br>
          -Adhérent terrain<br>
          -adhérent cours perso<br>
          -adhérent cours groupe
          <br><br>
          Tarifs<br>
          -a PARTIR DE 10€
        </div>
      </div>

      <div class="Images">
        <img src="./ressources/images/image_gym.png" alt="" srcset="">
        <div class="nos-adhesions">
          <h1 class="btn-orange">&nbsp;ADHÉRER&nbsp;</h1>
        </div>
      </div>



    </div>
  </div>

  <!--contenaire service vente/loc -->
  <div class="titre-section">
    <div class="img-titre">
      <img src="./ressources/icons/M-Logo.svg" id="logoFormule">
    </div>
    <h1>Nos Services</h1>
  </div>

  <div class="container-services">
    <div class="services-baisc">
      Prix materiel non adhérent
      <div class="service-item">
        <p>cardiomètre</p>
        <span>10€/j</span>
      </div>
    </div>
    <div class="services-adherent">
      Prix materiel adhérent
      <div class="service-item">
        <p>cardiomètre</p>
        <span>5€/j</span>
      </div>
    </div>
  </div>


  <footer>

  </footer>



  <script src="main.js"></script>
</body>


</html>
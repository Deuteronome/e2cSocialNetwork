<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/bootstrap.bundle.js"></script>
   
</head>
<body>


  
  <nav class="container-fluid">
    <div class="row border border-3 justify-content-between my-2 align-items-center">
        <div class="col-2">
            <img class="img-fluid"  src="../asset/icone/logo.png"  alt="">
        </div>
        <div class="col-2 mt-4 position-absolute top-0 start-100 translate-middle-x">
           <a href="../controller/profil.php"><img  class="img-fluid"src="../asset/pdp/pdp-thomas.jpeg" alt="" width="70" >
           </a>
        </div>
        <div class="col-1 mt-4 position-absolute top-0 start-100 translate-middle-x">
           <a href="../controller/createPost.php"><img  class="img-fluid"src="../asset/icone/ajout-post.png" alt="" width="70" >
           </a>
        </div>
       <div class=" col-3">
        <h2 class=" text-center">Bienvenue <?php echo $_SESSION["pseudo"]?></h2>
        </div>
        
        
        <div class="col-2 mt-0 rounded-end rounded-bottom  ">
         <a class="bouton" href="../controller/listeAmi.php">
          <img src="../asset/icone/message.webp"  alt=""  class="img-fluid mb-3"></a>

          <div class="row mt-0 justify-content-between align-items-center">
              <a href="deconnexion.php">
                <input type="button" value="Se déconnecter"></input>
              </a>
          </div> 
          
          
          
        </div>
    </div>
  </nav>
  <div class="row">

  <div class="col-lg-3 col-12" style="background-color:#aaa;">
  
  <h2> <img class="rounded-circle" src="../asset/icone/olivier.png"  width='70' height='70' alt="" > Olivier burcker</h2>
  <a class="bouton" href="../controller/post.php">
  <img src="../asset/icone/prepanum.jpg"  class="img-fluid" alt="" srcset=""></a>
  <h3>La Prépa Numérique arrive</h3>
  <small>La Prépa Numérique larrive a roubaix en mai 2024. <br> decouvrer le monde du numerique pour une durée de 4 mois <br>   </small>

  
  </div>
  
  
  <div class="col-lg-3 col-12" style="background-color:#aaa;" >
  

  <h2><img class="rounded-circle" src="../asset/icone/sura.jpg"  width='70' height='70' alt="" >Sura Jamil-Hussain</h2>
  <a href="../view/postView2.php">
  <img a src="../asset/icone/hands-laptop-search-business-meeting-260nw-2197629005.webp"  class="img-fluid" alt="" srcset="" width="1000">
  </a>
  <h3>Remise a niveau</h3>
  <small>la remise a niveau est de retours dés jeudi 29 fevrier <br> </small>
  </div>
 
  <div class="col-lg-3 col-12" style="background-color:#aaa;">
  <h2> <img class="rounded-circle" src="../asset/icone/German.png"  width='70' height='70' alt="" > German  Leon-Quero</h2>
  <a href="../view/postView3.php">
    <img src="../asset/icone/Sans titre.jpeg" class="img-fluid" alt="" srcset="" width="2000">
  </a>
  <small>boulanger prends en stage!!</small>
  </div>
  
  <div class="col-lg-3 col-12" style="background-color:#aaa;">
  <h2><img class="rounded-circle" src="../asset/icone/loic.png"  width='70' height='70' alt="" >loic Ducarme</h2>
  

  <img src="../asset/icone/outils-sport_53876-138077.avif" class="img-fluid" alt="" srcset="" width="1000"  ></a>
   
 
  <small>en sport cette semaine...</small>
  </div>
  
</div>
<div class="row">
  
  <div class="d-none d-lg-block col-1"></div>
  <div class="support-scrollsnap"></div>
</div>

    <!--
    </div>
    <img class="img"  src="../asset/icone/logo.png"  alt="">

    <div class="message">
        <img src="../asset/icone/message.webp"  class="rounded-5" alt=""  class="img-fluid" width="60" height="60">
    </div>-->
 



</body>


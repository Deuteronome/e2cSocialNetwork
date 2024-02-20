<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><!-- Titre de la page - en règle général une variable venant du controller --></title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/bootstrap.bundle.js"></script>
</head>
<body class="lineaire-create">

<nav class="container-fluid">
    <div class="row border border-3 justify-content-between my-2 align-items-center">
        <div class="col-2">
            <img class="img-fluid"  src="../asset/icone/logo.png"  alt="">
        </div>
        <h2 class="col-4 text-center">Le post de  <?php echo $_SESSION["prenom"] ?></h2>
        
        <div class="col-2 mt-0 rounded-end rounded-bottom  ">
         <a class="bouton" href="../controller/listeAmi.php">
          <img src="../asset/icone/message.webp"  alt=""  class="img-fluid mb-3"></a>
          
          
          
        </div>
    </div>
  </nav>
  <body>
  <div class="container-fluid">
    <form method="post" action="../controller/create-post.php">
      <div class="row justify-content-center">
        <div class="col-10">
          <label for="photo" class="from-label mt-3"><img src="../asset/pictogrames/ajout-photo" alt="" srcset=""> Photos :</label>
          <input type="file" name="photo" id="carre-photo" class="form-control ">
          <label for="titre" class="form-label mt-3">Titre</label>
          <input type="text" name="article_titre" id="titre" class="form-control" placeholder="Titre">
          <label for="description" class="form-label mt-3">Description</label>
          <textarea name="description" id="description" rows="10" class="form-control"></textarea>
        </div>
      </div>
    
  </div>

  <div class="row justify-content-center mt-5">
    <input type="submit" class="btn  btn-light col-2" value="Poster" >

  </div>
  <br>
 
    
</body>
</html>
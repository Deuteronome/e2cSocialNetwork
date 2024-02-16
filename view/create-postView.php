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

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E2C</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<body>
  <div class="container-fluid">
    <form method="post" action="../controller/createPost.php">
      <div class="row justify-content-center">
        <div class="col-10">
          <label for="carre-photo" class="from-label mt-3"><img src="../asset/pictogrames/ajout-photo" alt="" srcset=""> Photos :</label>
          <input type="file" name="carre-photo" id="carre-photo" class="form-control ">
          <label for="titre" class="form-label mt-3">Titre</label>
          <input type="text" name="titre" id="titre" class="form-control">
          <label for="description" class="form-label mt-3">Description</label>
          <textarea name="description" id="description" rows="10" class="form-control"></textarea>
        </div>
      </div>
    
  </div>

  <div class="row justify-content-center mt-5">
    <input type="submit" class="btn  btn-light col-2" value="Poster">
  </div>
    
</body>
</html>
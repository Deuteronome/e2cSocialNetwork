<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/connexion.css">
    <script src="../script/bootstrap.bundle.js"></script>
    <script src="../script/script.js"></script>
</head>
<body>
    <img src="../asset/inscription.connection/connexion.png" class="img-fluid"  alt="" srcset="">
    
    
    <form class="form" method="post" action="../controller/utilisateur.php">
     <h2 class="texte">Ravis de vous revoir</h2>
      <label  for="username">pseudo:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">mot de passe:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit"  class="connexion btn btn-light" value="Se Connecter"> 
      <a  class="text-decoration-none " href="../view/inscriptionView.php">je n'ai pas de compte</a>
    </form>
    
    
</body>
</html>
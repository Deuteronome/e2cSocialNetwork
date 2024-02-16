<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/connexion2.css">
    <script src="../script/bootstrap.bundle.js"></script>
    <script src="../script/script.js"></script>
</head>
<body>
    <a class="bouton" href="../controller/home.php">
    <img src="../asset/inscription.connection/connexion.png" class="img-fluid"  alt="" srcset=""></a>
    
    <H4 class="text-center">photo de profil:</H4>
    
	
    <div class=" text-center">


    <label for="avatar"><img src="../asset/inscription.connection/4211763.png" class="text-center"  alt="" srcset="" width="400"></label>

    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"  style="display:none"/>
        
    </div>
    <form action="#" method="post">
        <div class="container-fluid">
            <h4 class="row justify-content-center"><p class="col text-center">êtes vous référent ?</p> </h4>
        <div class="row justify-content-center">
            <div class="col-2 text-center ">
                <input type="radio" id="oui" name="referent" value="true" />
                <label for="oui">Oui</label>
            </div>

            <div class="col-2 text-center">
                    <input type="radio" id="non" name="referent" value="false" checked />
                    <label for="non">non</label>
            </div>
            
        </div>
        <div class="row justify-content-center my-2">
            <input type="submit" class="connexion btn btn-primary col-3 text-center" value="Terminer">
        </div>
    </form>
</body>
</html>
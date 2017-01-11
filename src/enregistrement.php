<!DOCTYPE html>
    <html>
<head>
    <meta HTTP-EQUIV="CONTENT-TYPE" content="text/html; charset=UTF-8" >
    <meta name="AUTHOR" content="Maxime Lecottier">
    <meta name="DESCRIPTION" content="script php postgres">
    <meta name="KEYWORDS" content="Lecottier, informatique, ENSICAEN">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="ajax.js"></script>
    <title>Admin</title>
</head>
<body>
<header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/projet_intensif/src/catalogue.php">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/projet_intensif/src/enregistrement.php">Inscription</a></li>
      <li><a href="http://localhost/projet_intensif/src/connexion.php">Connexion</a></li>
    </ul>
  </div>
</nav>     
</header>
<div class="text-center">
<h3>
Bienvenue sur la page d'administration de WeGuide
</h3>
</div>
<div class="container">
      <form class="form-horizontal" method="post" name="select_inscription" onSubmit="return sendRequest()">
               <div class="form-group">
                    <label class="control-label col-sm-2" for="nom" >Nom de l'établissement:</label>
                    <div class="col-sm-10">
                        <input type="nom" class="form-control" name="nom" placeholder="Nom">
                    </div>
               </div> 
               <div class="form-group">
                    <label class="control-label col-sm-2" for="adresse">Adresse :</label>
                    <div class="col-sm-10">
                    <input type="adresse" class="form-control" name="adresse" placeholder="Adresse">
                    </div>
               </div>
               <div class="form-group">
                    <label class="control-label col-sm-2" for="zip">Code Postal :</label>
                    <div class="col-sm-10">
                        <input type="zip" class="form-control" name="zip" placeholder="Code Postal">
                    </div>
               </div>
               <div class="form-group">
                    <label class="control-label col-sm-2" for="ville">Ville :</label>
                    <div class="col-sm-10">
                    <input type="ville" class="form-control" name="ville" placeholder="Ville">
                    </div>
               </div>
               <div class="form-group">
                    <label class="control-label col-sm-2" for="pays">Pays :</label>
                    <div class="col-sm-10">
                    <input type="pays" class="form-control" name="pays" placeholder="Pays">
                    </div>
               </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="prenom">Téléphone :</label>
                    <div class="col-sm-10">
                    <input type="telephone" class="form-control" name="telephone" placeholder="Téléphone">
                    </div>
               </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email :</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
               </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
          </form>
        </div>
     </body>  
</html>

<!-- zeriuzeroi -->


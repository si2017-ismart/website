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
      <a class="navbar-brand" href="http://localhost/projet_intensif/catalogue.php">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/projet_intensif/enregistrement.php">Inscription</a></li>
      <li><a href="http://localhost/projet_intensif/connexion.php">Connexion</a></li>
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
      <form method="post" name="select_inscription" onSubmit="return sendRequest()">
               <div class="form-group">
                    <label for="nom" >Nom :</label>
                    <input type="nom" class="form-control" name="nom" placeholder="Nom">
               </div> 
               <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="prenom" class="form-control" name="prenom" placeholder="Prenom">
               </div>
               <div class="form-group">
                    <label for="adresse">Adresse :</label>
                    <input type="adresse" class="form-control" name="adresse" placeholder="Adresse">
               </div>
               <div class="form-group">
                    <label for="cp">Code Postal :</label>
                    <input type="cp" class="form-control" name="cp" placeholder="Code Postal">
               </div>
               <div class="form-group">
                    <label for="ville">Ville :</label>
                    <input type="ville" class="form-control" name="ville" placeholder="Ville">
               </div>
               <div class="form-group">
                    <label for="pays">Pays :</label>
                    <input type="pays" class="form-control" name="pays" placeholder="Pays">
               </div>
               <div class="text-center">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
          </form>
        </div>
     </body>  
</html>


<!DOCTYPE html>
    <html>
<head>
    <meta HTTP-EQUIV="CONTENT-TYPE" content="text/html; charset=UTF-8" >
    <meta name="AUTHOR" content="Maxime Lecottier">
    <meta name="DESCRIPTION" content="script php postgres">
    <meta name="KEYWORDS" content="Lecottier, informatique, ENSICAEN">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <li><a href="http://localhost/projet_intensif/enregistrement.php">Inscription</a></li>
      <li class="active"><a href="http://localhost/projet_intensif/connexion.php">Connexion</a></li>
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
                    <label for="identifiant">Identifiant :</label>
                    <input type="text" class="form-control" name="identifiant" placeholder="Identifiant">
               </div>
               <div class="form-group">
                    <label for="mot de passe">Mot de passe :</label>
                    <input type="password" class="form-control" name="mot de passe" placeholder="Mot de passe">
               </div>
               <div class="text-center">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
          </form>
          </div>
     </body>  
</html>


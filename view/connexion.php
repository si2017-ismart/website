<!DOCTYPE html>
    <html>
<head>
    <meta HTTP-EQUIV="CONTENT-TYPE" content="text/html; charset=UTF-8" >
    <meta name="AUTHOR" content="Maxime Lecottier">
    <meta name="DESCRIPTION" content="script php postgres">
    <meta name="KEYWORDS" content="Lecottier, informatique, ENSICAEN">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../webroot/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../webroot/css/catalogue.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Admin</title>
</head>
<body>
<header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/projet_intensif/view/catalogue.php">WeGuide</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="http://localhost/projet_intensif/view/enregistrement.php">Inscription</a></li>
      <li class="active"><a href="http://localhost/projet_intensif/view/connexion.php">Connexion</a></li>
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
 <form class="form-horizontal" method="post" action="http://localhost/projet_intensif/app/select_connexion.php" onSubmit="return sendRequest()">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="identifiant">Identifiant :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="identifiant" placeholder="Identifiant">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="password">Mot de passe :</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
  </form>
          </div>
     </body>  
</html>


<!DOCTYPE html>
    <html>
<head>
    <meta HTTP-EQUIV="CONTENT-TYPE" content="text/html; charset=UTF-8" >
    <meta name="AUTHOR" content="Maxime Lecottier">
    <meta name="DESCRIPTION" content="script php postgres">
    <meta name="KEYWORDS" content="Lecottier, informatique, ENSICAEN">
    <link href="../webroot/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../webroot/css/catalogue.css" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
<header>
<nav class="nav-justified">
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/projet_intensif/view/etablissement.php">WeGuide</a>
    </div>
    <ul class="nav navbar-nav" >
      <li><a id="connexion" href="http://localhost/projet_intensif/view/intervenants.php" style="color:#FFFFFF">Intervenants</a></li>
      <li><a href="http://localhost/projet_intensif/view/beacons.php" style="color:#000000; background-color: #FFFFFF !important">Beacons</a></li>
      <li><a od="connexion" href="http://localhost/projet_intensif/view/statistiques.php" style="color:#FFFFFF">Statistiques</a></li>
      <li><a id="deconnexion" href="http://localhost/projet_intensif/app/deconnexion.php">Déconnexion</a></li>
    </ul>
  </div>
</nav>
</header>
<div class="text-center" id="titre">
<h3>
Bienvenue sur la page d'administration de WeGuide
</h3>
</div>
<div class="container">
 <form class="form-horizontal" method="post" action="http://localhost/projet_intensif/app/script_ajout_beacon.php" onSubmit="return sendRequest()">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="identifiant">Identifiant :</label>
                    <div class="col-sm-10">
                        <input type="identifiant" class="form-control" name="identifiant" placeholder="Identifiant">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nom">Nom du beacon :</label>
                    <div class="col-sm-10">
                        <input type="nom" class="form-control" name="nom" placeholder="Nom">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="position">Position :</label>
                    <div class="col-sm-10">
                        <input type="x" class="form-control" name="x" placeholder="x">
                        <input type="y" class="form-control" name="y" placeholder="y">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="portee">Portée :</label>
                    <div class="col-sm-10">
                        <input type="portee" class="form-control" name="portee" placeholder="Portée">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
  </form>
          </div>
          <footer>
              &copyWeGuide
          </footer>
     </body>
</html>

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
        <li><a href="http://localhost/projet_intensif/view/intervenants.php" style="color:#000000; background-color: #FFFFFF !important">Intervenants</a></li>
        <li><a id="connexion" href="http://localhost/projet_intensif/view/beacons.php" style="color:#FFFFFF">Beacons</a></li>
        <li><a id="connexion" href="http://localhost/projet_intensif/view/statistiques.php" style="color:#FFFFFF">Statistiques</a></li>
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
      <form class="form-horizontal" method="post" action="http://localhost/projet_intensif/app/script_ajout_intervenant.php" onSubmit="return sendRequest()">
        <div class="form-group">
            <label class="control-label col-sm-2" for="nom">Nom :</label>
            <div class="col-sm-10">
                <input type="nom" class="form-control" name="nom" placeholder="Nom">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="prenom">Prénom :</label>
            <div class="col-sm-10">
                <input type="prenom" class="form-control" name="prenom" placeholder="Prenom">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="id">Id :</label>
            <div class="col-sm-10">
                <input type="id" class="form-control" name="id" placeholder="Id">
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
    <footer>
        &copyWeGuide
    </footer>
  </body>
</html>

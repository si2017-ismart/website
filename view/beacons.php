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
            <li><a id="connexion" href="http://localhost/projet_intensif/view/statistiques.php" style="color:#FFFFFF">Statistiques</a></li>
            <li><a id="deconnexion" href="http://localhost/projet_intensif/app/deconnexion.php">Déconnexion</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="text-center" id="titre">
      <h3>
        Liste des beacons
      </h3>
    </div>
    <div class="container">
      <?php include('../app/affichage_liste_beacons.php'); ?>
    </div>
    <div>
      <form action="http://localhost/projet_intensif/view/ajouter_beacon.php" class="text-center">
        <input type="submit" class="btn btn-default" value="Ajouter un beacon"/>
      </form>
    </div>
    <div class="container" style="margin-bottom: 200px">
      <?php include('../app/affichage_carte_beacons.php'); ?>
    </div>
    <footer>
        &copyWeGuide
    </footer>
  </body>
</html>

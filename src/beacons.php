<!DOCTYPE html>
    <html>
<head>
    <meta HTTP-EQUIV="CONTENT-TYPE" content="text/html; charset=UTF-8" >
    <meta name="AUTHOR" content="Maxime Lecottier">
    <meta name="DESCRIPTION" content="script php postgres">
    <meta name="KEYWORDS" content="Lecottier, informatique, ENSICAEN">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="catalogue.css" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
<header>
<nav class="navbar navbar-default themeRouge">
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/projet_intensif/src/etablissement.php" style="color:#FFFFFF" style="font-family:verdana;">WeGuide</a>
    </div>
    <ul class="nav navbar-nav" >
      <li><a class="active" href="http://localhost/projet_intensif/src/intervenants.php" style="color:#FFFFFF">Intervenants</a></li>
      <li><a href="http://localhost/projet_intensif/src/beacons.php" style="color:#FFFFFF">Beacons</a></li>
    </ul>
  </div>
</nav>  
</header>
<div class="text-center">
<h3>
Bienvenue sur la page d'administration de WeGuide
</h3>
</div>
<div>
<?php include('affichage_liste_beacons.php'); ?>
</div>
<div>
<form action="http://localhost/projet_intensif/src/ajouter_beacon.php" class="text-center">
  <input type="submit" class="btn btn-default" value="Ajouter un beacon"/>
  </form>
</div>
</body>  
</html>


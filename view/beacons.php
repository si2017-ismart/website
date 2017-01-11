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
<nav class="navbar navbar-default themeRouge">
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/projet_intensif/view/etablissement.php" style="color:#FFFFFF" style="font-family:verdana;">WeGuide</a>
    </div>
    <ul class="nav navbar-nav" >
      <li><a href="http://localhost/projet_intensif/view/intervenants.php" style="color:#FFFFFF">Intervenants</a></li>
      <li><a class="active" href="http://localhost/projet_intensif/view/beacons.php" style="color:#FFFFFF">Beacons</a></li>
      <li><a href="http://localhost/projet_intensif/app/deconnexion.php" style="color:#FFFFFF">Deconnexion</a></li>
    </ul>
  </div>
</nav>  
</header>
<div class="text-center">
<h3>
Liste des beacons
</h3>
</div>
<div>
<?php include('../app/affichage_liste_beacons.php'); ?>
</div>
<div style="padding-top:20px">
<div>
<form action="http://localhost/projet_intensif/view/ajouter_beacon.php" class="text-center">
  <input type="submit" class="btn btn-default" value="Ajouter un beacon"/>
  </form>
</div>
</body>  
</html>


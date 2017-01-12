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
<nav class="navbar navbar-default" style="background-color: #10607B; margin:0">
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/projet_intensif/view/etablissement.php" style="color:#FFFFFF" style="font-family:verdana;">WeGuide</a>
    </div>
    <ul class="nav navbar-nav" >
      <li><a class="active" href="http://localhost/projet_intensif/view/intervenants.php" style="color:#000000; background-color: #FFFFFF !important">Intervenants</a></li>
      <li><a href="http://localhost/projet_intensif/view/beacons.php" style="color:#FFFFFF">Beacons</a></li>
      <li><a href="http://localhost/projet_intensif/app/deconnexion.php" style="color:#FFFFFF; left:1050px">Deconnexion</a></li>
    </ul>
  </div>
</nav>
</header>
<div class="text-center" style="background-color: #2BBAED; color:#FFFFFF; margin-bottom:20px; padding:1px">
<h3>
Liste des intervenants
</h3>
</div>
<div class="container">
<?php include('../app/affichage_liste_intervenants.php'); ?>
</div>
<div style="padding-top:20px">
<form action="http://localhost/projet_intensif/view/ajouter_intervenant.php" class="text-center">
  <input type="submit" class="btn btn-default" value="Ajouter un intervenant"/>
  </form>
</div>
<footer style="background:#EE741B; color:#FFFFFF; position:absolute; bottom:0; left:0; right:0; text-align:center">
    &copyWeGuide
</footer>
</body>
</html>

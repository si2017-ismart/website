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
  <nav class="nav-justified" style="background-color: #10607B; margin:0">
    <div class="container-fluid" >
      <div class="navbar-header">
        <a class="navbar-brand" href="http://localhost/projet_intensif/view/etablissement.php" style="color:#FFFFFF" onmouseover="this.style.background='#FFFFFF';this.style.color='#000000'" onmouseout="this.style.background='';this.style.color='#FFFFFF'" style="font-family:verdana;">WeGuide</a>
      </div>
      <ul class="nav navbar-nav" >
        <li><a href="http://localhost/projet_intensif/view/intervenants.php" style="color:#FFFFFF" onmouseover="this.style.background='#FFFFFF';this.style.color='#000000'" onmouseout="this.style.background='';this.style.color='#FFFFFF'">Intervenants</a></li>
        <li><a href="http://localhost/projet_intensif/view/beacons.php" style="color:#000000; background-color: #FFFFFF !important">Beacons</a></li>
        <li><a href="http://localhost/projet_intensif/view/statistiques.php" style="color:#FFFFFF" onmouseover="this.style.background='#FFFFFF';this.style.color='#000000'" onmouseout="this.style.background='';this.style.color='#FFFFFF'">Statistiques</a></li>
        <li><a href="http://localhost/projet_intensif/app/deconnexion.php" style="color:#FFFFFF; left:740%" onmouseover="this.style.background='#FFFFFF';this.style.color='#000000'" onmouseout="this.style.background='';this.style.color='#FFFFFF'">Déconnexion</a></li>
      </ul>
    </div>
  </nav>
</header>
<div class="text-center" style="background-color: #2BBAED; color:#FFFFFF; margin:0; padding:1px">
<h3>
Liste des beacons
</h3>
</div>
<div class="container">
<?php include('../app/affichage_liste_beacons.php'); ?>
</div>
<div style="padding-top:20px">
<div>
<form action="http://localhost/projet_intensif/view/ajouter_beacon.php" class="text-center">
  <input type="submit" class="btn btn-default" value="Ajouter un beacon"/>
  </form>
</div>
<div class="container" style="margin-bottom: 200px">
<?php include('../app/affichage_carte_beacons.php'); ?>
</div>
 <!-- <div id="fond_carte" class="col-sm-6 col-sm-offset-3" style="background-image: url(../webroot/img/plan.jpg);width:650px;height:450px;background-size: 650px;background-repeat: no-repeat;background-position: center;">
    <div class="beacon1" style="background-color:red; width: 50px;height: 50px;border-radius: 50px;opacity: 0.5;position:relative;top:30px;left:<?php echo(650/2);?>px;">
    </div>
    <div class="beacon2" style="background-color:red; width: 550px;height: 550px;border-radius: 550px;opacity: 0.5;position:relative;top:<?php echo(450/2);?>px;left:<?php echo(650/2);?>px;">
    </div>
 </div> -->
<footer style="background:#EE741B; color:#FFFFFF; position:fixed; bottom:0; left:0; right:0; text-align:center;">
    &copyWeGuide
</footer>
</body>
</html>

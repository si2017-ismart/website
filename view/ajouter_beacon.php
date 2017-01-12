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
<div class="text-center" style="background-color: #2BBAED; color:#FFFFFF; margin-bottom:20px; padding:1px">
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
          <footer style="background:#EE741B; color:#FFFFFF; position:absolute; bottom:0; left:0; right:0; text-align:center">
              &copyWeGuide
          </footer>
     </body>
</html>

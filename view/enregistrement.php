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
      <a class="navbar-brand" href="http://localhost/projet_intensif/view/catalogue.php" style="color:#FFFFFF" style="font-family:verdana;" onmouseover="this.style.background='#FFFFFF';this.style.color='#000000'" onmouseout="this.style.background='';this.style.color='#FFFFFF'" >WeGuide</a>
    </div>
    <ul class="nav navbar-nav" >
      <li><a href="http://localhost/projet_intensif/view/enregistrement.php" style="color:#000000; background-color: #FFFFFF !important">Inscription</a></li>
      <li><a href="http://localhost/projet_intensif/view/connexion.php" style="color:#FFFFFF" onmouseover="this.style.background='#FFFFFF';this.style.color='#000000'" onmouseout="this.style.background='';this.style.color='#FFFFFF'">Connexion</a></li>
    </ul>
  </div>
</nav>
</header>
<div class="text-center" style="background-color: #2BBAED; color:#FFFFFF; margin-bottom:20px; padding:1px">
<h3>
Veuillez saisir les informations demandées
</h3>
</div>
<div class="container">
      <form class="form-horizontal" method="post" action="http://localhost/projet_intensif/app/select_inscription.php" onSubmit="return sendRequest()">
               <div class="form-group">
                    <label class="control-label col-sm-2" for="nom" >Nom de l'établissement:</label>
                    <div class="col-sm-10">
                        <input type="nom" class="form-control" name="nom" placeholder="Nom">
                    </div>
               </div>
               <div class="form-group">
                    <label class="control-label col-sm-2" for="adresse">Adresse :</label>
                    <div class="col-sm-10">
                    <input type="adresse" class="form-control" name="adresse" placeholder="Adresse">
                    </div>
               </div>
               <div class="form-group">
                    <label class="control-label col-sm-2" for="zip">Code Postal :</label>
                    <div class="col-sm-10">
                        <input type="zip" class="form-control" name="zip" placeholder="Code Postal">
                    </div>
               </div>
               <div class="form-group">
                    <label class="control-label col-sm-2" for="ville">Ville :</label>
                    <div class="col-sm-10">
                    <input type="ville" class="form-control" name="ville" placeholder="Ville">
                    </div>
               </div>
               <div class="form-group">
                    <label class="control-label col-sm-2" for="pays">Pays :</label>
                    <div class="col-sm-10">
                    <input type="pays" class="form-control" name="pays" placeholder="Pays">
                    </div>
               </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="tel">Téléphone :</label>
                    <div class="col-sm-10">
                    <input type="tel" class="form-control" name="tel" placeholder="Téléphone">
                    </div>
               </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="mail">Email :</label>
                    <div class="col-sm-10">
                    <input type="mail" class="form-control" name="mail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Mot de passe :</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                    </div>
               </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-default">Inscription</button>
                </div>
          </form>
        </div>
        <footer style="background:#EE741B; color:#FFFFFF; position:absolute; bottom:0; left:0; right:0; text-align:center">
            &copyWeGuide
        </footer>
     </body>
</html>

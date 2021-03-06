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
            <a class="navbar-brand" href="http://localhost/projet_intensif/view/catalogue.php">WeGuide</a>
          </div>
          <ul class="nav navbar-nav" >
            <li><a id="inscription" href="http://localhost/projet_intensif/view/enregistrement.php" style="color:#FFFFFF">Inscription</a></li>
            <li><a href="http://localhost/projet_intensif/view/connexion.php" style="color:#000000; background-color: #FFFFFF !important">Connexion</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="text-center" id="titre">
      <h3>
        Saisissez vos identifiants
      </h3>
    </div>
    <div class="container">
      <form class="form-horizontal" method="post" action="http://localhost/projet_intensif/app/select_connexion.php" onSubmit="return sendRequest()" style="margin-top:50px">
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
        <div class="text-center" style="margin-top: 30px">
          <button type="submit" class="btn btn-default">Connexion</button>
        </div>
      </form>
    </div>
    <footer>
        &copyWeGuide
    </footer>
  </body>
</html>

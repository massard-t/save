<header>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Backito</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Accueil</a></li>
            <form class="navbar-form navbar-left" role="search">
                <input type="text" class="form-control" placeholder="Projet" style="min-width:250px;">
            </form>
          </ul>
            <ul class="nav navbar-nav navbar-right">
            <?php $id = isConnect();
            if ($id == -1)  { ?>
            <li><a href="">Inscription</a></li>
            <li><a href="">Connexion</a></li>
            <?php } else { ?>
              <li><a href=""><span class="logouser"><?php echo substr(strtoupper(get_info($id, $bdd)["name"]), 0, 1); ?></span></a></li>
              <li><a href="?p=deconnexion">Déconnexion</a></li>
            <?php }?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </header>

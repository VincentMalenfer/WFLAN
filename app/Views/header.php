	<!-- Navbar -->
    <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= $this->url('users_home'); ?>"><img src="<?= $this->assetUrl('img/logo3.png') ?>" alt="webforcelan" class="logoban"></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="<?= $this->url('users_home'); ?>">Accueil</a></li>
          <li><a href="<?= $this->url('users_calendar'); ?>">Calendrier</a></li>
          <li><a href="<?= $this->url('users_list_articles'); ?>">Articles</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Règlements <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Starcraft II</a></li>
              <li><a href="#">Dota 2</a></li>
              <li><a href="#">Counter-Strike: Global Offensive</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Règlement intérieur</a></li>
            </ul>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accès aux sites <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">WebForce 3 Paris 4</a></li>
            <li><a href="#">WebForce 3 Paris 14</a></li>
            <li><a href="#">WebForce 3 Paris 19</a></li>
          </ul>
        </li>
        <li><a href="<?= $this->url('users_live'); ?>">Direct</a></li>
        <li><a href="<?= $this->url('users_contact'); ?>">Contact</a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?= $this->url('users_sign_in'); ?>">Inscription</a></li>
          <li><a href="<?= $this->url('users_sign_up'); ?>">Connexion</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

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
          <li><a href="<?= $this->url('users_reglement'); ?>">Réglements</a></li>
          <li><a href="<?= $this->url('users_access'); ?>" >Accès aux sites</a></li>
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
  <div class="cRetour"></div>

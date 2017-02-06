<?php $this->layout('layout', ['title' => 'Réglements']) ?>

<?php $this->start('main_content') ?>
<h1>Réglements</h1>

<p>Bienvenue sur notre page des réglements !</p>

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#starcraft">Starcraft II</a></li>
  <li><a data-toggle="tab" href="#dota">Dota 2</a></li>
  <li><a data-toggle="tab" href="#cs">Counter-Strike: Global-Offensive</a></li>
</ul>

<div class="tab-content">
  <div id="starcraft" class="tab-pane fade in active">
    <h2>Starcraft II</h2>
    <h3>1.1 Modalités du tournoi</h3>
    <p>Les tournois Starcraft II ne comporte que 16 participants.
    Le placement des joueurs dans l'arbre de tournois sera tenu secret jusqu'au commencement du tournoi. Les grandes finales et les petites finales se dérouleront en 3 manches gagnantes
    (BO5).</p>
    <h3>1.2 Retards</h3>
    <p>Si votre opposant ne se présente pas après 15 minutes après le début annoncé de l’épreuve, il sera déclaré forfait.</p>
    <h3>1.3 Le Map Pool</h3>
    <p>Les cartes du Map Pool sont les suivantes : </p>
    <ul>
      <li>Luxuriance EC</li>
      <li>Expédition perdue</li>
      <li>Source secrète</li>
      <li>Station de recherche de Vaani</li>
      <li>Catallena EC</li>
      <li>Bassins infernaux</li>
      <li>Morte-Aile EC</li>
    </ul>
    <p>Pour un match « BO3 » le choix de la map doit respecter la procédure suivante : </p>
    <ul>
      <li>Le joueur A retire l’une des 7 maps;</li>
      <li>Le joueur B retire l’une des 6 maps restantes;</li>
      <li>Le joueur A retire l’une des 5 maps restantes;</li>
      <li>Le joueur B retire l’une des 4 maps restantes;</li>
      <li>Le joueur B choisit l’une des 3 maps restantes;</li>
      <li>Le joueur A choisit l’une des 2 maps restantes;</li>
    </ul>
    <p>Le match se joue sur les deux maps choisies par les deux joueurs et débute sur la map
    du joueur B. La dernière map restante sera utilisée pour départager les deux joueurs si
    ils remportent chacun l’une des deux premières maps.</p>
    <h3>1.4 Les matchs non supervisés</h3>
    <p>Certains matchs peuvent ne pas être arbitrés par un responsable, notamment avant les
    quarts de finale. Auquel cas les deux opposants doivent se présenter à un
    administrateur à la fin de leur match afin de lui annoncer le résultat. En cas de conflit,
    l’arbitre visionnera le replay.</p>
    <h3>1.5 Option d'hébergement</h3>
    <p>Catégorie : Melee<br>
    Mode : 1v1<br>
    Vitesse de jeu : Le Plus Rapide </p>
    <h3>2.1 Deconnexion</h3>
    <p>En cas de déconnexion, la partie doit être relancée grâce à l’outil de récupération
    présent dans le jeu.
    Un admin pourra venir superviser la récupération de la partie en cas de problème
    quelconque.</p>
    <h3>2.2 Parties rejouées</h3>
    <p>Dans une partie rejouée, chaque joueur doit choisir la même race qu’il avait durant le
    match annulé.</p>
    <h3>2.3 Pauses dans le jeu</h3>
    <p>Si un joueur met en pause le jeu, il doit justifier son interruption et spécifier la durée
    approximative de la pause. Le match peut seulement être repris par le joueur ayant mis
    la pause après avoir vérifié que son adversaire soit prêt.
    La violation de cette règle est considérée comme un comportement non fairplay et peut
    occasionner l’annulation du match.</p>
    <h3>2.4 Observateurs</h3>
    <p>De manière générale les observateurs ne sont pas autorisés. Les arbitres,
    administrateurs et les éventuels commentateurs du tournoi ne sont pas concernés par
    cette règle.</p>
    <h3>3.1 Actions non autorisés</h3>
    <p>L’utilisation de bugs, d’insultes et de toute autre action entrainant un avantage non
    fairplay sont interdits. Selon l’appréciation de l’arbitre, ils peuvent entrainer des
    sanctions allant de la perte du match pour le joueur fautif à sa disqualification du tournoi
    en cas de récidive.
    Il est également interdit de regarder des « live streaming » durant les matchs.</p>
  </div>
  <div id="dota" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="cs" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>

<?php $this->stop('main_content') ?>

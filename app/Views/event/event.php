<?php $this->layout('layout', ['title' => 'Evénement']) ?>
<?php $this->start('main_content') ?>



<?php #if (isset($events)): ?>
<div class="container-fluid">
    <h1><?= $event['title'] ?></h1>
        <article class="txtArticle col-xs-8 col-xs-offset-2">       
            <p>Adresse : <?= $event['location'] ?></p>
            <p>Début : <?= $event['start'] ?></p>
            <p>Fin : <?= $event['end'] ?></p>
            <p>Description : <?= $event['desc'] ?></p>
            
           

            <a class="btn btn-primary" href="http://localhost/wflan/wflan/public/calendar">Retour</a>
       

       
      
</div>
<?php #endif; ?>
<?php $this->stop('main_content') ?>

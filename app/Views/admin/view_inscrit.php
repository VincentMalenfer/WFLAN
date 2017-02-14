<?php $this->layout('layout', ['title' => 'Les inscrits à cette event']) ?>
<?php $this->start('main_content') ?>
<div class="container">
    <h1>Les inscrits</h1>





<?php foreach ($events     as $event    ) { ?>



<ul>
    <li><?= "L'utilisateur : ".$event['nickname'] . " qui a pour mail : " . $event['email']. "  pour tel : " .$event['phonenumber']. " et pour date de naissance : " .$event['birthdate']. " EST INSCRIT  "  ?></li>

</ul>

<?php } ?>







<?php $this->stop('main_content') ?>

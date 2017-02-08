<?php $this->layout('layout', ['title' => 'Accès aux sites']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<h1>Accès aux sites</h1>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#paris4">Paris 4</a></li>
    <li><a data-toggle="tab" href="#paris14">Paris 14</a></li>
    <li><a data-toggle="tab" href="#paris19">Paris 19</a></li>
  </ul>

  <div class="tab-content">
    <div id="paris4" class="tab-pane fade in active">
      <h2>Paris 4</h2>
      <p>Adresse : 18, rue Geoffroy l’Asnier, 75004 Paris.</p>
      <p>Transport en commun :</p>
      <ul>
        <li>Métro : Ligne 7.</li>
        <li>Bus : Ligne 67.</li>
      </ul>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.210692932062!2d2.3552457156742204!3d48.85419257928709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671fd10fa77a9%3A0xbefa2358f9e7a776!2s18+Rue+Geoffroy+l&#39;Asnier%2C+75004+Paris!5e0!3m2!1sfr!2sfr!4v1486127594132" width="600" height="450" frameborder="1" style="border:1" allowfullscreen></iframe>
    </div>

    <div id="paris14" class="tab-pane fade">
      <h2>Paris 14</h2>
      <p>Adresse : 82, avenue Denfert-Rochereau, 75014 Paris.</p>
      <p>Transport en commun :</p>
      <ul>
        <li>Métro : Ligne 6 et 4.</li>
        <li>RER : Ligne B.</li>
        <li>Bus : Ligne 38 et N21.</li>
      </ul>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.072284900288!2d2.3316429160787906!3d48.8377598792856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671c7785c4fd3%3A0xa335415b3909439d!2s82+Avenue+Denfert-Rochereau%2C+75014+Paris!5e0!3m2!1sfr!2sfr!4v1486128215389" width="600" height="450" frameborder="1" style="border:1" allowfullscreen></iframe>
    </div>

    <div id="paris19" class="tab-pane fade">
      <h2>Paris 19</h2>
      <p>Adresse : 157, Boulevard Macdonald, 75019 Paris.</p>
      <p>Transport en commun :</p>
      <ul>
        <li>Tram : Ligne T3b.</li>
        <li>RER : Ligne E.</li>
        <li>Bus : Ligne 519.</li>
      </ul>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.904189594617!2d2.3759054160804514!3d48.898163079291535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66c2c519fe6a5%3A0x6199af79ffc950ab!2s157+Boulevard+Macdonald%2C+75019+Paris-19E-Arrondissement!5e0!3m2!1sfr!2sfr!4v1486128452068" width="600" height="450" frameborder="1" style="border:1" allowfullscreen></iframe>
    </div>
  </div>
</div>

<?php $this->stop('main_content') ?>

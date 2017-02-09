<?php $this->layout('layout', ['title' => 'Direct']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<h1>Direct</h1>

	<p>Bienvenue sur notre page de direct !</p>

	<div class="live">
		<div class="row">
			<div class="player col-md-8 iframe-responsive-wrapper">
				<!-- Pour obtenir ce comportement avec les iFrames, nous allons utiliser une image transparente ayant un ratio correspondant à celui de l’iFrames. -->
				<img class="iframe-ratio" src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAAALAAAAAAQAAkAAAIKhI+py+0Po5yUFQA7"/>

				<!-- Appel du player Twitch-TV via l'API (v5) -->
				<script src= "http://player.twitch.tv/js/embed/v1.js"></script>
				<div id="{PLAYER_DIV_ID}"></div>
				<script type="text/javascript">
				var options = {
					width: 854,
					height: 480,
					channel: "webforc3lan",
				};

				// Données de l'utilisateur et paramétrage par défaut du player
				var player = new Twitch.Player("{PLAYER_DIV_ID}", options);
				player.setVolume(0.5);
				</script>
			</div>

			<div class="chat col-md-4 iframe-responsive-wrapper">
	    	<img class="iframe-ratio" src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAAALAAAAAAQAAkAAAIKhI+py+0Po5yUFQA7"/>

				<!-- Appel du chat Twitch-TV via l'API (v5), ainsi que des paramètres par défaut -->
				<iframe frameborder="0"
				        scrolling="no"
				        id="chat_embed"
				        src="http://www.twitch.tv/webforc3lan/chat"
				        height="480px"
				        width="500px">
				</iframe>
			</div>
		</div>
	</div>
</div>


<?php $this->stop('main_content') ?>

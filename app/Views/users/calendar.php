<?php $this->layout('layout', ['title' => 'Calendar']) ?>

<?php $this->start('main_content') ?>
	<h2>Calendar</h2>
	
	<div class="container">
	<div class="page-header">
		<div class="pull-right form-inline">
			<div class="btn-group">
				<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
				<button class="btn btn-default" data-calendar-nav="today">Today</button>
				<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
			</div>
		</div>

		<h3></h3>
		
	</div>

	<div class="row">
		<div class="col-md-9">
			<div id="calendar"></div>
		</div>
		<div class="col-md-3">
			<h4>Evenement</h4>
			<small>This list is populated with events dynamically</small>
			<ul id="eventlist" class="nav nav-list"></ul>
		</div>
	</div>

	<!-- <div class="clearfix"></div>
	<br><br>
	<div id="disqus_thread"></div>
	<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

	<div class="modal fade" id="events-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title">Event</h3>
				</div>
				<div class="modal-body" style="height: 400px">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div> -->

	<script type="text/javascript" src="<?php echo $this->assetUrl("plc/asset/jquery/jquery.min.js")?>"></script>
	<script type="text/javascript" src=" <?php echo $this->assetUrl("plc/asset/underscore/underscore-min.js")?>"></script>
	<script type="text/javascript" src=" <?php echo $this->assetUrl("plc/asset/bootstrap3/js/bootstrap.min.js")?>"></script>
	<script type="text/javascript" src=" <?php echo $this->assetUrl("plc/asset/jstimezonedetect/jstz.min.js")?>"></script>
	<script type="text/javascript" src="<?php echo $this->assetUrl("plc/js/language/fr-FR.js")?>"></script>
	<script type="text/javascript" src="  <?php echo $this->assetUrl("plc/js/calendar.js")?>"></script>
	<script type="text/javascript" src="<?php echo $this->assetUrl("plc/js/app.js")?>"></script>
	
</div>
	
<?php $this->stop('main_content') ?>

<?php $this->layout('layout', ['title' => 'Calendar']) ?>
<?php $this->start('main_content') ?>
    <h1>Calendrier</h1>
    <div class="container">
        <div class="page-header">
            <div class="pull-right form-inline">
                <div class="btn-group">
                    <button class="btn btn-primary" data-calendar-nav="prev"><< Prec</button>
                    <button class="btn btn-default" data-calendar-nav="today">Aujourd'hui</button>
                    <button class="btn btn-primary" data-calendar-nav="next">Suiv >></button>
                </div>


                <div class="btn-group">
                <button class="btn btn-warning" data-calendar-view="year">Year</button>
                <button class="btn btn-warning active" data-calendar-view="month">Month</button>
                <button class="btn btn-warning" data-calendar-view="week">Week</button>
                <button class="btn btn-warning" data-calendar-view="day">Day</button>
            </div>
            </div>

            <!-- le mois est afficher en javascript dans le h3 -->
            <h3></h3>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <h4><strong>Evénement<strong></h4>
                <ul id="eventlist" class="nav nav-list"></ul>
            </div>
        </div>


        <script type="text/javascript" src="<?php echo $this->assetUrl("plc/asset/jquery/jquery.min.js")?>"></script>
        <script type="text/javascript" src="<?php echo $this->assetUrl("plc/asset/underscore/underscore-min.js")?>"></script>
        <script type="text/javascript" src="<?php echo $this->assetUrl("plc/asset/bootstrap3/js/bootstrap.min.js")?>"></script>
        <script type="text/javascript" src="<?php echo $this->assetUrl("plc/asset/jstimezonedetect/jstz.min.js")?>"></script>
        <script type="text/javascript" src="<?php echo $this->assetUrl("plc/js/language/fr-FR.js")?>"></script>
        <script type="text/javascript" src="<?php echo $this->assetUrl("plc/js/calendar.js")?>"></script>
        <script type="text/javascript" src="<?php echo $this->assetUrl("plc/js/app.js")?>"></script>
    </div>

<?php $this->stop('main_content') ?>

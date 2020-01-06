<?php $title = 'Notre super site'; ?>
<?php $style = 'public/css/styleWelcome.css'; ?>
<?php $script = 'public/js/welcome.js' ?>
<?php ob_start(); ?>

<!-- <em><a href="index.php?action=launch" class="btn btn-primary">Launch!</a></em> -->

<div class="fond">    
    <div>
        <button class="boutonLancement" id="BOUTONLANCEMENT" onclick="launch();">Launch !</button>
    </div>
    <div>
        <img src="../../Ressources/VisuelsOK/startscreenShipV3.png" id="VAISSEAU" class="vaisseau">
    </div>

</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>



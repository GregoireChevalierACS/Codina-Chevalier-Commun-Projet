<?php $title = 'Notre super site'; ?>
<?php $style = 'public/css/styleWelcome.css'; ?>
<?php $script = 'public/js/welcome.js' ?>
<?php ob_start(); ?>

<!-- <em><a class="btn btn-primary">Launch!</a></em> -->
<div id="wrap"></div>
<div>
        <a href="javascript:delay('index.php?action=menu')"><button class="boutonLancement" id="BOUTONLANCEMENT" onclick="launch()" >Launch</button></a>
</div>
    <div class="fond">
    
        <img src="Ressources/VisuelsOK/startscreenFondSol.png" class="sol">
        <img src="Ressources/VisuelsOK/startscreenFondSol.png" class="sol2">

    <div>
        <img src="Ressources/VisuelsOK/startscreenShipV3.png" id="VAISSEAU" class="vaisseau">
    </div>

  </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>



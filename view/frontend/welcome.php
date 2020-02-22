<?php $title = 'Notre super site'; ?>
<?php $style = 'public/css/styleWelcome.css'; ?>
<?php $script = 'public/js/welcome.js' ?>
<?php ob_start(); ?>


<audio id="deco">
    <source src="Ressources/music/decollage.mp3" type="audio/mpeg">  
</audio>

<div id="wrap"></div>
<div class="boutonsCentre">
        <a href="javascript:delay('index.php?action=menu')"><button class="boutonLancement" id="BOUTONLANCEMENT" onclick="launch(), playSound()" >Launch</button></a>
         <a href="index.php?action=menu"><button class="boutonSkip"onclick="launch()" >Skip to site</button></a>
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



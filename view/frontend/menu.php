<?php 
$title = 'Choisissez votre destination';
$style = 'public/css/menu.css';
$script = 'public/js/ratioViewport.js';
 ?>
 
<?php ob_start(); ?>




    <a href="index.php?action=infinimentPetit">Dans les méandres de la matière<img src="Ressources/VisuelsOK/infPetit.png" class="infPetit"></a>



    <a href="index.php?action=launch">Le Système Solaire<img src="Ressources/VisuelsOK/solarsystem.png" class="systemeSolaire"></a>



    <a href="index.php?action=infinimentGrand">Vers l'infini et au delà<img src="Ressources/VisuelsOK/infbeyond.png" class="infiniAuDela"></a>



    <a href="index.php?action=tag">Vos succès<img src="Ressources/VisuelsOK/achiev.png" class="achievs"></a>




<?php $content = ob_get_clean(); ?>
<?php require("template.php"); ?>
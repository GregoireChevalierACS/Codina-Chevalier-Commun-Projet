<?php 
$title = 'Choisissez votre destination';
$style = 'public/css/menu.css';
$script = 'public/js/menu.js';
 ?>
 
<?php ob_start(); ?>



<div class="containerMenu containerMenu2">
    <a href="index.php?action=infinimentPetit" class="placeholderClass">Dans les méandres de la matière<img src="Ressources/VisuelsOK/infPetit.png"   class="infPetit placeholderClass"></a>



    <a href="index.php?action=launch" class="placeholderClass">Le Système Solaire<img src="Ressources/VisuelsOK/solarsystem.png"  class="systemeSolaire placeholderClass"></a>



    <a href="index.php?action=infinimentGrand" class="placeholderClass">Vers l'infini et au delà<img src="Ressources/VisuelsOK/infbeyond.png" class="infiniAuDela placeholderClass"></a>



    <a href="index.php?action=tag">Vos succès<img src="Ressources/VisuelsOK/achiev.png"  class="achievs"></a>
</div>



<?php $content = ob_get_clean(); ?>
<?php require("template.php"); ?>
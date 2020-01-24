<?php 
$title = 'Choisissez votre destination';
$style = 'public/css/menu.css';
$script = 'public/js/ratioViewport.js';
 ?>
 
<?php ob_start(); ?>



<p class="boutonRetour">
    <a href="index.php?action=infinimentPetit">Dans les méandres de la matière</a>
    <img src="Ressources/VisuelsOK/infPetit.png" class="infPetit">
</p>

<p class="boutonRetour">
    <a href="index.php?action=launch">Le Système Solaire</a>
    <img src="Ressources/VisuelsOK/solarsystem.png" class="systemeSolaire">
</p>

<p class="boutonRetour">
    <a href="index.php?action=infinimentGrand">Vers l'infini et au delà</a>
    <img src="Ressources/VisuelsOK/infbeyond.png" class="infiniAuDela">
</p>

<p class="boutonRetour">
    <a href="index.php?action=tag">Vos succès </a>
    <img src="Ressources/VisuelsOK/achiev.png" class="achievs">
</p>



<?php $content = ob_get_clean(); ?>
<?php require("template.php"); ?>
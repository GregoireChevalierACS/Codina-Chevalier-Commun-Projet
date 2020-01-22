<?php 
$title = 'Choisissez votre destination';
$style = 'public/css/menu.css';
$script = 'public/js/ratioViewport.js';
 ?>
 
<?php ob_start(); ?>



<p class="boutonRetour">
    <a href="index.php?action=infinimentPetit">Dans les méandres de la matière</a>
</p>

<p class="boutonRetour">
    <a href="index.php?action=launch">Le Système Solaire</a>
</p>

<p class="boutonRetour">
    <a href="index.php?action=infinimentGrand">Vers l'infini et au delà</a>
</p>

<p class="boutonRetour">
    <a href="index.php?action=tag">Vos succès </a>
</p>



<?php $content = ob_get_clean(); ?>
<?php require("template.php"); ?>
<?php 
// A venir quand les visuels des galaxies seront fait
$infos = $infosGalaxies[0]; 
$title = $infosGalaxies[1];
$style = null;

?>

<?php ob_start(); ?>
<em><a href="index.php?action=phenomeneIG&name=Les Galaxies" class="btn btn-primary">Retour </a></em>


<b>bonsoir</b>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
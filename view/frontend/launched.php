<?php $title = 'Navette en chemin';
 $style = null;
 ?>
 
<?php ob_start(); ?>

 <div class ="d-flex">
 <?php foreach($namesPlanets as $name){ ?>
      <em><a href="index.php?action=planets&name=<?=$name[0]?>" class="btn btn-primary"> <?=$name[0]?> </a></em>
 <?php } ?> 

 <a href="index.php?action=infinimentGrand">Vers l'infini et au delà</a>

</div> 
<?php $content = ob_get_clean(); ?>
<?php require("template.php"); ?>
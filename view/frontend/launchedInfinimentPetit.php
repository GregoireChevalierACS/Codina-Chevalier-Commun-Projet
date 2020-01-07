<?php $title = 'Infiniment Petit';
 $style = null;
 ?>
 
<?php ob_start(); ?>

<a href="index.php?action=launch">De retour chez nous</a>
 <div class ="d-flex">
 <?php foreach($placeholder as $placeholderName){ //placeholder à remplacer au moment de la création de la db de l'infiniment petit ?> 
     
       <a href="index.php?action=nameOfplaceholder&name=<?=$name[0]?>" class="btn btn-primary"> <?=$name[0]?> </a>
 <?php } ?> 
</div> 
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
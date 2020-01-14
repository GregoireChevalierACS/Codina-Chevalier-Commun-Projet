<?php $title = 'Infiniment Petit';
 $style = null;
 ?>
 
<?php ob_start(); ?>

<a href="index.php?action=menu">De retour entre les mondes</a>
 <div class ="d-flex">
 <?php foreach($namesminisizeTopics as $name){ //placeholder à remplacer au moment de la création de la db de l'infiniment petit ?> 
     
       <a href="index.php?action=particle&name=<?=$name[0]?>" class="btn btn-primary"> <?=$name[0]?> </a>
 <?php } ?> 
</div> 
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
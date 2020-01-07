<?php $title = 'Infiniment Grand';
 $style = null;
 ?>
 
<?php ob_start(); ?>

<a href="index.php?action=launch">De retour chez nous</a>
 <div class ="d-flex">
 <?php foreach($namesPhenomenon as $name){ ?>
     
       <a href="index.php?action=nameOfTopic&name=<?=$name[0]?>" class="btn btn-primary"> <?=$name[0]?> </a>
 <?php } ?> 
</div> 
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
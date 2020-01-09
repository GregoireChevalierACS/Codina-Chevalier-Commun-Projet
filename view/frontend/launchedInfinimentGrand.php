<?php 
$title = 'Infiniment Grand';
$style = 'public/css/launchedInfinimentGrand.css';
 ?>
 
<?php ob_start(); ?>

<a href="index.php?action=launch">De retour chez nous</a>
 <div class ="d-flex">
 <?php foreach($namesPhenomenon as $name){ ?>
      <?php $nom = $name['nameOfTopic'];
            $concatenation = str_replace(' ', '', $nom);
      ?>
      <a href="index.php?action=phenomeneIG&name=<?=$name['nameOfTopic']?>"><img src="<?=$name['visuel'] ?>" class="boutonIG" id="<?= $concatenation ?>"></a>
 <?php } ?> 
</div> 
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
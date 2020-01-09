<?php 
$title = 'Infiniment Grand';
$style = 'public/css/launchedInfinimentGrand.css';
 ?>
 
<?php ob_start(); ?>
<p class="boutonRetour">
<a href="index.php?action=launch">De retour chez nous</a>
</p>
 <div class ="d-flex parallax">
 <?php foreach($namesPhenomenon as $name){ ?>
      <?php $nom = $name['nameOfTopic'];
            $concatenation = str_replace(' ', '', $nom);
      ?>
      <p class="type"><?=$name['nameOfTopic']?>
            <a href="index.php?action=phenomeneIG&name=<?=$name['nameOfTopic']?>">
            <img src="<?=$name['visuel'] ?>" class="boutonIG" id="<?= $concatenation ?>">
            </a>
      </p>
 <?php } ?> 
</div> 
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
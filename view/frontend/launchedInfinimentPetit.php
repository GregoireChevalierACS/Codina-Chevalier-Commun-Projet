<?php $title = 'Infiniment Petit';
$style = 'public/css/launched.css';
$script = 'public/js/ratioViewport.js';
 ?>

<?php ob_start(); ?>

<<<<<<< Updated upstream
<body>
    <div class="placeholderViewer">



        <div class="scroll">
            <p class="boutonRetour">
                <a href="index.php?action=menu">De retour entre les mondes</a>
            </p>
            <?php foreach($namesminisizeTopics as $name){ //placeholder à remplacer au moment de la création de la db de l'infiniment petit ?>
            <?php 
            $nom = $name['nameParticle'];
      ?>

            <div class="type">
                <a href="index.php?action=particle&name=<?=$nom?>">
                    <img src="<?=$name['visuel'] ?>" class="boutonIG placeholderClass"
                        id="<?= str_replace(' ', '', $nom) ?>">
                </a>
            </div>
            <?php } ?>

            <div class="boutonRetour">
                <a href="index.php?action=menu">De retour entre les mondes</a>
            </div>
        </div>

</body>

=======
<a href="index.php?action=menu">De retour entre les mondes</a>
 <div class ="d-flex">
 <?php foreach($namesminisizeTopics as $name){ ?> 
     
       <a href="index.php?action=particle&name=<?=$name[0]?>" class="btn btn-primary"> <?=$name[0]?> </a>
 <?php } ?> 
</div> 
>>>>>>> Stashed changes
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
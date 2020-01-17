<?php $title = 'Infiniment Petit';
$style = 'public/css/launched.css';
$script = 'public/js/ratioViewport.js';
 ?>

<?php ob_start(); ?>

<body>
    <div class="placeholderViewer">



        <div class="scroll">
            <p class="boutonRetour">
                <a href="index.php?action=menu">De retour entre les mondes</a>
            </p>
            <?php foreach($namesminisizeTopics as $name){ ?>
            <?php 
            $nom = $name['topicName'];
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

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
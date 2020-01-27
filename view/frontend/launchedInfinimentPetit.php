<?php $title = 'Infiniment Petit';
$style = 'public/css/launched.css';
$script = 'public/js/ratioViewport.js';
 ?>

<?php ob_start(); ?>

<body>
    <div class="placeholderViewer placeholderViewer2">



        <div class="scroll">
        <div class="boutonRetour">
                <a href="index.php?action=menu"><img id="shipReturn" src="Ressources/VisuelsOK/startscreenShipV4.png"></a>
                <p> Retour </p>
            </div>
            <?php foreach($namesminisizeTopics as $name){ ?>
                    <?php 
                        $nom = $name['topicName'];
                        $concatenation = str_replace(' ', '', $nom);
                    ?>
                <div class="type">
                    <div class="placeholderTitres"><?=$name['topicName']?></div>
                    <a href="index.php?action=particle&name=<?=$name['topicName']?>">
                    <img src="<?=$name['visuel'] ?>" class="boutonIG placeholderClass" id="<?= $concatenation ?>">
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>


</div>

</body>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
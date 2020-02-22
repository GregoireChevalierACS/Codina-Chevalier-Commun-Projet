<?php 
$title = 'Explorez notre Système Solaire';
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
            <?php foreach($namesPlanets as $name){ ?>
            <?php 
                    $nom = $name['topicName'];
                    $concatenation = str_replace(' ', '', $nom);
                    var_dump($name); 
                    die();
               ?>
            <div class="type">
                <a href="index.php?action=planets&name=<?=$nom?>">
                    <img  style="height: <?=$name['sizeIMG']?>" src="<?=$name['visuel'] ?>" class="boutonIG placeholderClass" id="<?= $concatenation ?>">
                </a>
            </div>
            <?php } ?>
            
        </div>


    </div>
    </div>
</body>

<?php $content = ob_get_clean(); ?>
<?php require("template.php"); ?>
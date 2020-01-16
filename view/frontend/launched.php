<?php 
$title = 'Explorez notre Système Solaire';
$style = 'public/css/launched.css';
$script = 'public/js/ratioViewport.js';
 ?>

<?php ob_start(); ?>


<body>

    <!-- <div id="ship"><img src="Ressources/VisuelsOK/VaisseauVueDessus.png" data-type="parallax" data-depth="0.20"></div> -->
    <div class="placeholderViewer">


        <div data-type="parallax" data-depth="0.90">
            <div class="scroll">
                <p class="boutonRetour">
                    <a href="index.php?action=menu">De retour entre les mondes</a>
                </p>
                <?php foreach($namesPlanets as $name){ ?>
                <?php 
                    $nom = $name['namePlanet'];
                    $concatenation = str_replace(' ', '', $nom);
               ?>
<<<<<<< Updated upstream
               <div class="type">   
                    <a href="index.php?action=planets&name=<?=$nom?>">
                    <img src="<?=$name['visuel'] ?>" class="boutonIG placeholderClass" id="<?= $concatenation ?>">
=======
                <div class="type">
                    <a href="index.php?action=planets&name=<?=$name['namePlanet']?>">
                        <img src="<?=$name['visuel'] ?>" class="boutonIG placeholderClass" id="<?= $concatenation ?>">
>>>>>>> Stashed changes
                    </a>
                </div>
                <?php } ?>

                <div class="boutonRetour">
                    <a href="index.php?action=menu">De retour entre les mondes</a>
                </div>
            </div>
        </div>
</body>

<?php $content = ob_get_clean(); ?>
<?php require("template.php"); ?>
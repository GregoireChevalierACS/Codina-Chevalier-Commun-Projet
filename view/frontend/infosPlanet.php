<?php 
$infos = $infosArray[0]; 
$namePlanet = $infos[1];
$title = $namePlanet;
$style = "public/css/infoPlanet.css"; 
$script = "public/js/infos.js"; 
?>

<?php ob_start(); ?>
<header>
    <div id="retour">
        <a href="index.php?action=launch"><img src="Ressources/VisuelsOK/startscreenShipV3.png"></a>
        <p> Retour </p>
    </div>


    <div> <h1><?= $infos['namePlanet'] ?> </h1> </div>
</header>

<div style=" background-image: url('<?=$infos['visuel']?>');" class=" layer layer-1" data-type="parallax"
    data-depth="0.20"></div>

<div id="containerInfosQuizz" data-type="parallax" data-depth="0.90">



    <div id="infos">
        <div class=" infosPlanet">
            <p class="category"> Distance du soleil: </p>
            <?php echo nl2br(htmlspecialchars($infos['distance_to_sun'])); ?>
        </div>

        <div class="mt-5 infosPlanet">
            <p class="category"> Type: </p>
            <?php echo nl2br(htmlspecialchars($infos['type'])); ?>
        </div>

        <div class="mt-5 infosPlanet">
            <p class="category"> Periode orbitale : </p>
            <?php echo nl2br(htmlspecialchars($infos['orbital_period'])); ?> jours terrien
        </div>

        <div class="mt-5 infosPlanet">
            <p class="category"> Periode de rotation : </p>
            <?php echo nl2br(htmlspecialchars($infos['rotation_period'])); ?>
            jours terrien
        </div>

        <div class="mt-5  infosPlanet">
            <p class="category"> Température : </p>
            <?php echo nl2br(htmlspecialchars($infos['temperature'])); ?>
        </div>

        <div class="mt-5 infosPlanet">
            <p class="category"> Diamètre : </p>
            <?php echo nl2br(htmlspecialchars($infos['diameter'])); ?> kilomètres
        </div>

        <div class="mt-5 infosPlanet">
            <p class="category"> Masse : </p>
            <?php echo nl2br(htmlspecialchars($infos['mass'])); ?> kilogrammes
        </div>

        <div class="mt-5 infosPlanet">
            <p class="category"> Gravité : </p>
            <?php echo nl2br(htmlspecialchars($infos['gravity'])); ?>% de la gravité terrestre
        </div>

        <div class="mt-5 infosPlanet">
            <p class="category"> Composition : </p>
            <?php echo nl2br(htmlspecialchars($infos['composition'])); ?>
        </div>

        <div class="mt-5 infosPlanet">
            <p class="category"> Nombre de satellites : </p>
            <?php echo nl2br(htmlspecialchars($infos['satellites'])); ?>
        </div>
    </div>

    <div id="containerRight">
        <div id=quizz>
            <?php require('quizz.php')
?>
        </div>
    </div>

</div>




<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
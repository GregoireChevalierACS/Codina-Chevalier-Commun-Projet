<?php 
$infos = $infoParticle[0]; 
$nameParticle = $infos[1];
$title = $nameParticle;
$style = "public/css/infos.css"; 
$script = "public/js/infos.js";
?>

<?php ob_start(); ?>

<header>
    <div id="retour">
        <a href="index.php?action=infinimentPetit"><img id="shipReturn" src="Ressources/VisuelsOK/startscreenShipV4.png"></a>
        <p> Retour </p>

    </div>


    <div> <h1><?= $infos['topicName'] ?> </h1> </div>
</header>

<div style=" background-image: url('');" class=" layer layer-1" data-type="parallax"
    data-depth="0.20" id="<?=$infos['topicName']?>"></div>

    <div id="infos">
        <div class=" divInfos">
            <p class="category"> Type :  </p>
            <?php echo nl2br(htmlspecialchars($infos['type'])); ?>
        </div>
        <div class=" mt-5 divInfos">
            <p class="category"> Type secondaire : </p>
            <?php echo nl2br(htmlspecialchars($infos['typeSecondary'])); ?>
        </div>
        <div class=" mt-5 divInfos">
            <p class="category"> Description : </p>
            <?php echo nl2br(htmlspecialchars($infos['description'])); ?>
        </div>
        <div class=" mt-5 divInfos">
            <p class="category"> Découverte le :  </p>
            <?php echo nl2br(htmlspecialchars($infos['discovery_date'])); ?>
        </div>
               
    </div>

  

</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
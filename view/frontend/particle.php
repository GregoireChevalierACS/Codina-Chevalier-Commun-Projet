<?php 
$infos = $infoParticle[0]; 
$nameParticle = $infos[1];
$title = $nameParticle;
$style = "public/css/infos.css"; 
$script = "public/js/infos.js";
require ('view/achievement.php');
?>

<?php ob_start(); ?>
<header class="mb-5">
    <h1 class="text-center"><?= $infos['topicName'] ?> </h1>
    <div id="retour">
        <a href="index.php?action=infinimentPetit"><img id="shipReturn"
                src="Ressources/VisuelsOK/startscreenShipV4.png"></a>
        <p> Retour </p>
    </div>
</header>


<?php 
if(isset($affichageParticle) && $affichageParticle){
    $affichageParticle = false; 
  ?>

<div class="d-flex alert alert-success alert-dismissible" role="alert" id="achievement">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Elementaire, mon cher Watson !
</div>
<?php } ?>



<div style=" background-image: url('<?=$infos['visuel']?>');" class=" layer layer-1 particleImg" data-type="parallax"
    data-depth="0.20"></div>

<div id="containerInfosQuizz" data-type="parallax" data-depth="0.90">

    <div id="infos" class="mb-5">
        <div class=" divInfos">
            <p class="category"> Type : </p>
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
            <p class="category"> Découverte le : </p>
            <?php echo nl2br(htmlspecialchars($infos['discovery_date'])); ?>
        </div>
        <div class=" mt-5 divInfos">
            <p class="category"> Personnalité reliée : </p>
            <?php echo nl2br(htmlspecialchars($infos['personne'])); ?>
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
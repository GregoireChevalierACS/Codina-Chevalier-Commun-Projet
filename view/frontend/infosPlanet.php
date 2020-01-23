<?php 
$infos = $infosArray[0]; 
$namePlanet = $infos[1];
$title = $namePlanet;
$style = "public/css/infos.css"; 
$script = "public/js/infos.js"; 
require ('view/achievement.php');
?>

<?php ob_start(); ?>


<header class="mb-5">
<h1 class="text-center"><?= $infos['topicName'] ?> </h1>
    <div id="retour">
        <a href="index.php?action=launch"><img id="shipReturn" src="Ressources/VisuelsOK/startscreenShipV4.png"></a>
        <p> Retour </p>
    </div>
</header>

<?php 
 if(isset($affichagePlanet) && $affichagePlanet){
     $affichagePlanet = false; 
  ?>
  
  <div class=" d-flex alert alert-success alert-dismissible" id="achievement">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   Première planète visitée 
</div>
<?php } ?>


<div style=" background-image: url('<?=$infos['visuel']?>');" class=" layer layer-1" data-type="parallax"
    data-depth="0.20" id="<?=$infos['topicName']?>"></div>

<div  id="containerInfosQuizz" data-type="parallax" data-depth="0.90">



    <div id="infos" class="mb-5">
  
        <div class=" divInfos">
            <p class="category"> Distance du soleil: </p>
            <?php echo nl2br(htmlspecialchars($infos['distance_to_sun'])); ?>
        </div>

        <div class="mt-5 divInfos">
            <p class="category"> Type: </p>
            <?php echo nl2br(htmlspecialchars($infos['type'])); ?>
        </div>

        <div class="mt-5 divInfos">
            <p class="category"> Periode orbitale : </p>
            <?php echo nl2br(htmlspecialchars($infos['orbital_period'])); ?> jours terrien
        </div>

        <div class="mt-5 divInfos">
            <p class="category"> Periode de rotation : </p>
            <?php echo nl2br(htmlspecialchars($infos['rotation_period'])); ?>
            jours terrien
        </div>

        <div class="mt-5  divInfos">
            <p class="category"> Température : </p>
            <?php echo nl2br(htmlspecialchars($infos['temperature'])); ?>
        </div>

        <div class="mt-5 divInfos">
            <p class="category"> Diamètre : </p>
            <?php echo nl2br(htmlspecialchars($infos['diameter'])); ?> kilomètres
        </div>

        <div class="mt-5 divInfos">
            <p class="category"> Masse : </p>
            <?php echo nl2br(htmlspecialchars($infos['mass'])); ?> kilogrammes
        </div>

        <div class="mt-5 divInfos">
            <p class="category"> Gravité : </p>
            <?php echo nl2br(htmlspecialchars($infos['gravity'])); ?>% de la gravité terrestre
        </div>

        <div class="mt-5 divInfos">
            <p class="category"> Composition : </p>
            <?php echo nl2br(htmlspecialchars($infos['composition'])); ?>
        </div>

        <div class="mt-5 divInfos">
            <p class="category"> Date de découverte : </p>
            <?php echo nl2br(htmlspecialchars($infos['discovery_date'])); ?>
        </div>

        <div class="mt-5 divInfos">
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
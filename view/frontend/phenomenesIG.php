<?php 
// var_dump($infosPhenomeneIG);
$infos = $infosPhenomeneIG[0]; 

$title = $infos[1];
$style = "public/css/infos.css"; 
$script = "public/js/infos.js";
require ('view/achievement.php'); 
?>


<?php ob_start(); ?>

<header class="mb-5">
<h1 class="text-center"><?= $infos['topicName'] ?> </h1>
    <div id="retour">
        <a href="index.php?action=infinimentGrand"><img id="shipReturn" src="Ressources/VisuelsOK/startscreenShipV4.png"></a>
        <p> Retour </p>
    </div>
</header>


 <?php 
 if(isset($affichagephenomeneIG) && $affichagephenomeneIG){
     $affichagephenomeneIG = false; 
   ?>
   
 <div class="d-flex alert alert-success alert-dismissible" role="alert" id="achievement">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 Voyageur interstellaire 
 </div>
 <?php } ?>
 
    
    

<div style=" background-image: url('<?=$infos['visuel']?>');" class=" layer layer-1 backgroundImg" data-type="parallax"
    data-depth="0.20"></div>

<div id="containerInfosQuizz" data-type="parallax" data-depth="0.90">



    <div id="infos" class="mb-5">
        <div class=" divInfos">
            <p class="category"> Description :  </p>
            <?php echo nl2br(htmlspecialchars($infos['subjectDescription'])); ?>
        </div>
        <div class=" mt-5 divInfos">
            <p class="category"> Histoire :  </p>
            <?php echo nl2br(htmlspecialchars($infos['history'])); ?>
        </div>
        <div class=" mt-5 divInfos">
            <p class="category"> Dimension :  </p>
            <?php echo nl2br(htmlspecialchars($infos['dimensions'])); ?>
        </div>
        <div class=" mt-5 divInfos">
            <p class="category"> Composition :  </p>
            <?php echo nl2br(htmlspecialchars($infos['composition'])); ?>
        </div>
        <div class=" mt-5 divInfos">
            <p class="category"> Personnalités reliées :  </p>
            <?php echo nl2br(htmlspecialchars($infos['peopleRelatedTo'])); ?>
<<<<<<< HEAD
        </div>      
=======
        </div>
        <div class=" mt-5 divInfos">
            <p class="category"> Lien vidéo :  </p>
            <?php echo nl2br(htmlspecialchars($infos['funFactEtLiens'])); ?>
        </div>



        
>>>>>>> b54b110a1d5264dea8948ce9b06e77ef0154d860

        
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
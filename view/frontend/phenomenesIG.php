<?php 
// var_dump($infosPhenomeneIG);
$infos = $infosPhenomeneIG[0]; 

$title = $infos[1];
$style = "public/css/infos.css"; 
$script = "public/js/infos.js";
require ('view/achievement.php'); 
?>


<?php ob_start(); ?>
<header>
    
    <div id="retour">
        <a href="index.php?action=infinimentGrand"><img id="shipReturn"
                src="Ressources/VisuelsOK/startscreenShipV4.png"></a>
        <p> Retour </p>
    </div>

    <div> <h1><?= $infos['topicName'] ?> </h1> </div>

    <?php 
if(isset($affichagephenomeneIG) && $affichagephenomeneIG){
    $affichagephenomeneIG = false; 
  ?>
  
<div class=" alert alert-success" role="alert">
Grand explorateur
</div>
<?php } ?>
</header>

<div style=" background-image: url('<?=$infos['visuel']?>');" class=" layer layer-1" data-type="parallax"
    data-depth="0.20" id="<?php echo str_replace(' ', '', $infos{'topicName'})?>"></div>

<div id="containerInfosQuizz" data-type="parallax" data-depth="0.90">



    <div id="infos">
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
<?php 
// var_dump($infosPhenomeneIG);
$infos = $infosPhenomeneIG[0]; 
$title = $infos[1];
$style = null;
?>



<a href="index.php?action=infinimentGrand">Poursuivre l'exploration de l'infini</a>

<div class="card  mb-3">
    <div  class="card-header">
        <h3>
            <?php echo htmlspecialchars($infos['nameOfTopic']); ?>
        </h3>
    </div>
    <div class="card-body">
        <p class="card-text">
            À propos : 
            <?php
            echo nl2br(htmlspecialchars($infos['subjectDescription']));
            ?>
        </p>
        <p class="card-text">
            Histoire : 
            <?php
            echo nl2br(htmlspecialchars($infos['history']));
            ?>
        </p>
        <p class="card-text">
            Dimensions : 
            <?php
            echo nl2br(htmlspecialchars($infos['dimensions']));
            ?>
        </p>
        <p class="card-text">
            Composition : 
            <?php
            echo nl2br(htmlspecialchars($infos['composition']));
            ?>
        </p>
        <p class="card-text">
            Personnalités liées : 
            <?php
            echo nl2br(htmlspecialchars($infos['peopleRelatedTo']));
            ?>
        </p>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
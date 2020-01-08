<?php 
$infos = $infoParticle[0]; 
$nameParticle = $infos[1];
$title = $nameParticle;
$style = null; 
?>

<?php ob_start(); ?>
<em><a href="index.php?action=launch" class="btn btn-primary">
Retour </a></em>

<div class="card  mb-3">
    <div  class="card-header">
        <h3>
            <?php echo htmlspecialchars($nameParticle); ?>
            <p><small> Découverte le <?php echo $infos['discovery_date']; ?></small></p>
        </h3>
    </div>
    <div class="card-body">
        <p class="card-text">
        Type: 
        <?php
        echo nl2br(htmlspecialchars($infos['type']));
        ?>
        </p>
        <p class="card-text">
        Type Secondaire: 
        <?php
        echo nl2br(htmlspecialchars($infos['typeSecondary']));
        ?>
        </p>
        <p class="card-text">
        Description: 
        <?php
        echo nl2br(htmlspecialchars($infos['description']));
        ?>
        </p>
    </div>
 
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
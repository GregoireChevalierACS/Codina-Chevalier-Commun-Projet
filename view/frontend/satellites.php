<?php 
$infos = $infosSatellites[0]; 
//$nameSatelitte = $infosSatellites[1];
$title = $infosSatellites;
$style = null;

?>

<?php ob_start(); ?>
<em><a href="index.php?action=planets&name=<?=$infos['namePlanet']?>" class="btn btn-primary">
Retour </a></em>

<div class="card  mb-3">
    <div  class="card-header">
        <h3>
            <?php echo htmlspecialchars($infos['nameSatellite']); ?>
            <p><small> Découvert <?php echo $infos['discovery_date']; ?></small></p>
        </h3>
    </div>
    <div class="card-body">
        <p class="card-text">
        Distance de sa planète: 
        <?php
        echo nl2br(htmlspecialchars($infos['distance_to_planet']));
        ?>
        </p>
        
        <p class="card-text">
        Periode de révolution: 
        <?php
        echo nl2br(htmlspecialchars($infos['orbital_period']));
        ?> jours terrien
        </p>
        <p class="card-text">
        Periode de rotation: 
        <?php
        echo nl2br(htmlspecialchars($infos['rotation_period']));
        ?> jours terrien
        </p>
        <p class="card-text">
        Température: 
        <?php
        echo nl2br(htmlspecialchars($infos['temperature']));
        ?>
        </p>
        <p class="card-text">
        Diamètre: 
        <?php
        echo nl2br(htmlspecialchars($infos['diameter']));
        ?> km
        </p>
        <p class="card-text">
        Masse: 
        <?php
        echo nl2br(htmlspecialchars($infos['mass']));
        ?>
        </p>
        <p class="card-text">
        Gravité de surface: 
        <?php
        echo nl2br(htmlspecialchars($infos['gravity']));
        ?>% de la gravité terrestre
        </p>
        <p class="card-text">
        Composition: 
        <?php
        echo nl2br(htmlspecialchars($infos['composition']));
        ?>
        </p>    
      
    </div>
 
</div>
  


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
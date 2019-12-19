<?php 
$infos = $infosArray[0]; 
$namePlanet = $infosArray[1];
$title = $namePlanet; ?>
<?php ob_start(); ?>
<em><a href="index.php?action=launched" class="btn btn-primary">
Retour </a></em>

<div class="card  mb-3">
    <div  class="card-header">
        <h3>
            <?php echo htmlspecialchars($infos['namePlanet']); ?>
            <p><small> Découverte le <?php echo $infos['discovery_date']; ?></small></p>
        </h3>
    </div>
    <div class="card-body">
        <p class="card-text">
        Distance du soleil: 
        <?php
        echo nl2br(htmlspecialchars($infos['distance_to_sun']));
        ?>
        </p>
        <p class="card-text">
        Type: 
        <?php
        echo nl2br(htmlspecialchars($infos['type']));
        ?>
        </p>
        <p class="card-text">
        Periode de révolution: 
        <?php
        echo nl2br(htmlspecialchars($infos['orbital_period']));
        ?>
        </p>
        <p class="card-text">
        Periode de rotation: 
        <?php
        echo nl2br(htmlspecialchars($infos['rotation_period']));
        ?>
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
        ?>
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
        <p class="card-text">
        Fun Fact: 
        <?php
        echo nl2br(htmlspecialchars($infos['fun_fact']));
        ?>
        </p>
    </div>

</div>
  


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php 
$title = "-- Suppresion -- ";
$style = "public/css/identification.css"; 
$script = "";
ob_start(); ?>

<?php require('view/admin/navbar.php'); ?>

<div class="container mt-5">
    <p class="alert alert-danger">Zone de danger !</p>

    <p>
        Voulez-vous vraiment supprimer l'entrée <?=$nameOfTopic?> de <?= $tableToDelete ?> ? Cette action est
        irréversible ! 
    </p>

    <a href="admin.php?action=suppression&id=<?= $idToDelete?>&table=<?=$tableToDelete?>"><button class="btn btn-danger">Supprimer</button></a>
    <a href="admin.php"><button class="btn btn-warning">Non, j'ai glissé</button></a>



</div>



<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
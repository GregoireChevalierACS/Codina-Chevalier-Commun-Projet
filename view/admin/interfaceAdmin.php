<?php 
$title = "Admin";
$style = "public/css/identification.css"; 
$script = "";


ob_start(); ?>
<div>
    <div>
        <h1> Bienvenue sur votre espace d'administration </h1>
    </div>
   <a class="btn btn-danger" href="admin.php?action=logout">Se déconnecter</a> 
<?php 
foreach($themes as $key => $themeBoucle){ ?>
<h2><?= $key ?></h2>
<a class="btn btn-success" href ="admin.php?action=ajout&name=<?=$key?>"> Ajouter un sujet</a>
<?php 
foreach ($themeBoucle as $sujet){ ?>
    <h3><?= $sujet['topicName'] ?></h3>
    <a href="admin.php?action=modif&id=<?= $sujet['id']?>&table=<?=$key?>"> <button type="button" class="btn btn-primary">Modifier</button></a>
    <button type="button" class="btn btn-danger">Supprimer</button>

<?php } ?>
<?php } ?> 


    



</div>



<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>



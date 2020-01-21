<?php 
$title = "Admin";
$style = "public/css/identification.css"; 
$script = "";


ob_start(); ?>
<?php require('view/admin/navbar.php'); ?>
<div class="container-fluid mt-5">
    <div class="row">

        <?php 
foreach($themes as $key => $themeBoucle){ ?>
        <div class="col-md-4">
            <div class="d-flex">
                <h2><?= $key ?></h2>
                <a class="btn btn-success ml-2" href="admin.php?action=ajout&name=<?=$key?>"> Ajouter un sujet</a>
            </div>
            <a class="btn btn-outline-secondary" href="#<?=$key?>" data-toggle="collapse">Plus de détails</a>
            <div id="<?=$key?>" class="collapse"> <?php 
foreach ($themeBoucle as $sujet){ ?> 
            <div>
                <h3><?= $sujet['topicName'] ?></h3>
                <a href="admin.php?action=modif&id=<?= $sujet['id']?>&table=<?=$key?>"><button type="button" class="btn btn-primary">Modifier</button></a>
                <a href="admin.php?action=suppression&id=<?= $sujet['id']?>&table=<?=$key?>"><button type="button" class="btn btn-danger">Supprimer</button>
            </div>

            <?php } ?>
        </div>
    </div>
    <?php } ?>

</div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
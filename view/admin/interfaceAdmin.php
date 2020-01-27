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
        <div class="col-md-4 col-xs-12 col-sm-12 ">
            <div class="d-flex flex-wrap">
              <div>  <h2 class="text-break"><?= $key ?></h2> </div>
               <div> <a class="btn btn-success ml-2" href="admin.php?action=ajout&name=<?=$key?>"> Ajouter un sujet</a> </div>
            </div>
            <a class="btn btn-outline-secondary" href="#<?=$key?>" data-toggle="collapse">Plus de détails</a>
            <div id="<?=$key?>" class="collapse"> <?php 
foreach ($themeBoucle as $sujet){ ?>
                <div>
                    <h3><?= $sujet['topicName'] ?></h3>
                    <a href="admin.php?action=modif&id=<?= $sujet['id']?>&table=<?=$key?>"><button type="button"
                            class="btn btn-primary">Modifier</button></a>
                    <a href="admin.php?action=confirmation&id=<?= $sujet['id']?>&table=<?=$key?>"><button type="button"
                            class="btn btn-danger">Supprimer</button></a>
                </div>

                <?php } ?>
            </div>
        </div>
        <?php } ?>


    </div>



    <?php $content = ob_get_clean(); ?>
    <?php require('view/frontend/template.php'); ?>
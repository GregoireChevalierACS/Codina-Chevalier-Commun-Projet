<?php 
$title = "Admin";
$style = "public/css/identification.css"; 
$script = "public/js/interfaceAdmin.js";

function changeKeyToValue($key){

    switch($key){

        case "Planets":
            return "Planètes";
        case "PhenomesInfinimentPetit":
            return "Infiniment Petit";
        case "PhenomenesInfinimentGrand":
            return "Infiniment Grand";
    }


}
ob_start(); ?>

<?php require('view/admin/navbar.php'); 
if($suppression){ ?>

<div class="container">
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        Le sujet a bien été supprimé !
    </div>
</div>

<?php
$suppression = false; 
}
?>


<div class="container-fluid mb-3">



    <?php 
foreach($themes as $key => $themeBoucle){ 
    $valueTheme = changeKeytoValue($key);
                ?>
    <div class="row">


        <div class="col-md-2 col-xs-12 col-sm-12 aside">
            <div id="<?=$valueTheme?>">
                <h2 class="text-wrap topic"><?= $valueTheme ?></h2>
            </div>
        </div>
       


        <div class="col-md-10 subject" id=<?=$key?>>
         
        <h3 class="text-center"><?=$valueTheme?></h3>
        <div> <a class="btn btn-success mb-2" href="admin.php?action=ajout&name=<?=$key?>"> Ajouter un sujet</a> </div>
            <?php       
foreach ($themeBoucle as $sujet){?>

            
            <h3><?= $sujet['topicName'] ?></h3>
            <a href="admin.php?action=modif&id=<?= $sujet['id']?>&table=<?=$key?>"><button type="button"
                    class="btn btn-primary">Modifier</button></a>
            <a
                href="admin.php?action=confirmation&id=<?= $sujet['id']?>&table=<?=$key?>&nameTopic=<?=$sujet['topicName']?>"><button
                    type="button" class="btn btn-danger">Supprimer</button></a>



            <?php } ?>
        </div>
    </div>
    <?php } ?>

</div>


</div>



<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
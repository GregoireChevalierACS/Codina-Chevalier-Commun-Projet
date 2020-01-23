<?php
$title = "Vos tags" ;
$style = "public/css/tag.css"; 
$script = "public/js/infos.js";
?>

<?php ob_start(); ?>

<header class="mb-5">
<h1 class="text-center"> Haut-faits </h1>
    <div class="mb-5" id="retour">
        <a href="index.php?action=menu"><img id="shipReturn" src="Ressources/VisuelsOK/startscreenShipV4.png"></a>
        <p> Retour </p>
    </div>
</header>


<div class="container-fluid">
    <div class="row mt-5">
        <?php 
        foreach($tags as $tag){ ?>
        
        <div class=" col-lg-2 col-md-4 col-sm-12 col-xs-12 d-flex justify-content-center">
            <div class="card mt-3" style="width: 18rem; height: 30rem;">
                <img class="card-img-top <?php 
                      if(!in_array($tag['nameCookie'], $_COOKIE)){
                        echo 'desactive'; 
                    } ?> " src="<?= $tag['visuel'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class=" text-dark card-title"><?= $tag['nameTag']?></h5>
                    <p class="card-text text-dark"> <?= $tag['description']?> </p>

                </div>
            </div>
        </div>

        <?php } ?>
    </div>
</div>






<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
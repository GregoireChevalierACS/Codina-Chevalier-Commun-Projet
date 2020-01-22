<?php
$title = "Vos tags" ;
$style = "public/css/tag.css"; 
$script = "public/js/infos.js";
?>

<?php ob_start(); ?>
<h1 class="text-center mb-5"> Les badges que vous avez gagné : </h1>
<div class="container-fluid">
    <div class="row">
        <?php 
        foreach($tags as $tag){ ?>
        
        <div class="col-md-2 col-xs-12 ">
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
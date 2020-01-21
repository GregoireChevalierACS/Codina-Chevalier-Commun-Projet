<?php 
$title = "Profil : " . $_SESSION['user'];
$style = "public/css/identification.css"; 
$script = "public/js/admin.js";
ob_start(); ?>
<?php require('view/admin/navbar.php'); ?>
<div class="container mt-5">
    <div class="row">

        <div class="col-md-6 col-xs-12" id="changePass">
            <form  id ="form" action="admin.php?action=changePass">
                <div class="form-group">
                    <label>Changer son mot de passe </label>
                    <input id="pass" type="password" name= "password" class="form-control" required> </input>
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>

        </div>

        <div class="col-md-6 col-xs-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= $infosProfil[0]['avatar']?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class=" text-dark card-title"><?= $_SESSION['user'] ?></h5>
                    <p class="card-text text-dark">Profil de <?=$_SESSION['user']?> </p>
                    
                </div>
            </div>
        </div>

    </div>

</div>



<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
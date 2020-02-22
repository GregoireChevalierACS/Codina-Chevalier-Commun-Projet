<?php
$title = "Identification Administrateur";
$style = "public/css/identification.css";
$script = "";

ob_start();?>
<div class="contain">
    <div id="formAdmin" class="p-3">
        <div class="mb-3">
            <h1>Espace Admin</h1>
        </div>


        <div id="form">
            <form action="admin.php?action=connect" method="post">
                <label> Nom d'utilisateur : </label>
                <input class="form-control" type="text" name="user" />
                <label> Mot de passe : </label>
                <input class="form-control" type="password" name="password" />
                <div class="d-flex justify-content-end">

                    <div> <button class="btn btn-primary mt-2" type="submit"> Se connecter</button> </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php $content = ob_get_clean();?>
<?php require 'view/frontend/template.php';?>
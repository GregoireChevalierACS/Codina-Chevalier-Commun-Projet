<?php 
$title = "Identification Administrateur";
$style = "public/css/identification.css"; 
$script = "";

ob_start(); ?>
<div>
    <div>
        <h1> Bienvenue sur votre espace d'administration </h1>
    </div>


    <div id="form">
        <form action="admin.php?action=connect" method="post">
            <p>Votre nom : <input type="text" name="user" /></p>
            <p>Votre MDP : <input type="password" name="password" /></p>
            <p><input type="submit" value="OK"></p>
        </form>
    </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
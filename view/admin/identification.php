<?php ob_start(); ?>

<form action="admin.php?action=connect" method="post">
 <p>Votre nom : <input type="text" name="user" /></p>
 <p>Votre MDP : <input type="password" name="password" /></p>
 <p><input type="submit" value="OK"></p>
</form>



<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
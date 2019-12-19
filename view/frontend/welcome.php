<?php $title = 'Notre super site'; ?>
<?php ob_start(); ?>

<em><a href="index.php" class="btn btn-primary">Lauch!</a></em>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

<?php $title = 'Notre super site'; ?>
<?php ob_start(); ?>

<em><a href="index.php?action=launch" class="btn btn-primary">Launch!</a></em>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

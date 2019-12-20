<?php $title = 'Navette en chemin'; ?>
<?php ob_start(); ?>
<em><a href="index.php?action=mercure" class="btn btn-primary">
Mercure </a></em>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
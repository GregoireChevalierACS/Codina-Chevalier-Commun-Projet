
<?php 
$title = "Modification";
$style = ""; 
$script = "";


ob_start(); ?>
<div class="container">
<form action="admin.php?action=modifiedTopic">

<?php

foreach($sujetModified[0] as $key => $value){
    
    if(!is_int($key)){
    ?>

    
  <div class="form-group">
    <label><?= $key ?></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="<?= $key?>" ><?= $value ?></textarea>
  </div>
  
<?php }
} ?>

<p><input type="submit" value="OK"></p>  
</form>

</div>

<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>



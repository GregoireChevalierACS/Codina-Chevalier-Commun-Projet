<?php 
$title = "Modification";
$style = "public/css/modifSujet.css"; 
$script = "";

function formType($type,$nameInput, $content){
 
  if($type === 'integer'){
    
      ob_start(); ?>
<div class="form-group">
    <label><?= $nameInput?></label>
    <input type="number" name="<?=$nameInput?>" class="form-control" value="<?=$content?>"></input>
</div>

<?php $formInput =  ob_get_clean();
      return $formInput;
  } else if($type === 'string') {
      ob_start(); ?>
<div class="form-group">
    <label><?= $nameInput?></label>
    <textarea name="<?=$nameInput?>" class="form-control" id="exampleFormControlTextarea1"
        rows="3"> <?=$content?></textarea>
</div>

<?php $formInput =  ob_get_clean();
      return $formInput;
  } else if($type === 'double'){
      ob_start(); ?>
<div class="form-group">
    <label><?= $nameInput?></label>
    <input type="number" step="0.01" name="<?=$nameInput?>" class="form-control" value="<?=$content?>"></input>
</div>

<?php $formInput =  ob_get_clean();
      return $formInput;

  }

}


ob_start(); ?>
<div class="container">
    <a class="btn btn-primary" href ="admin.php"> Retour </a> 
    <h1 class="text-center"> Modification du sujet : <?=$sujetModified[0]['topicName']?></h1>
    <form action="admin.php?action=modifiedTopic" method="post">

        <?php

foreach($sujetModified[0] as $key => $value){
    
    if(!is_int($key) && !($key == "id")){  
    echo formType(gettype(($value)), $key, $value);
    ?>
        <?php }
} ?>
        <input name="idTopic" type="hidden" value="<?= $_GET['id'] ?>">
        <input name="nameTable" type="hidden" value="<?= $_GET['table'] ?>">

        <button type="submit" class="btn btn-primary">Valider</button>
    </form>

</div>

<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
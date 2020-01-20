<?php
$title = "Ajouter une entrée";
$style = "public/css/modifSujet.css";
$script = "";



function formType($type,$nameInput){

    if($type === 'int(9)'){
        ob_start(); ?>
<div class="form-group">
    <label><?= $nameInput?></label>
    <input type="number" name="ajout[<?=$nameInput?>]" class="form-control"> </input>
</div>

<?php $formInput =  ob_get_clean();
        return $formInput;
    } else if($type === 'text') {
        ob_start(); ?>
<div class="form-group">
    <label><?= $nameInput?></label>
    <textarea name="ajout[<?=$nameInput?>]" class="form-control" id="exampleFormControlTextarea1" rows="3"> </textarea>
</div>

<?php $formInput =  ob_get_clean();
        return $formInput;
    } else if($type === 'float'){
        ob_start(); ?>
<div class="form-group">
    <label><?= $nameInput?></label>
    <input type="number" step="0.01" name="ajout[<?=$nameInput?>]" class="form-control"> </input>
</div>

<?php $formInput =  ob_get_clean();
        return $formInput;

    }

}

ob_start();?>
<div class="container">
<a class="btn btn-primary" href ="admin.php">Retour</a> 
    <div>
        <h1> Ajout un sujet à la table :<?= $table ?></h1>
    </div>


    <div>
        <form action="admin.php?action=ajoute&table=<?=$table?>" method="post">
            <?php 
            foreach($columns as $column){
                if ($column['Field'] !== "id"){

                echo formType($column['Type'], $column['Field']); 
                } 
            } ?>


            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
</div>



<?php $content = ob_get_clean();?>
<?php require 'view/frontend/template.php';?>
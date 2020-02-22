<?php
$title = "Ajouter une entrée";
$style = "public/css/modifSujet.css";
$script = "public/js/ajaxUpdate_Add.js";


// Fonction qui gènere automatiquement un champ de formulaire qui corresond à la structure de la table
function formType($type,$nameInput, $labelInput){

    if($type === 'int(9)'){
        ob_start(); ?>
<div class="form-group">
    <label><?= $labelInput?></label>
    <input  type="number" name="ajout[<?=$nameInput?>]" class="form-control champs " required > </input>
</div>

<?php $formInput =  ob_get_clean();
        return $formInput;
    } else if($type === 'text') {
        ob_start(); ?>
<div class="form-group">
    <label><?= $labelInput?></label>
    <textarea  name="ajout[<?=$nameInput?>]" class="form-control champs " rows="3" required > </textarea>
</div>

<?php $formInput =  ob_get_clean();
        return $formInput;
    } else if($type === 'float'){
        ob_start(); ?>
<div class="form-group">
    <label><?= $labelInput ?></label>
    <input  type="number" step="0.01" name="ajout[<?=$nameInput?>]" class="form-control champs" required > </input>
</div>

<?php $formInput =  ob_get_clean();
        return $formInput;

    }

}

function changeKeytoValue($key){
  
    switch($key){
        case "sizeIMG": 
            return "Taille de l'image à l'écran :  (en pourcentage hauteur d'écran)";
        case "topicName":
            
            return   "Nom du topic :"; 
         

        case "distance_to_sun":
            return  "Distance jusqu'au Soleil : ( en kilomètres ) "; 
         

        case "type": 
            return  "Type :";
        ;

        case "orbital_period": 
            return  "Période orbitale : ( en jours terrien )";
        

        case "rotation_period": 
            return  "Période de rotation : ( en jours terrien )";
        

        case "temperature": 
            return  "Température :";
        

        case "diameter": 
            return  "Diamètre : ( en kilomètres ) ";
        

        case "mass": 
            return  "Masse :";
        

        case "composition": 
            return  "Composition :";
        

        case "gravity": 
            return  "Gravité : ( en pourcentage de la gravité terrestre ) ";
        

        case "satellites": 
            return  "Satellites :";
        

        case "fun_fact": 
            return  "Fun fact :";
        

        case "discovery_date": 
            return  "Date de découverte :";
        

        case "visuel": 
            return  "Url de l'image :";
        

        case "typeSecondary": 
            return  "Type secondaire : ";
        

        case "description": 
            return  "Description :";
        

        case "personne": 
            return  "Personnalité reliée(s) : ";
        

        case "subjectDescription": 
            return  "Description : ";
        

        case "history": 
            return  "Contenu historique :  ";
        

        case "dimensions": 
            return  "Dimensions du phénomène : ";
        

        case "peopleRelatedTo": 
            return  "Personnalité reliée(s) : ";
        

        case "funFactEtLiens": 
            return  "Fun fact : ";
              
    }
}
ob_start();?>
<div class="container">
<a name="haut"></a>
<div id="alert"></div>
<a class="btn btn-primary" href ="admin.php">Retour</a> 
    <div>
        <h1> Ajout un sujet à la table :<?= $table ?></h1>
    </div>


    <div>
        <form id="addEntries" action="admin.php?action=ajoute&table=<?=$table?>" method="post">
        
            <?php 
            foreach($columns as $column){
                if ($column['Field'] !== "id"){
                $nameInput = changeKeytoValue($column['Field']); 
                echo formType($column['Type'], $column['Field'], $nameInput); 
                } 
            } ?>


            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
</div>



<?php $content = ob_get_clean();?>
<?php require 'view/frontend/template.php';?>
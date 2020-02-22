<?php 
$title = "Modification";
$style = "public/css/modifSujet.css"; 
$script = "public/js/ajaxUpdate_Add.js";


// Fonction qui gènere automatiquement un champ de formulaire qui corresond à la structure de la table

function formType($type,$nameInput, $content, $nameLabel){
 
  if($type === 'integer'){
    
      ob_start(); ?>
<div class="form-group">
    <label><?= $nameLabel?></label>
    <input type="number" name="<?=$nameInput?>" class="form-control champs" value="<?=$content?>"></input>
</div>

<?php $formInput =  ob_get_clean();
      return $formInput;
  } else if($type === 'string') {
      ob_start(); ?>
<div class="form-group">
    <label><?= $nameLabel?></label>
    <textarea name="<?=$nameInput?>" class="form-control champs "
        rows="3"> <?=$content?></textarea>
</div>

<?php $formInput =  ob_get_clean();
      return $formInput;
  } else if($type === 'double'){
      ob_start(); ?>
<div class="form-group">
    <label><?= $nameLabel?></label>
    <input type="number" step="0.01" name="<?=$nameInput?>" class="form-control champs" value="<?=$content?>"></input>
</div>

<?php $formInput =  ob_get_clean();
      return $formInput;

  }

}

function changeKeytoValue($key){
  
    switch($key){

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


ob_start(); ?>
<div class="container">
<a name="haut"></a>
<div id="alert"></div>

    <a class="btn btn-primary" href ="admin.php"> Retour </a> 
    <h1 class="text-center"> Modification du sujet : <?=$sujetModified[0]['topicName']?></h1>
    <form id="updateEntries" action="admin.php?action=modifiedTopic" method="post">

        <?php

foreach($sujetModified[0] as $key => $value){
    
    

    if(!is_int($key) && !($key == "id")){ 
        $nameInput = changeKeytoValue($key);
        echo formType(gettype(($value)), $key, $value, $nameInput);
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
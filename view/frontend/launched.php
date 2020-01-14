<?php 
$title = 'Navette en chemin';
$style = 'public/css/launched.css';
$script = 'public/js/ratioViewport.js';
 ?>
 
<?php ob_start(); ?>


<body>


<div class="placeholderViewer">

<p class="boutonRetour">
<a href="index.php?action=infinimentPetit">Dans les méandres de la matière</a>
</p>

     <div class ="scroll">
           <?php foreach($namesPlanets as $name){ ?>
               <?php 
                    $nom = $name['namePlanet'];
                    $concatenation = str_replace(' ', '', $nom);
               ?>
               <div class="type">   
                    <a href="index.php?action=planets&name=<?=$name['namePlanet']?>">
                    <img src="<?=$name['visuel'] ?>" class="boutonIG placeholderClass" id="<?= $concatenation ?>">
                    </a>
               </div>
 <?php } ?> 

     </div>

 <div class="boutonRetour">
 <a href="index.php?action=infinimentGrand">Vers l'infini et au delà</a>
</div> 
</body>

<?php $content = ob_get_clean(); ?>
<?php require("template.php"); ?>
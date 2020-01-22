<?php
require ('view/achievement.php');


if (!isset($_SESSION['scoreQuizz'])){
    $_SESSION['scoreQuizz'] = 0;
    $_SESSION['numberQuestion'] = 0;  
} 

if (!empty($_POST)){
    
    $_SESSION['numberQuestion']++;
  
   if($_POST['idGoodReponse'] === $_POST['reponse']){
       $_SESSION['scoreQuizz']++; 
       if(!isset($_COOKIE['goodReponse'])){
       setcookie('goodReponse', 'goodReponse');
        $_COOKIE['goodReponse'] = false;?>
<div class=" alert alert-success" role="alert">
    Première bonne réponse.
</div>
<?php }?>

<div class=" alert alert-success" role="alert">

    Bonne réponse. <?= $_SESSION['scoreQuizz']?> / <?= $_SESSION['numberQuestion'] ?>
</div>
<?php }else{ 
    if(!isset($_COOKIE['fausseReponse'])){ 
       setcookie('fausseReponse', 'fausseReponse');
        $_COOKIE['fausseReponse'] = false;?>
<div class=" alert alert-danger" role="alert">
    Première mauvaise réponse.
</div>
<?php } ?>

<div class=" alert alert-danger" role="alert">
    Mauvaise réponse. <?= $_SESSION['scoreQuizz']?> / <?= $_SESSION['numberQuestion'] ?>
    La bonne réponse était: <?= $lastGoodResponse ?>
</div>
<?php } 
}



?>
<?php 
if(isset($Planetquizz) &&  $Planetquizz){
    $Planetquizz = false; 
  ?>

<div class=" alert alert-success" role="alert">
    Première réponse au quizz stellaire !
</div>
<?php } ?>

<?php 
if(isset($Particlequiz) &&  $Particlequiz){
    $Particlequiz = false; 
  ?>

<div class=" alert alert-success" role="alert">
    Première réponse au quizz infiniment petit !
</div>
<?php } ?>
<?php 
if(isset($phenomeneIGquiz) &&  $phenomeneIGquiz){
    $phenomeneIGquiz = false; 
  ?>

<div class=" alert alert-success" role="alert">
    Première réponse au quizz interstellaire !
</div>
<?php } ?>


<p> <?= $question['question']?> </p>
<form action="index.php?action=response&name=<?=$_GET['action']?>" id="form">
    <input name="idGoodReponse" type="hidden" value="<?= $question['idGoodReponse'] ?>">
    <input name="theme" type="hidden" value="<?= $question['theme'] ?>">
    <?php foreach($responses as $response){ ?>
    <div>
        <input class="quizzCheckbox" type="radio" name="reponse" value="<?=$response['id'] ?>">
        <label for="<?=$response['reponse'] ?>"><?=$response['reponse'] ?></label>
    </div>



    <?php } ?>

    <button type="submit"> Envoyez! </button>
</form>
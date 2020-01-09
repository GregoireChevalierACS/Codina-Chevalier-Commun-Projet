<?php 
if (!empty($_POST)){
  
   if($_POST['idGoodReponse'] === $_POST['reponse']){ ?>
<div class=" alert alert-success" role="alert">
    Bonne réponse
</div>
<?php }else{ ?>
<div class=" alert alert-danger" role="alert">
    Mauvaise réponse.
</div>
<?php } 
}


?>
<p> <?= $question['question']?> </p>
<form action="index.php?action=response" id="form">
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
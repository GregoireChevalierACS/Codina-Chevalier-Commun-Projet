<p> <?= $question['question']?> </p>
<form  action="index.php?action=response" id="form">
<input  name="idGoodReponse" type="hidden" value="<?= $question['idGoodReponse'] ?>">
<input  name="theme" type="hidden" value="<?= $question['theme'] ?>">
<?php foreach($responses as $response){ ?>
 <div>    
    <input type="checkbox" name="<?=$response['reponse'] ?>" value="<?=$response['id'] ?>">
    <label for="<?=$response['reponse'] ?>"><?=$response['reponse'] ?></label> 
 </div>   



   <?php } ?>


</form>


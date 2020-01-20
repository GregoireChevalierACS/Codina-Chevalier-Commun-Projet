 for($i = 1; $i < count($columns);$i++){ ?>
            <div class="form-group">
                <label><?= $columns[$i]?></label>
                <textarea name="ajout[<?=$columns[$i]?>]" class="form-control" id="exampleFormControlTextarea1" rows="3"> </textarea>
            </div>
            <?php } ?>

<p>
Voulez-vous vraiment supprimer l'entrée n°<?= $idToDelete ?> de <?= $tableToDelete ?> ? Cette action est irréversible.
</p>

<a href="admin.php?action=suppression&id=<?= $idToDelete?>&table=<?=$tableToDelete?>"><button type="button">Supprimer</button></a>
<a href="admin.php"><button type="button">Non, j'ai glissé</button></a>
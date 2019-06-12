<?php
if(isset($_GET['suppr']) AND !empty($_GET['suppr'])) {
    $suppr = $bdd->prepare('DELETE FROM photo WHERE id_photo=?');
    $suppr->execute(array($_GET['suppr']));
 }
 ?>

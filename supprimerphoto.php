<?php
try
{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=futsal;charset=UTF8', 'commun', 'commun');

}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}

if(isset($_GET['id_photo']) AND !empty($_GET['id_photo'])) {
    $suppr_id = htmlspecialchars($_GET['id_photo']);
    $suppr = $bdd->prepare('DELETE FROM photo WHERE id_photo=?');
    $suppr->execute(array($suppr_id));
  //  header('Location: gestionphoto.php'); //
    exit;
 }

 ?>

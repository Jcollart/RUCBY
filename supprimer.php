<?php
try
{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=futsal;charset=UTF8', 'commun', 'commun');
  
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer
if(isset($_GET['id_news']) AND !empty($_GET['id_news'])) {
    $suppr_id = htmlspecialchars($_GET['id_news']);
    $suppr = $bdd->prepare('DELETE id_news FROM news  WHERE id_news');
    $suppr->execute(array($suppr_id));
    header('Location: http://127.0.0.1/html/rucby/');
 }
  echo ' la news est supprimée';
 ?>
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
    $suppr = $bdd->prepare('DELETE FROM news  WHERE id_news=?');
    $suppr->execute(array($suppr_id));
    echo ' la news est supprimée youpi';
    
 }
 
 ?>
<br /><br />
<a href="gestionarticle.php">>> Gestion des news</a>
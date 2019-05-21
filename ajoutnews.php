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
   $get_id = htmlspecialchars($_GET['id_news']);
   $article = $bdd->prepare('SELECT * FROM articles WHERE id_news = ?');
   $article->execute(array($get_id));
   if($article->rowCount() == 1) {
      $article = $article->fetch();
      $titre = $article['titre_news'];
      $contenu = $article['description_news'];
   } else {
      die('Cet article n\'existe pas !');
   }
} else {
   die('Erreur');
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Accueil</title>
   <meta charset="utf-8">
</head>
<body>
   <h1><?= $titre ?></h1>
   <p><?= $contenu ?></p>
</body>
</html>
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


$articles = $bdd->query('SELECT * FROM news ORDER BY id_news DESC');
?>
<!DOCTYPE html>
<html>
<head>
   <title>Gestion des Articles</title>
   <meta charset="utf-8">
</head>
<body>
   <ul>
      <?php while($a = $articles->fetch()) { ?>
      <li><a href="article.php?id_news=<?= $a['id_news'] ?>"><?= $a['titre_news'] ?></a> | <a href="redaction.php?edit=<?= $a['id_news'] ?>">Modifier</a> | <a href="supprimer.php?id_news=<?= $a['id_news'] ?>">Supprimer</a></li>
      <?php } ?>
   <ul>
</body>
</html>
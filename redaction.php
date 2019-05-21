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
$mode_edition = 0;
if(isset($_GET['edit']) AND !empty($_GET['edit'])) {
   $mode_edition = 1;
   $edit_id = htmlspecialchars($_GET['edit']);
   $edit_article = $bdd->prepare('SELECT * FROM news WHERE id_news = ?');
   $edit_article->execute(array($edit_id));
   if($edit_article->rowCount() == 1) {
      $edit_article = $edit_article->fetch();
   } else {
      die('Erreur : l\'article n\'existe pas...');
   }
}
if(isset($_POST['titre_news'], $_POST['description_news'])) {
   if(!empty($_POST['titre_news']) AND !empty($_POST['description_news'])) {
      
      $article_titre = htmlspecialchars($_POST['titre_news']);
      $article_contenu = htmlspecialchars($_POST['description_news']);
      if($mode_edition == 0) {
         $ins = $bdd->prepare('INSERT INTO news (titre_news, description_news, date_news) VALUES (?, ?, NOW())');
         $ins->execute(array($article_titre, $article_contenu));
         header('Location: http://127.0.0.1/html/rucby/article.php?id_news='.$_GET['id_news']);
         $message = 'Votre article a bien été posté';
      } else {
         $update = $bdd->prepare('UPDATE news SET titre_news = ?,description_news = ?, date_news = NOW() WHERE id_news = ?');
         $update->execute(array($article_titre, $article_contenu, $edit_id));
         header('Location: http://127.0.0.1/html/rucby/news.php');
         $message = 'Votre article a bien été mis à jour !';
      }
   } else {
      $message = 'Veuillez remplir tous les champs';
   }
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Rédaction / Edition</title>
   <meta charset="utf-8">
</head>
<body>
   <form method="POST">
      <center><input type="text" name="titre_news" placeholder="Titre"<?php if($mode_edition == 1) { ?> value="<?= 
      $edit_article['titre_news'] ?>"<?php } ?> /><br />
      <textarea name="description_news" placeholder="Contenu de l'article"><?php if($mode_edition == 1) { ?><?= 
      $edit_article['description_news'] ?><?php } ?></textarea><br />
      <input type="submit" value="Envoyer l'article" /></center>
   </form>
   <br />
   <?php if(isset($message)) { echo $message; } ?>
</body>
</html>
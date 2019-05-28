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
   $edit_article = $bdd->prepare('SELECT * FROM news INNER JOIN image WHERE  id_news = id_image');
   $edit_article->execute(array($edit_id));
   if($edit_article->rowCount() == 1) {
      $edit_article = $edit_article->fetch();
   } else {
      die('Erreur : l\'article n\'existe pas...');
   }
}
if(isset($_POST['titre_news'], $_POST['description_news'], $_POST['nom_image'])) {
   if(!empty($_POST['titre_news']) AND !empty($_POST['description_news']) AND !empty($_POST['nom_image']) ) {
      
      $article_titre = htmlspecialchars($_POST['titre_news']);
      $article_contenu = htmlspecialchars($_POST['description_news']);
      $article_photo = htmlspecialchars($_POST['nom_image']);
      if($mode_edition == 0) {
       // var_dump($_FILES);
         // var_dump(exif_imagetype($_FILES['miniature']['tmp_name']));
         $ins = $bdd->prepare('INSERT INTO  image (nom_image), news (titre_news, description_news, date_news) VALUES (?,?,?, NOW())');
         $ins->execute(array($article_titre, $article_contenu, $article_photo));
         $lastid = $bdd->lastInsertId();
         
         if(isset($_FILES['image']) AND !empty($_FILES['image']['nom_image'])) {
            if(exif_imagetype($_FILES['images']['nom_image']) == 2) {
               $chemin = 'images/'.$lastid.'.jpg';
               move_uploaded_file($_FILES['image']['nom_image'], $chemin);
            } else {
               $message = 'Votre image doit être au format jpg';
            }
         }
         $message = 'Votre article a bien été posté';
      } else {
         $update = $bdd->prepare('UPDATE news SET titre_news = ?, description_news = ?, date_news = NOW() WHERE id = ?');
         $update->execute(array($article_titre, $article_contenu, $edit_id));
         header('Location: http://127.0.0.1/html/Rucby/news.php?id='.$edit_id);
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
   <link rel="stylesheet" href="css/redaction.css">
</head>

<body>
   <div titreajout>
      <center>
         <h1> AJOUT DE LA NEWS </h1>
         <center>
   </div>

   <form method="POST" enctype="multipart/form-data">
      <center><input type="text" name="titre_news" placeholder="Titre" <?php if($mode_edition == 1) { ?> value="<?= 
      $edit_article['titre_news'] ?>" <?php } ?> /><br /><br />
         <textarea name="description_news" placeholder="Contenu de l'article"><?php if($mode_edition == 1) { ?><?= 
      $edit_article['description_news'] ?><?php } ?></textarea><br /><br />
         <?php if($mode_edition == 0) { ?>
         <input type="file" name="images" /><br /><br />
         <?php } ?>
         <input type="submit" value="Soumettre l'article" /></center>
   </form>
   <br />
   <?php if(isset($message)) { echo $message; } ?>
</body>

</html>
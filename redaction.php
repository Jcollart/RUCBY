<?php
try
{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=futsal;charset=UTF8', 'root', '');
  
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
   $edit_news = $bdd->prepare('SELECT * FROM news WHERE id_news = ?');
   $edit_news->execute(array($edit_id));
   if($edit_news->rowCount() == 1) {
      $edit_news = $edit_news->fetch();
   } else {
      die('Erreur : la news n\'existe pas...');
   }
}
if(isset($_POST['titre_news'], $_POST['description_news'])) {
   if(!empty($_POST['titre_news']) AND !empty($_POST['description_news'])) {
      
      $news_titre = htmlspecialchars($_POST['titre_news']);
      $news_contenu = htmlspecialchars($_POST['description_news']);
      //$image_nom = htmlspecialchars($_POST['nom_image']);
      if($mode_edition == 0) {
      
         $ins = $bdd->prepare('INSERT INTO  news (titre_news, description_news, date_news) VALUES (?, ?, NOW())');
         $ins->execute(array($news_titre, $news_contenu));
         //$ins1 = $bdd->prepare("INSERT INTO image (nom_image) VALUES (?)");
         //ins1->execute(array($image_nom));
         //$lastid = $bdd->lastInsertId();
         //$ins1 = $bdd->prepare("INSERT INTO  image (nom_image) VALUES ($image_nom)");
         //$ins1->execute(array($image_nom));
         //$lastid1 = $bdd->lastInsertId();
         //$ins2 = $bdd->prepare("INSERT INTO appartenir(id_news,id_image) VALUES( ?, ?)");
         //$ins2->execute(array('id_news', 'id_image'));
         $message = 'Votre news a bien été posté !';
      } else {
         $update = $bdd->prepare('UPDATE news SET titre_news = ?, description_news = ?, date_news = NOW() WHERE id_news = ?');
         $update->execute(array($news_titre, $news_contenu, $edit_id));
         $message = 'Votre news a bien été mis à jour !';
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
   
   <br/><br/><br/><br/>

   <div titreajout>
      <center>
         <h1> AJOUT OU MODIFICATION DE LA NEWS </h1>
         <center>
   </div>

   <form method="POST" enctype="multipart/form-data">
      <center><input type="text" name="titre_news" placeholder="Titre" <?php if($mode_edition == 1) { ?> value="<?= 
      $edit_news['titre_news'] ?>" <?php } ?> /><br /><br />
         <textarea name="description_news" placeholder="Contenu de la news"><?php if($mode_edition == 1) { ?><?= 
      $edit_news['description_news'] ?><?php } ?></textarea><br /><br />

         <?php //if($mode_edition == 0) { ?>
        <!-- <input type="file" name="images" <?php //} ?><br/><br />-->

         <input type="submit" value="Soumettre l'article" />
   </form><br /><br />
   <a href="gestionarticle.php">>> Gestion des news <<</a><br /><br />
   <a href="gestionphoto.php">>> Gestion des photos <<</a></center>
   <br />
   <?php if(isset($message)) { echo $message; } ?>
</body>

</html>
<?php
session_start();

include('php/connectbdd.php');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   //$getid = intval($_GET['id_membres']);
   $requser = $bdd->prepare('SELECT * FROM membres WHERE id_membres = ?');
   $requser->execute(array($_GET['id']));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>testprofil</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
         <br><br>
         Pseudo = <?php echo $userinfo['pseudo']; ?>
         <br>
         Mail = <?php echo $userinfo['mail']; ?>
         <br>
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id_membres'] == $_SESSION['id'])
         {
         ?>
         <br>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
       }
         ?>
      </div>
   </body>
</html>

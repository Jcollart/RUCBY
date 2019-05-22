<?php
session_start();

include('php/connectbdd.php');


if(isset($_POST['formconnexion'])) {
   $pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($pseudoconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ? AND mdp = ?");
      $requser->execute(array($pseudoconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id_membres'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: gestionarticle.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais pseudo ou mauvais mot de passe !";
      }
   } else {
      $erreur = "Les champs doivent être complétés !";
   }
}
?>

<html>
   <head>
      <title>connex</title>
      <meta charset="utf-8">
   </head>
   <body>

       <a href="inscription.php">>> Page inscription</a>

      <div align="center">
         <h2>Connexion admin</h2>
         <br><br>
         <form method="POST" action="">
            <input type="text" name="pseudoconnect" placeholder="Votre pseudo" />
            <input type="password" name="mdpconnect" placeholder="Votre mot de passe" />
            <br><br>
            <input type="submit" name="formconnexion" value="Connexion" />
         </form>

         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>

      </div>
   </body>
</html>

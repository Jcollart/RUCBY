<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
  	<link rel="stylesheet" href="css/.css">
  	<title>inscri</title>
  </head>

  <body>

    <?php include('php/connectbdd.php');

    if(isset($_POST['forminscription'])) {
       $pseudo = htmlspecialchars($_POST['pseudo']);
       $mail = htmlspecialchars($_POST['mail']);
       $mdp = sha1($_POST['mdp']);
          if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mdp'])) {
            $pseudolength = strlen($pseudo);
            if($pseudolength <= 255) {
              $reqpseudo = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ?");
              $reqpseudo->execute(array($pseudo));
              $pseudoexist = $reqpseudo->rowCount();
              if($pseudoexist == 0) {
                  if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                     $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
                     $reqmail->execute(array($mail));
                     $mailexist = $reqmail->rowCount();
                     if($mailexist == 0) {
                         $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, mdp) VALUES(?, ?, ?)");
                         $insertmbr->execute(array($pseudo, $mail, $mdp));
                         $erreur = "Votre compte a bien été créé !";
                         } else {
                            $erreur = "Adresse mail déjà utilisée !";
                         }
                      } else {
                         $erreur = "Votre adresse mail n'est pas valide !";
                      }
                   } else {
                      $erreur = "Pseudo déjà utilisé !";
                   }
                } else {
                   $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
                }
             } else {
                $erreur = "Tous les champs doivent être complétés !";
             }
          }
?>

<a href="connexion.php">>> Page connexion</a>

    <div align="center">
      <h2>Inscription admin</h2>
      <br><br>
      <form method="POST" action="">
        <table>
           <tr>
              <td align="right">
                 <label for="pseudo">Pseudo :</label>
              </td>
              <td>
                 <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
              </td>
           </tr>
           <tr>
              <td align="right">
                 <label for="mail">Mail :</label>
              </td>
              <td>
                 <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
              </td>
           </tr>
           <tr>
              <td align="right">
                 <label for="mdp">Mot de passe :</label>
              </td>
              <td>
                 <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
              </td>
           </tr>
         </table>
               <br />
               <input type="submit" name="forminscription" value="Inscription" />
     </form>

     <?php
     if(isset($erreur)) {
        echo '<font color="red">'.$erreur.'</font>';
     }
     ?>

    </div>
  </body>
</html>

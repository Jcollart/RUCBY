<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact</title>
</head>

<body>
    <?php include('header2.php'); ?>

    <!--HEADER CONTACT-->

    <div id="header_contact">
        <div id="cadre_titre">
            <h1>CONTACT</h1>
        </div>
    </div>
    <!---FIN <div id="header_contact"> --->



    <!--FORMULAIRE CONTACT-->





    <form method="post" action="traitement_formulaire.php">
        <!--CONTENEUR FORMULAIRE-->
        <div  id="conteneur-form">
            <!--FORMULAIRE PARTIE GAUCHE-->
            <div  id="element-form1">

                <legend>Vos coordonnées</legend>
                <input type="text" name="nom" id="nom" placeholder="Nom" size="40" maxlength="20" />
                <br />
                <input type="text" name="prenom" id="prenom" placeholder="Prénom" size="40" maxlength="20" />
                <br />
                <input type="email" name="email" id="email" placeholder="Email" size="40" maxlength="20" />
                <br />
                <input type="text" name="sujet" id="sujet" placeholder="Sujet" size="40" maxlength="20" />

            </div>
            <!--FIN FORMULAIRE PARTIE GAUCHE-->


            <!--FORMULAIRE PARTIE DROITE-->
            <div  id="element-form2">

                <legend>Votre message</legend>
                <textarea name="message" id="message" rows="14" cols="40" placeholder="Texte"></textarea>

            </div>
            <!--FIN FORMULAIRE PARTIE DROITE-->


        </div>
        <!--FIN CONTENEUR FORMULAIRE-->

        <!--BOUTON ENVOYER-->
        <div  id=bouton-form>
            <input type="submit" value="Envoyer" />
        </div>

    </form>

    <!--PARRALAX-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="images/sport1.jpg" alt=""></div>
    <!--FIN PARRALAX-->


    <!--MAP-->

    <div id=map><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2576.956194069737!2d4.720275316032564!3d49.76808097938698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea0e062e03d7e9%3A0xc5cc5f6ee91f2b25!2sCCI+des+Ardennes!5e0!3m2!1sfr!2sfr!4v1555930070253!5m2!1sfr!2sfr"
            frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>


    <!--JOIN US-->

    <div id="join_us">
        <h2>Rejoignez-nous !</h2><br>
        <h3>Adhésion</h3><br>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis repellat nisi saepe ducimus maxime magnam
            unde, ea aspernatur rem veniam quibusdam eaque. Aut, ullam fugiat necessitatibus quas laudantium fugit
            molestiae!</p><br>
        <h4>Quels sont les avantages à devenir membre?</h4><br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit labore beatae ipsa voluptatum nisi
            possimus quaerat? Laboriosam reprehenderit eum ipsa perspiciatis quibusdam, dicta animi error, natus
            enim non repellendus quidem!</p><br>
        <h4>Comment nous rejoindre?</h4><br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore unde cupiditate ipsum dolore? Nihil,
            exercitationem impedit.</p><br>
    </div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <?php include('footer.php'); ?>
</body>


</html>

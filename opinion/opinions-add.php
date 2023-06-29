<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/common.css" type="text/css">
      <link rel="stylesheet" href="../css/contact.css" type="text/css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script type="text/javascript" src="js/opinion-validate.js"></script>
      <title>Gérer les comptes utilisateurs</title>
   </head>
   <body>
   <header>
        <section class="headerSection">
            <div class="container headerLogo">
                <a href="index.php"><img class="logo" src="../img/garage-vparrot-t.png" alt="Logo Garage V.Parrot"><h1> GARAGE V.PARROT</h1>
            </div>
            <nav class="headerNav">
                <ul class="container">
                    <li><a class="t" href="#"> </a></li>
                    <li><a class="header-button" href="contact.php">Contact</a></li>
                    <li><a class="header-button" href="login.php">Connexion</a></li>
                    <li><a class="header-button" href="#">A propos</a></li>
                </ul>
            </nav>
        </section>
    </header>
      <main>
         <?php
            require('../registration/config.php');
            if (isset($_REQUEST['name'], $_REQUEST['score'], $_REQUEST['display'], $_REQUEST['message'])){
              
              $name = stripslashes($_REQUEST['name']);
              $name = mysqli_real_escape_string($conn, $name);
            
              $score = stripslashes($_REQUEST['score']); 
            
              $display = stripslashes($_REQUEST['display']);
              $display = mysqli_real_escape_string($conn, $display);

              $message = stripslashes($_REQUEST['message']);
              $message = mysqli_real_escape_string($conn, $message);
               
              $query = "INSERT into `opinion` ( name, score, display, message)
                    VALUES ('$name', 'score', 'display', 'message')";
              $res = mysqli_query($conn, $query);
             }
             ?>
        <form id="form" enctype="multipart/form-data" onsubmit="return opinionValidate()" method="post">
                <h2>Donner son avis</h2>
                <label>Nom: <span>*</span></label>
                <input type="text" id="name" name="name" placeholder="Nom"/>
                <input type="hidden" type="text" id="display" name="display" value="non"/>
                <label>Note : <span>*</span></label>
                <input type="text" id="score" name="score" placeholder="Déçu, peu satisfait, satisfait, très satisfait.."/>
                <label>Message:</label>
                <textarea id="message" name="message" placeholder="Mon avis"></textarea>
                <input class="button" type="submit" name="send" value="Je donne mon avis"/>
                <div id="statusMessage">
                    <?php if (! empty($db_msg)) { ?>
                    <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
                    <?php } ?>
                    <?php if (! empty($mail_msg)) { ?>
                    <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
                    <?php } ?>
                </div>
            </form>
      </main>
   </body>
</html>
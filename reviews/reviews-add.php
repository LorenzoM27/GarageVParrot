<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="../img/favicon.png" />
      <link rel="stylesheet" href="../css/common.css" type="text/css">
      <link rel="stylesheet" href="../css/reviews.css" type="text/css">  
      <title>Donner un avis</title>
   </head>
   <body>
    <header>
            <section class="headerSection">
                <div class="container headerLogo">
                    <a href="../index.php"><img class="logo" src="../img/garage-vparrot-t.png" alt="Logo Garage V.Parrot"><h1> GARAGE V.PARROT</h1>
                </div>
                <nav class="headerNav">
                    <ul class="container">
                        <li><a class="t" href="#"> </a></li>
                        <li><a class="header-button" href="../contact.php">Contact</a></li>
                        <li><a class="header-button" href="../login.php">Connexion</a></li>
                        <li><a class="header-button" href="#">A propos</a></li>
                    </ul>
                </nav>
            </section>
        </header>
        <main>
            <?php
                require('../registration/config.php');
                if (isset($_REQUEST['name'], $_REQUEST['score'], $_REQUEST['display'], $_REQUEST['message'])){
                
                $name = strip_tags($_REQUEST['name']);
                $name = mysqli_real_escape_string($conn, $name);
                
                $score = strip_tags($_REQUEST['score']); 
                $score = mysqli_real_escape_string($conn, $score);
                
                $display = strip_tags($_REQUEST['display']);
                $display = mysqli_real_escape_string($conn, $display);

                $message = strip_tags($_REQUEST['message']);
                $message = mysqli_real_escape_string($conn, $message);
                
                $query = "INSERT into `reviews` ( name, score, display, message)
                        VALUES ('$name', '$score', '$display', '$message')";
                $res = mysqli_query($conn, $query);
                }
            ?>
            <div class="form">
                <form class="form" action="" method="post">
                    <h2>Votre avis compte, donnez le nous !</h2>
                    <label>Nom :</label>
                    <input type="text" name="name" placeholder="Nom" required />
                    <label>Note : </label>
                    <input type="text" name="score" placeholder="Déçu, peu satisfait, satisfait, très satisfait.." required/>
                    <input type="hidden" name="display" value="non" required />
                    <label>Mon message: </label>
                    <textarea name="message" placeholder="Mon message" required></textarea>
                    <input type="submit" class="button" name="submit" value="Je donne mon avis" required/>
                </form>
            </div>
            
        </main>
        <?php include('../includes/footer.php'); ?>
   </body>
</html>
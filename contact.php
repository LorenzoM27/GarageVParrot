<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/contact.js"></script>
    <link rel="icon" href="img/favicon.png" />
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <link rel="stylesheet" href="css/reviews.css" type="text/css">
    <title>Nous contacter</title>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <main>
    <?php
                require('registration/config.php');
                if (isset($_REQUEST['name'], $_REQUEST['email'], $_REQUEST['sujet'], $_REQUEST['message'])){
                
                $name = strip_tags($_REQUEST['name']);
                $name = mysqli_real_escape_string($conn, $name);
                
                $email = strip_tags($_REQUEST['email']); 
                $email = mysqli_real_escape_string($conn, $email);
                
                $sujet = strip_tags($_REQUEST['sujet']);
                $sujet = mysqli_real_escape_string($conn, $sujet);

                $message = strip_tags($_REQUEST['message']);
                $message = mysqli_real_escape_string($conn, $message);
                
                $query = "INSERT into `contact` ( name, email, sujet, message)
                        VALUES ('$name', '$email', '$sujet', '$message')";
                $res = mysqli_query($conn, $query);
                }
            ?>
            <div class="form">
                <form class="form" action="" method="post">
                    <h2>Nous contacter</h2>
                    <label>Nom :</label>
                    <input type="text" name="name" placeholder="Nom" required />
                    <label>Email : </label>
                    <input type="text" name="email" placeholder="Email" required/>
                    <label>Sujet : </label>
                    <input type="text" name="sujet" placeholder="Couroie de distribution" required />
                    <label>Mon message: </label>
                    <textarea name="message" placeholder="Dites nous ce qui vous tracasse !" required></textarea>
                    <input type="submit" class="button" name="submit" value="Envoyer mon message" required/>
                </form>
            </div>
    </main>
    <?php include('includes/footer.php'); ?>

</body>
</html>


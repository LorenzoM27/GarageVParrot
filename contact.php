<?php 
    require('registration/config.php');
    
?>


<?php
    if(!empty($_POST["send"])) {
        $name = strip_tags($_POST["name"]);
        $email = strip_tags($_POST["email"]);
        $subject = strip_tags($_POST["subject"]);
        $message = strip_tags($_POST["message"]);
    
        $toEmail = "lorenzo.menino@gmail.com";
        // le mdp -> VParrotGarage et mail : vincent.parrotgarage@gmail.com
        $mailHeaders = "From: " . $name . "<". $email .">\r\n";
        if(mail($toEmail, $subject, $message, $mailHeaders)) {
            $mail_msg = "Votre message à bien été envoyé.";
            $type_mail_msg = "success";
        }else{
            $mail_msg = "Une erreur est survenue, veuillez réessayer.";
            $type_mail_msg = "error";
        }
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/contact.js"></script>
    <link rel="icon" href="img/favicon.png" />
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <title>Nous contacter</title>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <main>
        <div id="box">
            <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
                <h2>Nous contacter</h2>
                <label>Nom: <span>*</span></label>
                <input type="text" id="name" name="name" placeholder="Nom"/>
                <label>Email: <span>*</span></label><span id="info" class="info"></span>
                <input type="text" id="email" name="email" placeholder="Email"/>
                <label>Sujet: <span>*</span></label>
                <input type="text" id="subject" name="subject" placeholder="Réparation, entretien, rendez-vous, occasion..."/>
                <label>Message:</label>
                <textarea id="message" name="message" placeholder="Dites nous ce qui vous tracasse !"></textarea>
                <input class="button" type="submit" name="send" value="Envoyer le message"/>
                <div id="statusMessage">
                    <?php if (! empty($db_msg)) { ?>
                    <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
                    <?php } ?>
                    <?php if (! empty($mail_msg)) { ?>
                    <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
                    <?php } ?>
                </div>
            </form>
         </div>
    </main>
    <?php include('includes/footer.php'); ?>

</body>
</html>


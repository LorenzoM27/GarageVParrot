<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <title>Nous contacter</title>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <main>
        <div id="box">
            <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
                <h3>Formulaire de contact</h3>
                <label>Nom: <span>*</span></label>
                <input type="text" id="name" name="name" placeholder="Nom"/>
                <label>Email: <span>*</span></label><span id="info" class="info"></span>
                <input type="text" id="email" name="email" placeholder="Email"/>
                <label>Sujet: <span>*</span></label>
                <input type="text" id="subject" name="subject" placeholder="Demande de renseignement"/>
                <label>Message:</label>
                <textarea id="message" name="message" placeholder="Message..."></textarea>
                <input type="submit" name="send" value="Envoyer le message"/>
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

<?php
    if(!empty($_POST["send"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
    
        $toEmail = "VotreAdresse@gmail.com";
        $mailHeaders = "From: " . $name . "<". $email .">\r\n";
        if(mail($toEmail, $subject, $message, $mailHeaders)) {
            $mail_msg = "Votre messag à bien été envoyé.";
            $type_mail_msg = "success";
        }else{
            $mail_msg = "Une erreur est survenue, veuillez réessayer.";
            $type_mail_msg = "error";
        }
    }
?>
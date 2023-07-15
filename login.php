<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" />
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <link rel="stylesheet" href="css/account.css" type="text/css">
    <title>Accéder à mon espace</title>
</head>
<body> 
    <?php include('includes/header.php'); ?>
    <?php
        require('registration/config.php');
        session_start();
        if (isset($_POST['email'])){
        $email = strip_tags($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);
        $_SESSION['email'] = $email;
        $password = strip_tags($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
            $query = "SELECT * FROM `users` WHERE email='$email' and password='".hash('sha256', $password)."'";
        
        $result = mysqli_query($conn,$query) or die(mysql_error());
        
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            // vérifier si l'utilisateur est un administrateur ou un utilisateur
            if ($user['type'] == 'admin') {
            header('location: users/admin.php');      
            }else{
            header('location: users/users.php');
            }
        }else{
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }
        }
    ?>
    <main>
        <form class="form" action="" method="post">
            <h2 class="form-title">Accéder à mon espace</h2>
            <input type="text" class="form-input" name="email" placeholder="Email" required />
            <input type="password" class="form-input" name="password" placeholder="Mot de passe" required />
            <input type="submit" class="button" name="submit" value="Me connecter" required/>
            <?php if (! empty($message)) { ?>
                <p class="errorMessage"><?php echo $message; ?></p>
            <?php } ?>
         </form>
    </main>
    
</body>
</html>
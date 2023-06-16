<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/common.css" type="text/css">
    <link rel="stylesheet" href="../css/account.css" type="text/css">
    <title>Gérer les comptes utilisateurs</title>
</head>
<body>
    <?php include('../includes/admin-header.php'); ?>
    <main>
        <?php
           require('config.php');
           if (isset($_REQUEST['email'], $_REQUEST['type'], $_REQUEST['password'])){
             // récupérer l'email 
             $email = stripslashes($_REQUEST['email']);
             $email = mysqli_real_escape_string($conn, $email);

             // récupérer le type 
             $username = stripslashes($_REQUEST['type']);
             $username = mysqli_real_escape_string($conn, $type); 

             // récupérer le mot de passe 
             $password = stripslashes($_REQUEST['password']);
             $password = mysqli_real_escape_string($conn, $password);
              
             $query = "INSERT into `users` ( email, type, password)
                   VALUES ('$email', 'user', '".hash('sha256', $password)."')";
             $res = mysqli_query($conn, $query);
            }
            ?>
            <form class="form" action="" method="post">
                <h2 class="form-title">Ajouter un utilisateur</h2>

                <input type="text" class="form-input" name="email" placeholder="Email" required />

                <input type="password" class="form-input" name="password" placeholder="Mot de passe" required />

                <input type="text" class="form-input" name="type" placeholder="admin/user" required />
                
                <input type="submit" class="form-button" name="submit" value="Ajouter" />
            </form>
    
    </main>
    
</body>
</html>
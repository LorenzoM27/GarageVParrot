<?php 
    require('../registration/config.php');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/common.css" type="text/css">
    <link rel="stylesheet" href="../css/occasion.css" type="text/css">
    <title>Nos véhicules d'occasions</title>
</head>
<body>
    <header>
            <section class="headerSection">
                <div class="container headerLogo">
                    <a href="../index.php"><img class="logo" src="../img/garage-vparrot-t.png" alt="Logo Garage V.Parrot"><h1> GARAGE V.PARROT</h1>
                </div>
                <nav class="headerNav">
                    <ul class="container">
                        <li><a class="t" href=""> </a></li>
                        <li><a class="header-button" href="../contact.php">Contact</a></li>
                        <li><a class="header-button" href="../login.php">Connexion</a></li>
                        <li><a class="header-button" href="#">A propos</a></li>
                    </ul>
                </nav>
            </section>
        </header>
        <main>
            <h2>Nos véhicules d'occasions</h2>
            <!-- ajouter la partie filtre -->
            <?php include('occasions-display.php'); ?>
        </main>
        <?php include('../includes/footer.php'); ?>
</body>
</html>
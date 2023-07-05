<?php 
    require('../registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM occasion_cars");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/slider.js"></script>
    <link rel="icon" href="../img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/common.css" type="text/css">
    <link rel="stylesheet" href="../css/occasion-detail.css" type="text/css">
    <link rel="stylesheet" href="../css/occasion.css" type="text/css">
    <title>Nos véhicules d'occasions</title>
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
            <main>
                
                <section class="detail-section">
                    <?php
                        if (mysqli_num_rows($result) > 0) {
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                    ?>
                    <h3><?php echo $row['marque'];?></h3>
                    <section class="slider-section">
                
                        <div id="slider">
                            <img class="car-image" id="slide" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image1']); ?>" alt="image voiture"/> 
                            <div id="precedent" onclick="ChangeSlide(-1)"><</div>
                            <div id="suivant" onclick="ChangeSlide(1)">></div>
                        </div>
                    
                    </section>



                    <?php
                        $i++;
                        }
                    }
                    else{
                        echo "Aucun résultat";
                    }
                    ?>
                </section>
                
            </main>
        </header>
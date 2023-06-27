<?php 
    require('registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM services WHERE id = '1'");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <title>Garage V.Parrot</title>
</head>
<body>
    <?php include('includes/header.php'); ?>
    
    <main class="activities">
        <h2 class="services">Les services que nous proposons</h2>
        <?php include('services/service1.php'); ?>
        <section class="activity">
            <?php
                    if (mysqli_num_rows($result) > 0) {
                        $i=0;
                        $first_id = 0;
                        while($row = mysqli_fetch_array($result)) {
            ?>
            <div class="div-test">
                <img class="activity-image" src="img/mecanique.jpeg" alt="Réparation et entretien des véhicules">
                <div class="activity-detail">
                    <!--<h3>Réparation carrosserie et mécanique</h3>
                    <p>Nos experts mécaniciens réparent et remplacent les pièces endomagées de votre véhicules. Notre carrossier Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque illo, dolorum quos earum maxime quod, harum dolores asperiores quidem molestias dolorem voluptatem odit voluptates laudantium! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quam autem sequi assumenda voluptatum placeat?</p>
                    <a class="button" href="#">Prendre rendez-vous</a>-->
                    <h3><?php echo $row["services"];?></h3>
                    <p><?php echo $row["description"];?></p>
                    <a class="button" href="#">Prendre rendez-vous</a>
                </div>
            </div>
            <?php
                $i++;
                }
            ?>
                <?php
                    }
                    else{
                        echo "Aucun résultat";
                    }
                ?>
        </section>
        <!--<section class="activity2">
            <div class="activity-detail">
                <h3>Révision de votre véhicule</h3>
                <p>Nos experts passent au crible votre véhicule afin de vous permettre de rouler l'esprit libre. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque illo, dolorum quos earum maxime quod, harum dolores asperiores quidem molestias dolorem voluptatem odit voluptates laudantium! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quam autem sequi assumenda voluptatum placeat?</p>
                <a class="button" href="#">Prendre rendez-vous</a>
            </div>
            <img class="activity-image2" src="img/revision.jpeg" alt="Révision de votre véhicule">
        </section>
        <section class="activity">
            <img class="activity-image" src="img/occasion.jpeg" alt="Véhicules d'occasion">
            <div class="activity-detail">
                <h3>Nos véhicules d'occasion</h3>
                <p>Révisés, entiérement controlés, nos véhicules d'occasion sont livrés avec le contrôle technique a jour, toutes les réparations sont faites. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque illo, dolorum quos earum maxime quod, harum dolores asperiores quidem molestias dolorem voluptatem odit voluptates laudantium! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quam autem sequi assumenda voluptatum placeat?</p>
                <a class="button" href="#">Voir nos véhicules d'occasion</a>
            </div>
        </section>-->


    </main>
    
    <?php include('includes/footer.php'); ?>
</body>
</html>




<?php 
    //require('registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM services WHERE id = '1'");
?>

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
            }
            else{
                echo "Aucun résultat";
            }
            ?>
        </section>
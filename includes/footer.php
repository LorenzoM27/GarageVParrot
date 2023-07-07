<?php 
    //require('registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM horaires");
?>

<footer>
        <div class="container footer">
            <section class="footer_section">
                <h4>Contact</h4>
                <p><a href="https://goo.gl/maps/GYjVsQqjm4F86qBx7" target="_blank">12 rue de mon garage <br>
                    31000 Toulouse</a></p>
                <a href="tel:+0102030405" target="_blank"> 01 02 03 04 05 </a> 
            </section>
            <section class="footer_section">
                <?php
                    if (mysqli_num_rows($result) > 0) {
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                ?>
                <h4>Horaires d'ouverture</h4>
                <p>Lundi: <?php echo strip_tags($row["lundi"]);?> </p>
                <p>Mardi: <?php echo strip_tags($row['mardi']);?></p>
                <p>Mercredi: <?php echo strip_tags($row['mercredi']);?></p>
                <p>Jeudi: <?php echo strip_tags($row['jeudi']);?></p>
                <p>Vendredi: <?php echo strip_tags($row['vendredi']);?></p>
                <p>Samedi: <?php echo strip_tags($row['samedi']);?></p>
                <p>Dimanche: <?php echo strip_tags($row['dimanche']);?></p>
            </section>
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
            <section class="footer_section">
                <h4>Nous suivre</h4>
                <div>
                    <a href="https://facebook.fr" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://instagram.fr" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
                
            </section>
        </div>
    </footer>

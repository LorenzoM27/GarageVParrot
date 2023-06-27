<?php 
    //require('registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM services WHERE id = '3'");
?>

<section class="activity">
            <?php
                if (mysqli_num_rows($result) > 0) {
                    $i=0;   
                    while($row = mysqli_fetch_array($result)) {
            ?>
            <div class="div-activity">
            <img class="activity-image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                <div class="activity-detail">
                    <h3><?php echo $row["services"];?></h3>
                    <p><?php echo $row["description"];?></p>
                    <a class="button" href="occasion/occasions.php">Voir nos véhicules</a>
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
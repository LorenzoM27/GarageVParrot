<?php 
    //require('registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM services WHERE id = '2'");
?>

<section class="activity2">
            <?php
                    if (mysqli_num_rows($result) > 0) {
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
            ?>
            <div class="div-activity div-activity2">
                <div class="activity-detail">
                    <h3><?php echo strip_tags($row["services"]);?></h3>
                    <p><?php echo strip_tags($row["description"]);?></p>
                    <a class="button" href="">Prendre rendez-vous</a>
                </div>
                <img class="activity-image2" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
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
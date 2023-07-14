<?php 
    //require('registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM reviews WHERE display = 'oui'");
?>

<section class="reviews-section">
    <h2>Les avis de nos clients</h2>
    <div class="reviews-list">
        <?php
            if (mysqli_num_rows($result) > 0) {
                 $i=0;
                while($row = mysqli_fetch_array($result)) {
        ?>
            
             <div class="reviews">
                <p><strong class="reviews-name"><?php echo strip_tags($row["name"]);?></strong></p>
                <p><?php echo $row["score"];?></p>
                <p class="message"><?php echo strip_tags($row["message"]);?></p>
                    
            </div>
    
            
            <?php
                $i++;
                }
                }
                else{
                    echo "Aucun avis pour l'instant, soyez le premier !";
                }
            ?>

    </div>
    <a class="button" href="reviews/reviews-add.php">Je donne mon avis</a>

</section>
<?php 
    //require('registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM opinion WHERE display = 'oui'");
?>

<section class="opinions-section">
    <div class="opinions-list">
        <?php
            if (mysqli_num_rows($result) > 0) {
                 $i=0;
                while($row = mysqli_fetch_array($result)) {
        ?>
            
             <div class="opinions">
                <p><strong><?php echo $row["name"];?></strong></p>
                <p><?php echo $row["score"];?></p>
                <p><?php echo $row["message"];?></p>
                    
            </div>
    
            
            <?php
                $i++;
                }
                }
                else{
                    echo "Aucun résultat";
                }
            ?>

    </div>
    <a class="button" href="#">Je donne mon avis</a>

</section>
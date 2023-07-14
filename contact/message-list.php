<?php 
    require('../registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM contact");
?>

<section class="reviews-section">
        <h2>Les derniers messages</h2>
            <div class="reviews-list">
                <?php
                    if (mysqli_num_rows($result) > 0) {
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                ?>
                    
                    <div class="reviews">
                        <p><strong class="reviews-name"><?php echo strip_tags($row["name"]);?></strong></p>
                        <p><?php echo $row["sujet"];?></p>
                        <p class="message"><?php echo $row["message"];?></p>
                        <div class="reviews-list-update">
                            <a class="button" href="">Répondre</a>
                            <a class="button" href="../contact/message-delete.php?id=<?php echo $row["id"]; ?>">Supprimer le message</a>
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
            
            </div>
           
        </section>

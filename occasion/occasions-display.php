<?php 
    $result = mysqli_query($conn,"SELECT * FROM occasion_cars");
?>

<section class="occasion-section">
    <?php
        if (mysqli_num_rows($result) > 0) {
            $i=0;
             while($row = mysqli_fetch_array($result)) {
        ?>
   <div class="card" data-price="<?php echo strip_tags($row['price']);?>" data-km="<?php echo strip_tags($row['km']);?>" data-year="<?php echo strip_tags($row['year']);?>">
   
            <img class="occasion-image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image1']); ?>" />

            <div class="card-body">

                <p class="card-data"> <strong>Modèle :</strong> <?php echo strip_tags($row['brand']);?></p>
                <p class="card-data"> <strong>Année :</strong> <?php echo strip_tags($row['year']);?></p>
                <p class="card-data"><?php echo strip_tags($row['energy']);?></p>
                <p class="card-data"><?php echo strip_tags($row['km']);?> km</p>
                <p class="card-data price"><strong><?php echo strip_tags($row['price']);?> €</strong></p>

            </div>
            <a class="button" href="occasion-car-detail.php?id=<?php echo strip_tags($row["id"]); ?>">Détail</a>
    </div>
    <?php
                $i++;
                }
            ?>
                <?php
                    }
                    else{
                        echo "Aucun véhicule en vente en ce moment";
                    }
                ?>
</section>
            
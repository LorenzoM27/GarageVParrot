<?php 
    $result = mysqli_query($conn,"SELECT * FROM occasion_cars");
?>

<section class="occasion-section">
    <?php
        if (mysqli_num_rows($result) > 0) {
            $i=0;
             while($row = mysqli_fetch_array($result)) {
        ?>
   <div class="card">
            <img class="occasion-image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image1']); ?>" />

            <div class="card-body">

                <p class="card-data"> <strong>Marque et modèle :</strong> <?php echo $row['marque'];?></p>
                <p class="card-data"> <strong>Année :</strong> <?php echo $row['année'];?></p>
                <p class="card-data"><?php echo $row['energie'];?></p>
                <p class="card-data"><?php echo $row['kilométrage'];?> km</p>
                <p class="card-data price"><strong><?php echo $row['prix'];?> €</strong></p>

            </div>
            <a class="button" href="occasion-car-detail.php?id=<?php echo $row["id"]; ?>">Détail</a>
    </div>
</section>
            <?php
                $i++;
                }
            ?>
                <?php
                    }
                    else{
                        echo "Aucun véhicules en vente en ce moment";
                    }
                ?>
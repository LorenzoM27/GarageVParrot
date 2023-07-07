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

                <p class="card-data"> <strong>Marque et modèle :</strong> <?php echo $row['brand'];?></p>
                <p class="card-data"> <strong>Année :</strong> <?php echo $row['year'];?></p>
                <p class="card-data"><?php echo $row['energy'];?></p>
                <p class="card-data"><?php echo $row['km'];?> km</p>
                <p class="card-data price"><strong><?php echo $row['price'];?> €</strong></p>

            </div>
            <a class="button" href="occasion-car-detail.php?id=<?php echo $row["id"]; ?>">Détail</a>
    </div>
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
</section>
            
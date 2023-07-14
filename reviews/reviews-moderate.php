<?php 
    require('../registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM reviews");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.png" />
    <link rel="stylesheet" href="../css/common.css" type="text/css">
    <link rel="stylesheet" href="../css/reviews.css" type="text/css">
    <title>Modérer les avis</title>
</head>
<body>
    <?php include('../includes/user-header.php'); ?>
    <main>
        
        <section class="reviews-section">
        <h2>Modérer les avis</h2>
            <div class="reviews-list">
                <?php
                    if (mysqli_num_rows($result) > 0) {
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                ?>
                    
                    <div class="reviews">
                        <p><strong class="reviews-name"><?php echo strip_tags($row["name"]);?></strong></p>
                        <p><?php echo $row["score"];?></p>
                        <p class="message"><?php echo $row["message"];?></p>
                        <div class="reviews-list-update">
                            <a class="button" href="reviews-update-process.php?id=<?php echo $row["id"]; ?>">Modérer cette avis</a>
                            <a class="button" href="reviews-delete-process.php?id=<?php echo $row["id"]; ?>">Supprimer cet avis</a>
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
        <?php include('reviews-user-add.php'); ?>

    </main>
    
</body>
</html>
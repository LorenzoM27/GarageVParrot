<?php
require('../registration/config.php');
$result = mysqli_query($conn,"SELECT * FROM services");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/common.css" type="text/css">
    <link rel="stylesheet" href="../css/services.css" type="text/css">
    <title>Gérer les services</title>
</head>
<body>
    
    <?php include('../includes/admin-header.php'); ?>
    <main>
        <h2>Les services du garage</h2>
       
        <section class="service-section">
        <?php
            if (mysqli_num_rows($result) > 0) {
                $i=0;
                while($row = mysqli_fetch_array($result)) {
        ?>
            <div class="service">
                <div>
                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="300" width="300"/>';?>
                    <h3><?php echo $row["services"];?> </h3>
                    <p class="description"><?php echo $row['description'];?></p>
                    
                </div>
                <a class= "button" href="services-update-process.php?id=<?php echo $row["id"]; ?>">Mettre à jour ce service</a>
            </div>
            <?php
		$i++;
		}
        }
        else
        {
            echo "No result found";
        }
	?>
        </section>

    </main>
    
    
</body>
</html>
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
    <link rel="stylesheet" href="../css/opening.css" type="text/css">
    <title>Gérer les horaires</title>
</head>
<body>
    <?php include('../includes/admin-header.php'); ?>
    <?php
        if (mysqli_num_rows($result) > 0) {
            $i=0;
			while($row = mysqli_fetch_array($result)) {
    ?>
    <main>
        <section>
            <h2>Les services du garage</h2>
            <div>
                <p><?php echo $row["services"];?> </p>
                <p><?php echo $row['description'];?></p>
                <p>Mercredi: <?php echo $row['mercredi'];?></p>
                
            </div>
            <a class= "button" href="opening-update-process.php?id=<?php echo $row["id"]; ?>">Mettre à jour les horaires d'ouverture</a>
            
        </section>

    </main>
    <?php
		$i++;
		}
        }
        else
        {
            echo "No result found";
        }
	?>
    
</body>
</html>
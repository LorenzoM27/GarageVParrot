<?php
    require('../registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM horaires");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.png" />
    <link rel="stylesheet" href="../css/common.css" type="text/css">
    <link rel="stylesheet" href="../css/opening.css" type="text/css">
    <title>Gérer les horaires</title>
</head>
<body>
    <?php include('../includes/admin-header.php'); ?>
    <?php
        if (mysqli_num_rows($result) > 0) {
            
			while($row = mysqli_fetch_array($result)) {
    ?>
    <main>
        <section>
            <h2>Les horaires actuels du garage</h2>
            <div>
                <p>Lundi: <?php echo strip_tags($row["lundi"]);?> </p>
                <p>Mardi: <?php echo strip_tags($row['mardi']);?></p>
                <p>Mercredi: <?php echo strip_tags($row['mercredi']);?></p>
                <p>Jeudi: <?php echo strip_tags($row['jeudi']);?></p>
                <p>Vendredi: <?php echo strip_tags($row['vendredi']);?></p>
                <p>Samedi: <?php echo strip_tags($row['samedi']);?></p>
                <p>Dimanche: <?php echo strip_tags($row['dimanche']);?></p>
            </div>
            <a class= "button" href="opening-update-process.php?id=<?php echo $row["id"]; ?>">Mettre à jour les horaires d'ouverture</a>
            
        </section>

    </main>
    <?php
		
		}
        }
        else
        {
            echo "No result found";
        }
	?>
    
</body>
</html>
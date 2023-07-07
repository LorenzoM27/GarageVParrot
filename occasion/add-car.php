<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.png" />
    <link rel="stylesheet" href="../css/common.css" type="text/css">
    <link rel="stylesheet" href="../css/reviews.css" type="text/css">
    <title>Véhicules d'occasion</title>
</head>
<body>
    <?php include('../includes/user-header.php'); ?>
    <main>
        <?php
                require('../registration/config.php');
                //if (isset($_REQUEST['brand'], $_REQUEST['price'], $_REQUEST['km'], $_REQUEST['year'], $_REQUEST['first_hand'], $_REQUEST['owners'], $_REQUEST['energy'], $_REQUEST['gearbox'], $_REQUEST['color'], $_REQUEST['doors'], $_REQUEST['seats'], $_REQUEST['puissance_fiscale'], $_REQUEST['puissance_chevaux'], $_REQUEST['crit_air'], $_REQUEST['consommation'], $_REQUEST['description'], $_FILES['image1'], $_REQUEST['image2'], $_REQUEST['image3'], $_REQUEST['image4'], $_REQUEST['image5'])){
                  if (isset($_POST['submit'])) {
                
                $brand = stripslashes($_REQUEST['brand']);
                $brand = mysqli_real_escape_string($conn, $brand);

                $price = stripslashes($_REQUEST['price']);
                $price = mysqli_real_escape_string($conn, $price);

                $km = stripslashes($_REQUEST['km']);
                $km = mysqli_real_escape_string($conn, $km);

                $year = stripslashes($_REQUEST['year']);
                $year = mysqli_real_escape_string($conn, $year);

                $first_hand = stripslashes($_REQUEST['first_hand']);
                $first_hand = mysqli_real_escape_string($conn, $first_hand);

                $owners = stripslashes($_REQUEST['owners']);
                $owners = mysqli_real_escape_string($conn, $owners);

                $energy = stripslashes($_REQUEST['energy']);
                $energy = mysqli_real_escape_string($conn, $energy);

                $gearbox = stripslashes($_REQUEST['gearbox']);
                $gearbox = mysqli_real_escape_string($conn, $gearbox);

                $color = stripslashes($_REQUEST['color']);
                $color = mysqli_real_escape_string($conn, $color);

                $doors = stripslashes($_REQUEST['doors']);
                $doors = mysqli_real_escape_string($conn, $doors);
                
                $seats = stripslashes($_REQUEST['seats']); 
                $seats = mysqli_real_escape_string($conn, $seats);
                
                $puissance_fiscale = stripslashes($_REQUEST['puissance_fiscale']);
                $puissance_fiscale = mysqli_real_escape_string($conn, $puissance_fiscale);

                $puissance_chevaux = stripslashes($_REQUEST['puissance_chevaux']);
                $puissance_chevaux = mysqli_real_escape_string($conn, $puissance_chevaux);

                $crit_air = stripslashes($_REQUEST['crit_air']);
                $crit_air = mysqli_real_escape_string($conn, $crit_air);

                $consommation = stripslashes($_REQUEST['consommation']);
                $consommation = mysqli_real_escape_string($conn, $consommation);

                $description = stripslashes($_REQUEST['description']);
                $description = mysqli_real_escape_string($conn, $description);


                $image1 = addslashes(file_get_contents($_FILES['image1']["tmp_name"]));

                $image2 = addslashes(file_get_contents($_FILES['image2']["tmp_name"]));
                $image3 = addslashes(file_get_contents($_FILES['image3']["tmp_name"]));
                $image4 = addslashes(file_get_contents($_FILES['image4']["tmp_name"]));
                $image5 = addslashes(file_get_contents($_FILES['image5']["tmp_name"]));


                
                $query = "INSERT into `occasion_cars` (brand, price, km, year, first_hand, owners, energy, gearbox, color, doors, seats, puissance_fiscale, puissance_chevaux, crit_air, consommation, description, image1, image2, image3, image4, image5)
                        VALUES ('$brand', '$price', '$km', '$year', '$first_hand', '$owners', '$energy', '$gearbox', '$color', '$doors', '$seats', '$puissance_fiscale', '$puissance_chevaux', '$crit_air', '$consommation', '$description', '{$image1}', '{$image2}', '{$image3}', '{$image4}', '{$image5}')";
                $res = mysqli_query($conn, $query);
                 }
            ?>
            <div class="form">
                <form class="form" action="" method="post" enctype="multipart/form-data">
                    <h2>Ajouter une annonce</h2>

                    <label>Marque :</label>
                    <input type="text" name="brand" value="a" required />

                    <label>Prix : </label>
                    <input type="text" name="price" value=1 required/>

                    <label>Kilometrage :</label>
                    <input type="text" name="km" value=1 required />

                    <label>Année :</label>
                    <input type="text" name="year" value=1 required />

                    <label>Première main :</label>
                    <input type="text" name="first_hand" value="a" required />

                    <label>Nombre de propriétaires :</label>
                    <input type="text" name="owners" value=1 required />

                    <label>Energie :</label>
                    <input type="text" name="energy" value="a" required />

                    <label>Boîte de vitesse :</label>
                    <input type="text" name="gearbox" value="a" required />

                    <label>Couleur :</label>
                    <input type="text" name="color" value="a" required />

                    <label>Nombre de portes :</label>
                    <input type="text" name="doors" value=1 required />

                    <label>Nombre de places :</label>
                    <input type="text" name="seats" value=1 required />

                    <label>Puissance fiscale :</label>
                    <input type="text" name="puissance_fiscale" value=1 required />

                    <label>Puissance chevaux :</label>
                    <input type="text" name="puissance_chevaux" value=1 required />

                    <label>Crit'Air :</label>
                    <input type="text" name="crit_air" value=1 required />

                    <label>Consommation :</label>
                    <input type="text" name="consommation" value=1 required />

                    <label>Description : </label>
                    <textarea name="description" placeholder="Description, options du véhicule..." required></textarea>

                    <label>Image 1 : </label>
                    <input type="file" name="image1" accept="image/*" required>

                    <label>Image 2 : </label>
                    <input type="file" name="image2" accept="image/*" required>

                    <label>Image 3 : </label>
                    <input type="file" name="image3" accept="image/*" required>

                    <label>Image 4 : </label>
                    <input type="file" name="image4" accept="image/*" required>

                    <label>Image 5 : </label>
                    <input type="file" name="image5" accept="image/*" required>


                    <input type="submit" class="button" name="submit" value="Mettre en ligne" required/>
                </form>
            </div>
    </main>
</body>
</html>
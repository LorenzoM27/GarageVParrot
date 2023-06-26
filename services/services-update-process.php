<?php
require('../registration/config.php');
if(count($_POST)>0) {

$id = $_POST['id'];
$services = $_POST['services'];
$description = $_POST['description'];
$image = $_POST['image'];


$query = "UPDATE `horaires` SET `id`='".$id."',`services`='".$services."',`description`='".$description."',`image`='".$image."' WHERE `id` = '".$id."'";

$result = mysqli_query($conn, $query);

$message = "Service modifié avec succés";

}

$result = mysqli_query($conn,"SELECT * FROM services WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/common.css" type="text/css">
    <link rel="stylesheet" href="../css/opening-process.css" type="text/css">
    <title>Modification des services</title>
</head>
<body>
    <?php include('../includes/admin-header.php'); ?>
    <main>
        <h2>Modifier les horaires</h2>
        <form name="frmUser" method="post" action="">
            <p><?php if(isset($message)) { echo $message; } ?></p>

            <div class="service">
                <label>Titre du service : </label>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="text" name="services"  value="<?php echo $row['services']; ?>">
            </div>
            <div class="service">
                <label>Description : </label>
                <input type="text" name="description"  value="<?php echo $row['description']; ?>">
            </div>
            <div class="day">
                <label>Image : </label>
                <input type="text" name="image"  value="<?php echo $row['image']; ?>">
            </div>
            
            <input type="submit" name="submit" value="Modifier les horaires" class="button">
            
           
        </form>
    </main>
</body>
</html>
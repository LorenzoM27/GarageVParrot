<?php
require('../registration/config.php');
if(count($_POST)>0) {
//mysqli_query($conn,"UPDATE horaires set id='" . $_POST['id'] . "', lundi'" . $_POST['lundi'] . "', mardi='" . $_POST['mardi'] . "', mercredi='" . $_POST['mercredi'] . "' ,jeudi='" . $_POST['jeudi'] ."', vendredi'" . $_POST['vendredi'] . "', samedi'" . $_POST['samedi'] ."', dimanche'" . $_POST['dimanche'] . "' WHERE id='" . $_POST['id'] . "'");
$id = $_POST['id'];
$lundi = $_POST['lundi'];
$mardi = $_POST['mardi'];
$mercredi = $_POST['mercredi'];
$jeudi = $_POST['jeudi'];
$vendredi = $_POST['vendredi'];
$samedi = $_POST['samedi'];
$dimanche = $_POST['dimanche'];

$query = "UPDATE `horaires` SET `id`='".$id."',`lundi`='".$lundi."',`mardi`='".$mardi."',`mercredi`='".$mercredi."',`jeudi`='".$jeudi."',`vendredi`='".$vendredi."',`samedi`='".$samedi."',`dimanche`='".$dimanche."' WHERE `id` = '".$id."'";

$result = mysqli_query($conn, $query);

$message = "Horaires modifié avec succés";

}

$result = mysqli_query($conn,"SELECT * FROM horaires WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.png" />
    <link rel="stylesheet" href="../css/common.css" type="text/css">
    <link rel="stylesheet" href="../css/opening-process.css" type="text/css">
    <title>Modification des horaires d'ouverture</title>
</head>
<body>
    <?php include('../includes/admin-header.php'); ?>
    <main>
        <h2>Modifier les horaires</h2>
        <form name="frmUser" method="post" action="">
            <p><?php if(isset($message)) { echo $message; } ?></p>

            <div class="day">
                <label>Lundi : </label>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="text" name="lundi"  value="<?php echo $row['lundi']; ?>">
            </div>
            <div class="day">
                <label>Mardi : </label>
                <input type="text" name="mardi"  value="<?php echo $row['mardi']; ?>">
            </div>
            <div class="day">
                <label>Mercredi : </label>
                <input type="text" name="mercredi"  value="<?php echo $row['mercredi']; ?>">
            </div>
            <div class="day">
                <label>Jeudi : </label>
                <input type="text" name="jeudi"  value="<?php echo $row['jeudi']; ?>">
            </div>
            <div class="day">
                <label>vendredi : </label>
                <input type="text" name="vendredi"  value="<?php echo $row['vendredi']; ?>">
            </div>
            <div class="day">
                <label>Samedi : </label>
                <input type="text" name="samedi"  value="<?php echo $row['samedi']; ?>">
            </div>
            <div class="day">
                <label>Dimanche : </label>
                <input type="text" name="dimanche" value="<?php echo $row['dimanche']; ?>">
            </div>
            <input type="submit" name="submit" value="Modifier les horaires" class="button">
            
           
        </form>
    </main>
</body>
</html>
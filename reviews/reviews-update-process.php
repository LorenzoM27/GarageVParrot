<?php
    require('../registration/config.php');
    if(count($_POST)>0) {

    $id = $_POST['id'];
    $display = $_POST['display'];

    $query = "UPDATE `reviews` SET `id`='".$id."',`display`='".$display."' WHERE id='" . $_GET['id'] . "'";

    $result = mysqli_query($conn, $query);

    $message = "Avis modéré avec succés";

    }

    $result = mysqli_query($conn,"SELECT * FROM reviews WHERE id='" . $_GET['id'] . "'");
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
    <link rel="stylesheet" href="../css/reviews.css" type="text/css">
    <title>Modération des avis</title>
</head>
<body>
    <?php include('../includes/user-header.php'); ?>
    <main class="reviews-update">
        <h2>Modérer un avis</h2>
        <div class="reviews">
            <p><strong class="reviews-name"><?php echo $row["name"];?></strong></p>
            <p><?php echo $row["score"];?></p>
            <p class="message"><?php echo $row["message"];?></p>
        </div>
        <form method="post" action="">
            <p><?php if(isset($message)) { echo $message; } ?></p>

            <div class="reviews-display">
                <label>Afficher cet avis ? </label>
                <input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
                <input type="text" name="display"  placeholder="<?php echo $row['display']; ?>">
            </div>
            <input type="submit" name="submit" value="Modérer cet avis" class="button">
        </form>
    </main>
</body>
</html>
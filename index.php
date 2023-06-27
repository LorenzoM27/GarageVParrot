<?php 
    require('registration/config.php');
    //$result = mysqli_query($conn,"SELECT * FROM services WHERE id = '1'");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <title>Garage V.Parrot</title>
</head>
<body>
    <?php include('includes/header.php'); ?>
    
    <main class="activities">
        <h2 class="services">Les services que nous proposons</h2>
        <?php include('services/service1.php'); ?>
        <?php include('services/service2.php'); ?>
        <?php include('services/service3.php'); ?>
    </main>
    
    <?php include('includes/footer.php'); ?>
</body>
</html>




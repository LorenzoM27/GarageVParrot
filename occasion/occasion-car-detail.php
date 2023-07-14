
<?php
    require('../registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM occasion_cars WHERE id='" . $_GET['id'] . "'");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/contact.js"></script>
    <script src="../js/slider.js"></script>
    <link rel="icon" href="../img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/common.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/slider.css"/>
    <link rel="stylesheet" href="../css/occasion-detail.css" type="text/css">
    <link rel="stylesheet" href="../css/reviews.css" type="text/css">
    <title>Nos véhicules d'occasions</title>
</head>
<body>
    <header>
            <section class="headerSection">
                <div class="container headerLogo">
                    <a href="../index.php"><img class="logo" src="../img/garage-vparrot-t.png" alt="Logo Garage V.Parrot"><h1> GARAGE V.PARROT</h1>
                </div>
                <nav class="headerNav">
                    <ul class="container">
                        <li><a class="t" href="#"> </a></li>
                        <li><a class="header-button" href="../contact.php">Contact</a></li>
                        <li><a class="header-button" href="../login.php">Connexion</a></li>
                        <li><a class="header-button" href="#">A propos</a></li>
                    </ul>
                </nav>
            </section>
        </header>
            <main>
                <?php
                    if (mysqli_num_rows($result) > 0) {
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                ?>
                <h2><?php echo $row['brand'];?></h2>
                <section class="slider-section">
                    <div class="slider">
                        <div class="slider-nav">
                            <button onclick="previous()" class="slider-nav-button previous" type="button">
                            <img src="../img/svg/chevron-left-solid.svg" alt="flèche retour"/> 
                            </button>
                            <button onclick="next()" class="slider-nav-button next" type="button">
                            <img src="../img/svg/chevron-right-solid.svg" alt="flèche suivant"/> 
                            </button>
                        </div>
                        <div class="slider-content">
                            <div class="slider-content-item">
                            <img class="car-image" id="slide" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image1']); ?>" alt="image voiture"/> 
                            </div>
                            <div class="slider-content-item">
                            <img class="car-image" id="slide" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image2']); ?>" alt="image voiture"/> 
                            </div>
                            <div class="slider-content-item">
                            <img class="car-image" id="slide" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image3']); ?>" alt="image voiture"/> 
                            </div>
                            <div class="slider-content-item">
                            <img class="car-image" id="slide" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image4']); ?>" alt="image voiture"/> 
                            </div>
                            <div class="slider-content-item">
                            <img class="car-image" id="slide" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image5']); ?>" alt="image voiture"/> 
                            </div>

                        </div>
                    </div>
                    <table>
                        <caption><h3>Fiche technique du véhicule</h3></caption>
                        <tr>
                            <th>Prix</th>
                            <td><?php echo strip_tags($row['price']);?> €</td>
                        </tr>
                        <tr>
                            <th>kilométrage</th>
                            <td><?php echo strip_tags($row['km']);?> km</td>
                        </tr>
                        <tr>
                            <th>Année</th>
                            <td><?php echo strip_tags($row['year']);?></td>
                        </tr>
                        <tr>
                            <th>Première main</th>
                            <td><?php echo strip_tags($row['first_hand']);?></td>
                        </tr>
                        <tr>
                            <th>Propriétaires</th>
                            <td><?php echo strip_tags($row['owners']);?></td>
                        </tr>
                        <tr>
                            <th>Energie</th>
                            <td><?php echo strip_tags($row['energy']);?></td>
                        </tr>
                        <tr>
                            <th>Boîte de vitesse</th>
                            <td><?php echo strip_tags($row['gearbox']);?></td>
                        </tr>
                        <tr>
                            <th>Couleur</th>
                            <td><?php echo strip_tags($row['color']);?></td>
                        </tr>
                        <tr>
                            <th>Portes</th>
                            <td><?php echo strip_tags($row['doors']);?></td>
                        </tr>
                        <tr>
                            <th>Places</th>
                            <td><?php echo strip_tags($row['seats']);?></td>
                        </tr>
                        <tr>
                            <th>Puissance fiscale</th>
                            <td><?php echo strip_tags($row['puissance_fiscale']);?> CV</td>
                        </tr>
                        <tr>
                            <th>Puissance</th>
                            <td><?php echo strip_tags($row['puissance_chevaux']);?> CV</td>
                        </tr>
                        <tr>
                            <th>Crit'Air</th>
                            <td><?php echo strip_tags($row['crit_air']);?></td>
                        </tr>
                        <tr>
                            <th>Consommation</th>
                            <td><?php echo strip_tags($row['consommation']);?></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><?php echo strip_tags($row['description']);?></td>
                        </tr>

                    </table>
                </section>
                <section class="contact-section">
                    <?php
                            if (isset($_REQUEST['name'], $_REQUEST['email'], $_REQUEST['sujet'], $_REQUEST['message'])){


                            $name = strip_tags($_REQUEST['name']);
                            $name = mysqli_real_escape_string($conn, $name);
                            
                            $email = strip_tags($_REQUEST['email']); 
                            $email = mysqli_real_escape_string($conn, $email);
                            
                            $sujet = strip_tags($_REQUEST['sujet']);
                            $sujet = mysqli_real_escape_string($conn, $sujet);

                            $message = strip_tags($_REQUEST['message']);
                            $message = mysqli_real_escape_string($conn, $message);
                            
                            $query = "INSERT into `contact` ( name, email, sujet, message)
                                    VALUES ('$name', '$email', '$sujet', '$message')";
                            $res = mysqli_query($conn, $query);
                            }
                    ?>
                   <div class="form">
                        <form class="form" action="" onsubmit="return validate()" method="post">
                            <h2>Nous contacter</h2>
                            <label>Nom :</label>
                            <input type="text" id="name" name="name" placeholder="Nom" required />
                            <label>Email : </label><span id="info" class="info"></span>
                            <input type="text" id="email" name="email" placeholder="Email" required/>
                            <input type="hidden" id="subject" name="sujet" value="<?php echo strip_tags($row['brand']);?>, <?php echo strip_tags($row['price']);?> €, <?php echo strip_tags($row['km']);?> km, <?php echo strip_tags($row['energy']);?>" required />
                            <label>Mon message: </label>
                            <textarea name="message" id="message" placeholder="Besoin d'information ? Contactez-nous !" required></textarea>
                            <input type="submit" class="button" name="submit" value="Envoyer mon message" required/>
                        </form>
                    </div>
                </section>
                <?php
                    $i++;
                        }
                    }
                    else{
                        echo "Aucun résultat";
                    }
                ?>
                
            </main>
            <?php include('../includes/footer.php'); ?>
</body>
</html>
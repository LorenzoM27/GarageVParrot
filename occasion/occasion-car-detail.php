<?php 
    require('../registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM occasion_cars");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/slider.js"></script>
    <link rel="icon" href="../img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/common.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/slider.css"/>
    <link rel="stylesheet" href="../css/occasion-detail.css" type="text/css">
    <link rel="stylesheet" href="../css/contact.css" type="text/css">
    
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
            <main>
                <?php
                    if (mysqli_num_rows($result) > 0) {
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                ?>
                <h2><?php echo $row['marque'];?></h2>
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
                        <caption><h3>Détail techniques du véhicule</h3></caption>
                        <tr>
                            <th>Prix</th>
                            <td><?php echo $row['prix'];?> €</td>
                        </tr>
                        <tr>
                            <th>kilométrage</th>
                            <td><?php echo $row['kilométrage'];?> km</td>
                        </tr>
                        <tr>
                            <th>Année</th>
                            <td><?php echo $row['année'];?></td>
                        </tr>
                        <tr>
                            <th>Première main</th>
                            <td><?php echo $row['premiere_main'];?></td>
                        </tr>
                        <tr>
                            <th>Propriétaires</th>
                            <td><?php echo $row['nbr_proprietaires'];?></td>
                        </tr>
                        <tr>
                            <th>Energie</th>
                            <td><?php echo $row['energie'];?></td>
                        </tr>
                        <tr>
                            <th>Boîte de vitesse</th>
                            <td><?php echo $row['boite_vitesse'];?></td>
                        </tr>
                        <tr>
                            <th>Couleur</th>
                            <td><?php echo $row['couleur'];?></td>
                        </tr>
                        <tr>
                            <th>Portes</th>
                            <td><?php echo $row['nbre_portes'];?></td>
                        </tr>
                        <tr>
                            <th>Places</th>
                            <td><?php echo $row['nbre_places'];?></td>
                        </tr>
                        <tr>
                            <th>Puissance fiscale</th>
                            <td><?php echo $row['puissance_fiscale'];?> CV</td>
                        </tr>
                        <tr>
                            <th>Puissance</th>
                            <td><?php echo $row['puissance_chevaux'];?> CV</td>
                        </tr>
                        <tr>
                            <th>Crit'Air</th>
                            <td><?php echo $row['crit_air'];?></td>
                        </tr>
                        <tr>
                            <th>Consommation</th>
                            <td><?php echo $row['consommation'];?></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><?php echo $row['description'];?></td>
                        </tr>

                    </table>
                </section>
                <section class="contact-section">
                    <div id="box">
                        <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
                            <h2>Nous contacter pour ce véhicule</h2>
                            <label>Nom: <span>*</span></label>
                            <input type="text" id="name" name="name" placeholder="Nom"/>
                            <label>Email: <span>*</span></label><span id="info" class="info"></span>
                            <input type="text" id="email" name="email" placeholder="Email"/>
                            <label>Sujet: <span>*</span></label>
                            <input type="text" id="subject" name="subject" value="<?php echo $row['marque'];?>, <?php echo $row['année'];?>, <?php echo $row['prix'];?> €, <?php echo $row['kilométrage'];?> km"/>
                            <label>Message:</label>
                            <textarea id="message" name="message" placeholder="Besoin d'information ? Ecrivez-nous ici !"></textarea>
                            <input class="button" type="submit" name="send" value="Envoyer le message"/>
                            <div id="statusMessage">
                                <?php if (! empty($db_msg)) { ?>
                                <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
                                <?php } ?>
                                <?php if (! empty($mail_msg)) { ?>
                                <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
                                <?php } ?>
                            </div>
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
        </header>
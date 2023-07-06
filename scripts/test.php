<?php 
    require('../registration/config.php');
    $result = mysqli_query($conn,"SELECT * FROM occasion_cars");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../js/slider.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/slider.css"/>
	<title>Document</title>
</head>
<body>
<?php
                        if (mysqli_num_rows($result) > 0) {
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                    ?>

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



<?php
                        $i++;
                        }
                    }
                    else{
                        echo "Aucun résultat";
                    }
                    ?>

</body>
</html>

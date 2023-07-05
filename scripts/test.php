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
	<link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
  	<link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
	<title>Document</title>
</head>
<body>
<?php
                        if (mysqli_num_rows($result) > 0) {
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                    ?>


<div class=".single-item">
	<img class="car-image" id="slide" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image1']); ?>" alt="image voiture"/> 
	<img class="car-image" id="slide" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image2']); ?>" alt="image voiture"/> 
	<img class="car-image" id="slide" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image3']); ?>" alt="image voiture"/> 
</div>
	

<?php
                        $i++;
                        }
                    }
                    else{
                        echo "Aucun résultat";
                    }
                    ?>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="../slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
		$('.single-item').slick();
    });
  </script>
</body>
</html>
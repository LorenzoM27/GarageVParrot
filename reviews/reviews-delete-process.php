<?php
    require('../registration/config.php');
    $sql = "DELETE FROM reviews WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($conn, $sql)) {
        echo "Avis supprimé";
    } else {
        echo "Une erreur c'est produite" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
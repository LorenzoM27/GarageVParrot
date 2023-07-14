<?php
    require('../registration/config.php');
    $sql = "DELETE FROM contact WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($conn, $sql)) {
        echo "Message supprimé !";
    } else {
        echo "Une erreur c'est produite" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
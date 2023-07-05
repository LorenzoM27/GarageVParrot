
const slide = ["data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image1']); ?>", "data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image2']); ?>", "data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image3']); ?>", "data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image4']); ?>", "data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image4']); ?>", "data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image5']); ?>"];
let image = 0;

function ChangeSlide(sens) {
    image = image + sens;
    if (image < 0)
        image = slide.length - 1;
    if (image > slide.length - 1)
        image = 0;
    document.getElementById("slide").src = slide[image];
}


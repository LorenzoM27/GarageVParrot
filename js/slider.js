function previous() {
    // récupérer largeur slider au moment du click
    const widthSlider = document.querySelector('.slider').offsetWidth;

    const sliderContent = document.querySelector('.slider-content');
    sliderContent.scrollLeft -= widthSlider;
    const scrollLeft = sliderContent.scrollLeft;
    const itemsSlider = sliderContent.querySelectorAll('.slider-content-item');

    if(scrollLeft == 0) {
        sliderContent.scrollLeft = widthSlider * (itemsSlider.length - 1);
    }
}

function next() {
    const widthSlider = document.querySelector('.slider').offsetWidth;

    const sliderContent = document.querySelector('.slider-content');
    sliderContent.scrollLeft += widthSlider;
    const scrollLeft = sliderContent.scrollLeft;
    const itemsSlider = sliderContent.querySelectorAll('.slider-content-item');

    if(scrollLeft == widthSlider * (itemsSlider.length - 1)) {
        sliderContent.scrollLeft = 0;
    }
}
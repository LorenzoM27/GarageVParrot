$("#slider-range").slider({
    range: true,
    min: 0,
    max: 100000,
    step: 500,
    values: [0, 100000],
    slide: function(e, ui) {
        var min = Math.floor(ui.values[0]);
        $('.slider-price').html(min + ' €');

        var max = Math.floor(ui.values[1]);
        
        $('.slider-price2').html(max + ' €.');

        $('.card').each(function() {
            var startPrice = (min);
            var endPrice = (max);
            //console.log('.box[data-start-time="' + startTime + '"]');

            var value = $(this).data('price');
            //console.log('Selecting all events between ' + startTime + ' and ' + endTime);
            // skeleton key
            //console.log(value + '<=' + endTime);
            if ((parseInt(endPrice) >= parseInt(value) && (parseInt(startPrice) <= parseInt(value))) ){
                $(this).show();
            } else {
                $(this).hide();
            }
            //
        });

    }
});

$("#slider-range-km").slider({
    range: true,
    min: 0,
    max: 300000,
    step: 1000,
    values: [0, 300000],
    slide: function(e, ui) {
        var min = Math.floor(ui.values[0]);
        $('.slider-km').html(min + ' km');

        var max = Math.floor(ui.values[1]);
        
        $('.slider-km2').html(max + ' km');

        $('.card').each(function() {
            var startKm = (min);
            var endKm = (max);
            //console.log('.box[data-start-time="' + startTime + '"]');

            var value = $(this).data('km');
            //console.log('Selecting all events between ' + startTime + ' and ' + endTime);
            // skeleton key
            //console.log(value + '<=' + endTime);
            if ((parseInt(endKm) >= parseInt(value) && (parseInt(startKm) <= parseInt(value))) ){
                $(this).show();
            } else {
                $(this).hide();
            }
            //
        });

    }
});

$("#slider-range-year").slider({
    range: true,
    min: 2000,
    max: 2023,
    step: 1,
    values: [2000, 2023],
    slide: function(e, ui) {
        var min = Math.floor(ui.values[0]);
        $('.slider-year').html(min + '');

        var max = Math.floor(ui.values[1]);
        
        $('.slider-year2').html(max + '');

        $('.card').each(function() {
            var startYear = (min);
            var endYear = (max);
            //console.log('.box[data-start-time="' + startTime + '"]');

            var value = $(this).data('year');
            //console.log('Selecting all events between ' + startTime + ' and ' + endTime);
            // skeleton key
            //console.log(value + '<=' + endTime);
            if ((parseInt(endYear) >= parseInt(value) && (parseInt(startYear) <= parseInt(value))) ){
                $(this).show();
            } else {
                $(this).hide();
            }
            //
        });

    }
});


$(document).ready(function (){
    var spindle = document.getElementById("spindle-range-slider");
    noUiSlider.create(spindle, {
        start: 500,
        range: {
            'min': 0,
            'max': 1000
        },
        tooltips: true,
        format: wNumb({
            decimals: 0
        }),
    })

    spindle.noUiSlider.on('update', function( value, handle ) {
        $(".hidden-spindle-speed").val(value[handle])
    });



    $("#individual-search").on('submit', function (event) {
        // event.stopPropagation();
        // event.preventDefault();
        // console.log($('form').serializeArray())
        // console.log('here')
    });
})

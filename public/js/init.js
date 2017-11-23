jQuery(document).ready(function($) {
    $('#my-slider').sliderPro({
        width: '100%',
        height: 800,
        autoplay: false,
        imageScaleMode: 'none',
        thumbnailsPosition: 'top',
        thumbnailWidth: 500,
        thumbnailHeight: 310,
        thumbnailTouchSwipe: false,
        buttons: true,
        thumbnailArrows: true,
    });

    $('.accordion').accordion({
        transitionSpeed: 400,
    });

    $.fatNav();

    $(document).on('keydown', function(e) {
        if (e.keyCode === 27) { // ESC Key
            $(".fat-nav").toggleClass('active'); //Change appearance of clickable icon
        }
    });
});
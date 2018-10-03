$(function() {

    /*$(window).scroll(function(){
        // the "12" should equal the margin-top value for nav.stickydiv
        var window_top = $(window).scrollTop() + 12;
        var div_top = $('#checkdiv').offset().top;
        if (window_top >= div_top) {
            $('nav').addClass('stickydiv');
        } else {
            $('nav').removeClass('stickydiv');
        }
    });*/

    $('.main_nav a[href^="#"], .footer_nav a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        let id = $(this).attr('href'),
            targetOffset = $(id).offset().top;

        $('html, body').animate({
            scrollTop: targetOffset - 50
        }, 500);
    });

    jQuery("#gallery0").unitegallery({
        gallery_theme: "tiles",
        tiles_type: "justified",
        tiles_space_between_cols: 1,			//space between images
        tiles_space_between_cols_mobile: 3,     //space between cols for mobile type
        tiles_nested_optimal_tile_width: 250,
    });
    jQuery("#gallery1").unitegallery({
        gallery_theme: "tiles",
        tiles_type: "justified",
    });
});
if (screen.width > 768) {
    new WOW().init();
}

function navbar() {
    if ($(document).scrollTop() > 100 || $(window).width() < 992) {
        $('nav').css({
            'background': '#f09246'
        });
    }
    if ($(document).scrollTop() < 100 && $(window).width() > 992 && needBg == true) {
        $('nav').css({
            'background': 'transparent'
        });
    }
}

setInterval(navbar, 50);

$(document).ready(function () {

    var clicks = 0;

    $('.navbar-toggler').click(function () {
        if (clicks == 0 && needBg == true && $(window).width() > 992) {
            $('nav').css({
                'background': '#f09246'
            });
            clicks = 1;
        } else {
            $('nav').css({
                'background': 'transparent'
            });
            clicks = 0;
        }
    });




    if (!needBg) {
        $('nav').css({
            'background': '#f09246'
        });
        $('.navbar-toggler').click(function () {
            $('nav').css({
                'background': '#f09246'
            });
        })
    }

    $('.photo').click(function(){
        var clickedPhotoSrc = $(this).attr('src');
        $('.activePhoto').attr('src', clickedPhotoSrc);
    });

});
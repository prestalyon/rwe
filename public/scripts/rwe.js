$(document).ready(function() {

    /*:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/

    $.stellar();

    $.stellar({
        horizontalScrolling: false,
        verticalOffset: 40
    });
    /*:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/

    $("#brian").hover(function() {
        $(this).find('#brian-info').slideUp(900);
    }, function() {
        $(this).find('#brian-info').slideDown(900);
    });

    $("#brian-info").hide();

    /*:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/



    /*:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/

    var previousScroll = 0, headerOrgOffset = $('.nav-wrap').height();

    $('.nav-bar').height($('.nav-wrap').height());

    $(window).scroll(function() {
        var currentScroll = $(this).scrollTop();
        if (currentScroll > headerOrgOffset) {
            if (currentScroll > previousScroll) {
                $('.nav-bar').slideUp();
            } else {
                $('.nav-bar').slideDown();
            }
        } else {
            $('.nav-bar').slideDown();
        }
        previousScroll = currentScroll;
    });

    $('.nav-wrap').hover(function() {
        $('.nav-bar').css({
            opacity: 0.9
        });
    }, function() {
        $('.nav-bar').css({
            opacity: 0.5
        });
    });

    /*:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/

    /*:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/

});
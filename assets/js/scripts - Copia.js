$(document).ready(function () {

    var lastScrollTop = '300';
    $(window).on('scroll', function (event) {
        var st = $(this).scrollTop();
        if (st > lastScrollTop && st > 90) {
            $('header').addClass('hide');
        } else {
            $('header').removeClass('hide');
        }
        lastScrollTop = st;
    });

    $('a[href*="#"]:not([href="#"])').on('click', function () {
        //var alturaheader = $('header').outerHeight();
        //var alturaheader = 0;
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            //target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 900, "swing");
            //return false;
        }
    });

    $('.btn-gotop').on('click', function(){
        $('body, html').animate({
            scrollTop: 0
        }, 1000);
    });

});
//$('#loader').addClass('hide');

$(window).on("load", function() {

    $('#loader').addClass('hide');

    $('html, body').animate({
        scrollTop: 0
    }, 10, "swing");

    if (location.pathname.replace(/^\//,'') == location.pathname.replace(/^\//,'') && location.hostname == location.hostname) {
        var target = $(location.hash);
        //target = target.length ? target : $('[name=' + location.hash.slice(1) +']');
        //scrollTop: 0
        if(target && target.length > 0){
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 900, "swing");
        }
        //return false;
    } else {
        $('html, body').animate({
            scrollTop: 0
        }, 10, "swing");
    }
    
});
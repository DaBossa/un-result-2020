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
//$('#loader').hide();

$(window).on("load", function() {

    $('#loader').addClass('hide');

    /*$('html, body').animate({
        scrollTop: 0
    }, 10, "swing");*/

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




    setTimeout(function(){
        ScrollReveal().reveal('.reveal', {
            interval: 150,
            delay: 500,
            viewFactor: 0.3,
            //mobile: false
        });

        ScrollReveal().reveal('.r-scale-in', {
            duration: 750,
            scale: 0.75,
            mobile: false
        });
        ScrollReveal().reveal('.r-scale-out', {
            duration: 750,
            scale: 1.25,
            mobile: false
        });
        ScrollReveal().reveal('.r-top', {
            easing: 'ease-in-out',
            duration: 750,
            origin: 'top',
            distance: '50px',
            mobile: false
        });
        ScrollReveal().reveal('.r-bottom', {
            easing: 'ease-in-out',
            duration: 750,
            origin: 'bottom',
            distance: '50px',
            mobile: false
        });
        ScrollReveal().reveal('.r-right', {
            easing: 'ease-in-out',
            duration: 750,
            origin: 'right',
            distance: '50px',
            mobile: false
        });
        ScrollReveal().reveal('.r-left', {
            easing: 'ease-in-out',
            duration: 750,
            origin: 'left',
            distance: '50px',
            mobile: false
        });
        ScrollReveal().reveal('.r-d150', {
            delay: 150
        });
        ScrollReveal().reveal('.r-d300', {
            delay: 300
        });
        ScrollReveal().reveal('.r-d450', {
            delay: 450
        });
        ScrollReveal().reveal('.r-d600', {
            delay: 600
        });

    }, 500);

    

    function myafterReveal (el) {
		var grupo = $(el).find('svg').children('g');
        /*$(grupo.children().get().reverse()).each((index, elem) => {*/
        $(grupo.children()).each((index, elem) => {
        setTimeout(function() {
            elem.classList.add('anima');
        }, 150 * index);
        });
    }
    function myafterReset (el) {
		var grupo = $(el).find('svg').children('g');
        /*$(grupo.children().get().reverse()).each((index, elem) => {*/
        $(grupo.children()).each((index, elem) => {
            elem.classList.remove('anima');
        });
    }

    ScrollReveal().reveal('.reveal-grafico', {
        viewFactor: 0.5,
        reset: true,
        afterReveal: myafterReveal,
        afterReset: myafterReset
    });
    
});
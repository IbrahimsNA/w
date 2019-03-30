new WOW().init();
$(document).ready(function () {
     // Adjust Slider Height
 
    $('.owl-carousel').owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 300,
        singleItem:true,
        loop: false,
        margin: 10,
        dots: true,

        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                dots: false
            },
            600: {
                items: 1,
                nav: true,
                dots: true
            },
            1000: {
                items: 1,
                nav: true,
                loop: false,
                dots: true
            }
        }
    });

    /* end edit owl */



    /* customiz eye*/
    $('.fa-eye').click(function () {
        $(this).toggleClass("active");
        if ($(this).hasClass("active")) {
            $(this).removeClass('far fa-eye').addClass('fas fa-eye-slash');
            $(".psw").attr("type", "text");
        } else {
            $(".psw").attr("type", "password");
            $(this).removeClass('fas fa-eye-slash').addClass('far fa-eye');
        }

    })

    /* end eye */

    /* end jquery */
    $('.is-active').removeClass();
});

/*Forget Password */
function forget() {
    alertify.prompt('Forget Password ', 'Please Type Your Email', ''
               , function (evt, value) { alertify.prompt().close(); }
               , function () { alertify.prompt().close(); });

}
/*end Forget Password*/
/*Activate Account */
function activate() {
    alertify.prompt('Activate Account ', 'Please Type Your Email', ''
               , function (evt, value) { alertify.prompt().close(); }
               , function () { alertify.prompt().close(); });

}
/*end Activate Account*/

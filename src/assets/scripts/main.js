// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                AOS.init({
                    duration: 1500,
                });
                $(() => {
                    $("#banner_gallery_slider").slick({
                        slidesToShow: 1,
                        arrows: false,
                        dots: true,
                        autoplay: true,
                    });

                    $('#section_3_work_slider').slick({
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: '120px',
                        dots: true,
                        autoplay: true,
                    });
                });
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});

jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 1000) {
        jQuery('#back-top').fadeIn();
        jQuery("#back-top").addClass('active');
    } else {
        jQuery('#back-top').fadeOut();
        jQuery("#back-top").removeClass('active');
    }
});
jQuery('#back-top').click(function () {
    jQuery('body,html').animate({
        scrollTop: 0
    }, 1000);
    return false;
});

var currentTab = 0;
showTab(currentTab);

function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";

    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }

    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;

    if (currentTab >= x.length) {
        jQuery('.no-show').toggle();
        document.getElementById("regForm").submit();
        return false;
    }

    showTab(currentTab);
}

function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input") ? x[currentTab].getElementsByTagName("input") : x[currentTab].getElementsByTagName("select");

    if (jQuery(y).hasClass('not-required')) {
        return true;
    }

    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            y[i].className += " invalid";
            valid = false;
        }
    }

    return valid;
}

let flag = true;

jQuery('#homepage_section_5_services_show_more').on('click', function () {
    flag = !flag;
    jQuery('#homepage_section_5_services_see_more').slideToggle();
    jQuery('#homepage_section_5_services_show_more').html(flag ? 'See More' : 'See Less');
})
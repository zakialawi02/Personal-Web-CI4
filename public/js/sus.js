// /////////// Stiky Header  dan spanLogoBerubahWarna
$(document).ready(function () {

    $('#menu').click(function () {
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $(window).on('load scroll', function () {

        $('#menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');

        if ($(window).scrollTop() > 20) {
            $('header').addClass('sticky');
        } else {
            $('header').removeClass('sticky');
        }

        if ($(window).scrollTop() > 100) {
            $('header .logo .C1').addClass('spanLogoBerubahWarna');
            $('header .logo .C2').addClass('spanLogoBerubahWarna');
        } else {
            $('header .logo .C1').removeClass('spanLogoBerubahWarna');
            $('header .logo .C2').removeClass('spanLogoBerubahWarna');

        }

        if ($(window).scrollTop() > 0) {
            $('.scroll-top').show();
        } else {
            $('.scroll-top').hide();
        }

        // scroll spy 

        $('section').each(function () {

            let top = $(window).scrollTop();
            let offset = $(this).offset().top - 200;
            let id = $(this).attr('id');
            let height = $(this).height();

            if (top > offset && top < offset + height) {
                $('.navbar a').removeClass('active');
                $('.navbar').find(`[href="#${id}"]`).addClass('active');
            }

        });

    });

    //-------------------------- smooth scrolling 

    $('a[href*="#"]').on('click', function (e) {

        $('html, body').animate({

                scrollTop: $($(this).attr('href')).offset().top,

            },
            500,
            'linear'
        );

    });

});

// ================= Preloader
var loader = document.getElementById("preloader");
window.addEventListener("load", function () {
    loader.style.display = "none";
});
$(window).on('load', function () {

    /*======== Preloader Setup ========*/
    $(".loading-text").delay(1000).fadeOut("slow");
    $(".preloader").delay(2000).fadeOut("slow");

});

// // ================= Dark Mode
// const chk = document.getElementById('chk');

// chk.addEventListener('change', () => {
//   document.body.classList.toggle('darkMode');
// });

let darkMode = localStorage.getItem("darkMode");

function enableDarkMode() {
    document.body.classList.add("darkMode");
    $('.darkModeToggle .D1').addClass('darkModeSimbol');
    $('.darkModeToggle .D2').addClass('darkModeSimbol');
    localStorage.setItem("darkMode", "enabled");
}

function disableDarkMode() {
    document.body.classList.remove("darkMode");
    $('.darkModeToggle .D1').removeClass('darkModeSimbol');
    $('.darkModeToggle .D2').removeClass('darkModeSimbol');
    localStorage.setItem("darkMode", null);
}

if (darkMode === "enabled") {
    enableDarkMode();
}
// Listeners
const darkModeToggle1 = document.querySelector("#darkModeToggle");
darkModeToggle1.addEventListener("click", () => {
    darkMode = localStorage.getItem("darkMode");
    darkMode !== "enabled" ? enableDarkMode() : disableDarkMode();
});
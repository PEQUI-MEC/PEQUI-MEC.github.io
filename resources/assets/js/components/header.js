"use strict";

$(document).ready(function() {

    console.log("foi 123?");

    var $navbar = $("header nav.navbar");
    var $toggle = $navbar.find(".menu-toggle");
    var $menu = $navbar.find(".navbar-pages");

    $toggle.on("click", function() {
        $navbar.toggleClass("menu-opened");
    });

    $(window).on('scroll', function () { 

        var scrollTop = $(window).scrollTop();

        if (scrollTop > 0) {
            $navbar.addClass("fixed");

        } else {
            $navbar.removeClass("fixed");
        }

    });

    // Animação dropdown header
    $navbar.find(".navbar-pages > .nav-item.dropdown").each(function() {

        var $dropdown = $(this);

        $dropdown.on("mouseenter", function() {
            $dropdown.find(".dropdown-menu").fadeIn(300);

        }).on("mouseleave", function() {
            $dropdown.find(".dropdown-menu").fadeOut(300);
        });

    });

});
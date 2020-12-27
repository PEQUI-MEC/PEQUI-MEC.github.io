"use strict";

$(document).ready(function() {

    $(".page.home").each(function() {

        var $page = $(this);
        
        $page.find(".carousel-section").each(function() {
            
            var $section = $(this);
            var $carousel = $section.find(".swiper-container");

            var swiper = new Swiper ($carousel[0], {
                loop: true,
                pagination: {
					el: '.swiper-pagination',
					clickable: true
				}
			});

		});

		$page.find(".sponsors-section").each(function() {

			var $section = $(this);
            var $carousel = $section.find(".swiper-container");

            var swiper = new Swiper ($carousel[0], {
				loop: true,
				centeredSlides: true,
				slidesPerView: 1.25,
				spaceBetween: 10,
				autoplay: true,
				breakpoints: {
					768: {
						slidesPerView: 2.5,
					},
					992: {
						slidesPerView: 4.5,
					}
				}
			});

		});
		
		$page.find(".section4-section").each(function() {

			var $section = $(this);
			var $carousel = $section.find(".swiper-container");

			var swiper = new Swiper($carousel[0], {
				slidesPerView: 1,
				spaceBetween: 0,
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				},
				breakpoints: {
					768: {
						slidesPerView: 2,
						spaceBetween: 30
					},
					992: {
						slidesPerView: 3,
						spaceBetween: 30
					}
				}
			});

		});

    });

});
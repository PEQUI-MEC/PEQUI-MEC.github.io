"use strict";

$(document).ready(function() {
	// Set the date we're counting down to
	var countDownDate = new Date("Oct 17, 2022 08:00:00").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {
		// Get today's date and time
		var now = new Date().getTime();

		// Find the distance between now and the count down date
		var distance = countDownDate - now;

		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);


		
		// Display the result in the element with id="demo"
		// document.getElementById("month").innerHTML = days;
		document.getElementById("day").innerHTML = days.toLocaleString('en-US', {minimumIntegerDigits: 2,useGrouping: false});
		document.getElementById("hour").innerHTML = hours.toLocaleString('en-US', {minimumIntegerDigits: 2,useGrouping: false});
		document.getElementById("min").innerHTML = minutes.toLocaleString('en-US', {minimumIntegerDigits: 2,useGrouping: false});
		document.getElementById("sec").innerHTML = seconds.toLocaleString('en-US', {minimumIntegerDigits: 2,useGrouping: false});
		
		// If the count down is finished, write some text
		if (distance < 0) {
			clearInterval(x);
			document.getElementById("day").innerHTML = "00";
			document.getElementById("hour").innerHTML = "00";
			document.getElementById("min").innerHTML = "00";
			document.getElementById("sec").innerHTML = "00";
		}
	}, 1000);

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
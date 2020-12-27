"use strict";

$(document).ready(function() {

    $(".page.inner").each(function() {

        var $page = $(this);

        $page.find(".team-wrapper").each(function() {

            var $wrapper = $(this);

            var $carousel = $wrapper.find(".swiper-container");
    
            var swiper = new Swiper ($carousel[0], {
                loop: true,
                slidesPerView: 2,
                spaceBetween: 15,
                centeredSlides: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    dynamicBullets: false,
                },
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    768: {
                        centeredSlides: false,
                        spaceBetween: 15,
                        slidesPerView: 3,
                    },
                    992: {
                        centeredSlides: false,
                        slidesPerView: 4,
                    }
                }
            });

        });

        $page.find(".gallery-wrapper").each(function() {

            var $wrapper = $(this);

            var $swiperContainer = $wrapper.find(".swiper-container");
            var $masonryGrid = $wrapper.find(".masonry-grid");

            $swiperContainer.each(function() {
    
                var $carousel = $(this);
    
                var swiper = new Swiper ($carousel[0], {
                    loop: true,
                    centeredSlides: true,
                    slidesPerView: 2,
                    spaceBetween: 10,
                    autoplay: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        dynamicBullets: true,
                    },
                    breakpoints: {
                        768: {
                            spaceBetween: 20,
                            slidesPerView: 3,
                        }
                    }
                });
    
            });
    
            $masonryGrid.each(function() {
    
                var n = 3;
                var width = $(this).width();
                var gap = 16;
                var columnWidth = width/n - (gap*(n-1)/n);
    
                $masonryGrid.css("column-width", columnWidth+"px");
                $masonryGrid.css("column-gap", gap+"px");
    
            });

            var sources = [];

            $masonryGrid.find(".grid-item img").each(function() {
                sources.push(this.getAttribute("src"));
            });

            function openGallery(src) {

                var index = sources.indexOf(src);

                if (src && index >= 0) {

                    var items = sources.map(function(source) {
                        return { src: source }
                    });

                    $.fancybox.open(items, { loop: true }, index);
                }
            }

            $wrapper.find(".masonry-grid .grid-item").click(function() {

                var $img = $(this).find("img").first();

                if ($img.length > 0) {
                    openGallery($img.attr("src"));
                }

            });

            $wrapper.find(".swiper-container .swiper-slide").click(function() {

                var index = $(this).attr("data-swiper-slide-index");
                var src = sources[index];

                if (src) {
                    openGallery(src);
                }

            });

        });
        
    });

});
"use strict";

$(document).ready(function() {

	$("[data-background]").each(function() {
		$(this).css("background-image", "url(" + $(this).data("background") + ")");
	});

});

/**
 * Retornar breakpoint atual da página
 * @returns number
 */
function getCurrentBreakpoint() {

	var w = $(window).width();

	if (w < 576) {
		return 'xs';

    } else if (w < 768) {
        return 'sm';

	} else if (w < 992) {
        return 'md';
        
	} else if (w < 1200) {
		return 'lg';
		
	} else {
		return 'xl';
	}
}


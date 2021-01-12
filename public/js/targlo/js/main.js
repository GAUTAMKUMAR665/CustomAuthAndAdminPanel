
'use strict';


$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut(); 
	$("#preloder").delay(400).fadeOut("slow");

});

(function($) {

	// /*------------------
	// 	Navigation
	// --------------------*/
	// $('.responsive-bar').on('click', function(event) {
	// 	$('.main-menu').slideToggle(400);
	// 	event.preventDefault();
	// });


	/*------------------
		Background set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

	
	 /*------------------
		Contact Form
	--------------------*/
    $(".check-form").focus(function () {
        $(this).next("span").addClass("active");
    });
    $(".check-form").blur(function () {
        if ($(this).val() === "") {
            $(this).next("span").removeClass("active");
        }
    });


})(jQuery);


// radio buttons
$.fn.responsiveTabs = function() {
    var container = this;
    container
        .on('show.bs.collapse', '.panel-collapse', function() {
            $(this).addClass('active')
                .siblings('.panel-collapse').removeClass('active').collapse('hide');
            container.find('.nav-tabs a[href="#' + $(this).attr('id') + '"]').parent().addClass('active')
                .siblings().removeClass('active');
        })
        .on('show.bs.tab', '.nav-tabs a', function() {
            $($(this).attr('href')).addClass('in')
                .siblings('.tab-pane').removeClass('in');
        });
};

// Instanciation
$(document).ready(function() {
    $('.responsive-tabs').responsiveTabs();
});

$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});

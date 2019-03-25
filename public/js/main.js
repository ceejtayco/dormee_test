/* =================================
------------------------------------
	LERAMIZ - Landing Page Template
	Version: 1.0
 ------------------------------------ 
 ====================================*/


'use strict';


var window_w = $(window).innerWidth();


$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut(); 
	$("#preloder").delay(400).fadeOut("slow");

});

(function($) {

	/*------------------
		Navigation
	--------------------*/
	$('.nav-switch').on('click', function(event) {
		$('.main-menu').slideToggle(400);
		event.preventDefault();
	});


	/*------------------
		Background set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});



	$('.gallery').find('.gallery-item').each(function() {
		var pi_height1 = $(this).outerWidth(true),
		pi_height2 = pi_height1/2;
		
		if($(this).hasClass('grid-long') && window_w > 991){
			$(this).css('height', pi_height2);
		}else{
			$(this).css('height', Math.abs(pi_height1));
		}
	});



	$('.gallery').masonry({
		itemSelector: '.gallery-item',
	  	columnWidth: '.grid-sizer',
		gutter: 20
	});


	/*------------------
		Review Slider
	--------------------*/
	$('.review-slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 1,
        dots: true,
        autoplay: true,
    });



    $('.clients-slider').owlCarousel({
		loop:true,
		autoplay:true,
		margin:30,
		nav:false,
		dots: true,
		responsive:{
			0:{
				items:2,
				margin:10
			},
			600:{
				items:3
			},
			800:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});


	/*------------------
		Review Slider
	--------------------*/
	var sync1 = $("#sl-slider");
	var sync2 = $("#sl-slider-thumb");
	var slidesPerPage = 4; //globaly define number of elements per page
	var syncedSecondary = true;

	sync1.owlCarousel({
		items : 1,
		slideSpeed : 2000,
		nav: false,
		autoplay: true,
		dots: true,
		loop: true,
		responsiveRefreshRate : 200,
	}).on('changed.owl.carousel', syncPosition);

	sync2.on('initialized.owl.carousel', function () {
		sync2.find(".owl-item").eq(0).addClass("current");
	}).owlCarousel({
		items : slidesPerPage,
		dots: true,
		nav: true,
		margin: 10,
		smartSpeed: 200,
		slideSpeed : 500,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
		responsiveRefreshRate : 100
	}).on('changed.owl.carousel', syncPosition2);

	function syncPosition(el) {
		//if you set loop to false, you have to restore this next line
		//var current = el.item.index;
		//if you disable loop you have to comment this block
		var count = el.item.count-1;
		var current = Math.round(el.item.index - (el.item.count/2) - .5);

		if(current < 0) {
			current = count;
		}
		if(current > count) {
			current = 0;
		}

		//end block
		sync2.find(".owl-item").removeClass("current").eq(current).addClass("current");
		var onscreen = sync2.find('.owl-item.active').length - 1;
		var start = sync2.find('.owl-item.active').first().index();
		var end = sync2.find('.owl-item.active').last().index();

		if (current > end) {
			sync2.data('owl.carousel').to(current, 100, true);
		}
		if (current < start) {
			sync2.data('owl.carousel').to(current - onscreen, 100, true);
		}
	}

	function syncPosition2(el) {
		if(syncedSecondary) {
			var number = el.item.index;
			sync1.data('owl.carousel').to(number, 100, true);
		}
	}

	sync2.on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).index();
		sync1.data('owl.carousel').to(number, 300, true);
	});




	/*------------------
		Accordions
	--------------------*/
	$('.panel-link').on('click', function (e) {
		$('.panel-link').removeClass('active');
		var $this = $(this);
		if (!$this.hasClass('active')) {
			$this.addClass('active');
		}
		e.preventDefault();
	});



	$('.video-link').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
    });


})(jQuery);


(function($) {

    $( "#birth_date" ).datepicker({
        dateFormat: "mm - dd - yy",
        showOn: "both",
        buttonText : '<i class="zmdi zmdi-calendar-alt"></i>',
    });

    $('.add-info-link ').on('click', function() {
        $('.add_info').toggle( "slow" );
    });

    $('#country').parent().append('<ul class="list-item" id="newcountry" name="country"></ul>');
    $('#country option').each(function(){
        $('#newcountry').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#country').remove();
    $('#newcountry').attr('id', 'country');
    $('#country li').first().addClass('init');
    $("#country").on("click", ".init", function() {
        $(this).closest("#country").children('li:not(.init)').toggle();
    });

    $('#city').parent().append('<ul class="list-item" id="newcity" name="city"></ul>');
    $('#city option').each(function(){
        $('#newcity').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#city').remove();
    $('#newcity').attr('id', 'city');
    $('#city li').first().addClass('init');
    $("#city").on("click", ".init", function() {
        $(this).closest("#city").children('li:not(.init)').toggle();
    });

    var allOptions = $("#country").children('li:not(.init)');
    $("#country").on("click", "li:not(.init)", function() {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#country").children('.init').html($(this).html());
        allOptions.toggle('slow');
    });

    var FoodOptions = $("#city").children('li:not(.init)');
    $("#city").on("click", "li:not(.init)", function() {
        FoodOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#city").children('.init').html($(this).html());
        FoodOptions.toggle('slow');
    });

    $('#signup-form').validate({
        rules : {
            first_name : {
                required: true,
            },
            last_name : {
                required: true,
            },
            phone_number : {
                required: true
            },
            password : {
                required: true
            },
            re_password : {
                required: true,
                equalTo: "#password"
            }
        },
        onfocusout: function(element) {
            $(element).valid();
        },
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });
})(jQuery);

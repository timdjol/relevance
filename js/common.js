$(function() {

	//menu
	$("nav .toggle-mnu").click(function() {
		$(this).toggleClass("on");
		$("nav ul").slideToggle();
		$("body").addClass('act');
		return false;
	});

	//fixed menu
	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$('.fixedhead').fadeIn().addClass("fixed");
		} else {
			$('.fixedhead').removeClass("fixed").animate('slow');
		}
	});  

	//tabs
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');
		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});

	AOS.init();

	//magnific
	$("a[href='#callback']").magnificPopup({
		mainClass: 'my-mfp-zoom-in',
		removalDelay: 300,
		midClick: true,
		closeBtnInside:true,
		fixedContentPos: false,
		type: 'inline',
		focus: '#name',
		callbacks: {
			beforeOpen: function() {
				jQuery('body').css('overflow', 'hidden');
			},
			beforeClose: function() {
				jQuery('body').css('overflow', 'auto');
			}
		}
	});  

	//owl-carousel
	$('.owl-reviews').owlCarousel({
		loop: true,
		smartSpeed: 700,
		autoplay: true,
		margin: 40,
		stagePadding: 25,
		autoplayTimeout: 7000,
		navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		nav: false,
		dots: true,
		// autoHeight:true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			750: {
				items: 2,
				stagePadding: 0,
				margin: 0
			},
			992: {
				items: 2
			},
			1200: {
				items: 3
			}
		}
	});

	$('.owl-news').owlCarousel({
		//loop: true,
		smartSpeed: 700,
		autoplay: true,
		margin: 20,
		stagePadding: 25,
		autoplayTimeout: 7000,
		navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		nav: false,
		dots: true,
		// autoHeight:true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			750: {
				items: 2,
				stagePadding: 0,
				margin: 0
			},
			992: {
				items: 2
			},
			1200: {
				items: 3
			}
		}
	});

	//button up
	$('.top').click(function() {
		$('html, body').stop().animate({scrollTop: 0}, 'slow', 'swing');
	});
	$(window).scroll(function() {
		if ($(this).scrollTop() > $(window).height()) {
			$('.top').addClass("active");
		} else {
			$('.top').removeClass("active");
		};
	});

	//mail
	$(".form-callback").submit(function(event) { //Change
		var th = $(this);
		if (!event.preventDefault())
		{
			$("#send").attr("disabled", true);
		}
		$.ajax({
			type: "POST",
			url: "http://ca-anticorruption.com/beta/wp-content/themes/nocorruption/mail.php", //Change
			data: th.serialize()
		}).done(function() {
			th.find(".success").addClass("active");
			setTimeout(function() {
				// Done Functions
				th.find(".success").removeClass("active");
				th.trigger("reset");
				$("#send").attr("disabled", false);
				//$.magnificPopup.close();
			}, 3000);
		});
		return false;
	});

	$(document).ready(function () {
		//equal
		function heightses() {
			$(".homeservice img").height("auto").equalHeights();
			$(".homeservice h4").height("auto").equalHeights();
			$(".reviews img").height("auto").equalHeights();
			$(".reviews p").height("auto").equalHeights();
			$(".homeblog img").height("auto").equalHeights();
			$(".homeblog h3").height("auto").equalHeights();
			$(".news h4").height("auto").equalHeights();
			$(".orders h3").height("auto").equalHeights();
		} heightses();

		$(window).resize(function () {
			heightses();
		});
	});
	
	//social popup
	$('.call-button').click(function () {
		$('.soc-list').toggle('slow').toggleClass('active');
	});

});

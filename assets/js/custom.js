(function($) {
	"use strict";

  gsap.registerPlugin(ScrollTrigger, SplitText);
	gsap.config({ nullTargetWarn: false, trialWarn: false });


	// Time picker
	function timepicker() {
		if ($('input[name="time"]').length) {
			$('input[name="time"]').ptTimeSelect();
		}
	}

	// FullHeight
	function fullHeight() {
		$('.full-height').css("height", $(window).height());
	}


	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if ($('.loader-wrap').length) {
			$('.loader-wrap').delay(1000).fadeOut(1000);
		}
		TweenMax.to($(".loader-wrap .overlay"), 1.2, {
			force3D: true,
			left: "100%",
			ease: Expo.easeInOut,
		});
	}

	// Scroll To Explore Div
	if ($('.scroll-to-explore').length) {
		$(".scroll-to-explore").on('click', function() {
			var target = $(this).attr('data-target');
			// animate
			$('html, body').animate({
				scrollTop: $(target).offset().top
			}, 1500);

		});
	}


	//Scrool To Top Bar
	function handleScrollbar() {
		const bHeight = $('body').height();
		const scrolled = $(window).innerHeight() + $(window).scrollTop();

		let percentage = ((scrolled / bHeight) * 100);

		if (percentage > 100) percentage = 100;

		$('.scroll-top-inner .bar-inner').css('width', percentage + '%');
	}


	// swiper slider
	function thmSwiperInit() {
		if ($(".thm-swiper__slider").length) {
			$(".thm-swiper__slider").each(function() {
				let elm = $(this);
				let options = elm.data('swiper-options');
				let thmSwiperSlider = new Swiper(elm, options);
			});
		}
	}


	// owl slider
	function thmOwlInit() {
		if ($(".thm-owl__carousel").length) {
			$(".thm-owl__carousel").each(function() {
				let elm = $(this);
				let options = elm.data('owl-options');
				let thmOwlCarousel = elm.owlCarousel(options);
			});
		}

		if ($(".thm-owl__carousel--custom-nav").length) {
			$(".thm-owl__carousel--custom-nav").each(function() {
				let elm = $(this);
				let owlNavPrev = elm.data('owl-nav-prev');
				let owlNavNext = elm.data('owl-nav-next');
				$(owlNavPrev).on("click", function(e) {
					elm.trigger('prev.owl.carousel');
					e.preventDefault();
				})

				$(owlNavNext).on("click", function(e) {
					elm.trigger('next.owl.carousel');
					e.preventDefault();
				})
			});
		}
	}

	// Dynamic Current Menu Class selector
	function dynamicCurrentMenuClass(selector) {
		let FileName = window.location.href.split("/").reverse()[0];

		selector.find("li").each(function() {
			let anchor = $(this).find("a");
			if ($(anchor).attr("href") == FileName) {
				$(this).addClass("current");
			}
		});
		// if any li has .current elmnt add class
		selector.children("li").each(function() {
			if ($(this).find(".current").length) {
				$(this).addClass("current");
			}
		});
		// if no file name return
		if ("" == FileName) {
			selector.find("li").eq(0).addClass("current");
		}
	}

	//Accordion Active
	function accordionActive() {
		if ($('.accordion-box-style1').length) {
			$(".accordion-box-style1").on('click', '.accord-btn', function() {

				if ($(this).hasClass('active') !== true) {
					$('.accordion .accord-btn').removeClass('active');

				}

				if ($(this).next('.accord-content').is(':visible')) {
					$(this).removeClass('active');
					$(this).next('.accord-content').slideUp(500);
				} else {
					$(this).addClass('active');
					$('.accordion .accord-content').slideUp(500);
					$(this).next('.accord-content').slideDown(500);
				}
			});
		}
	}



	//Accordion Active 2
	function accordionActive2() {
		if ($('.accordion-box-style2').length) {
			$(".accordion-box-style2").on('click', '.accord-btn', function() {

				if ($(this).hasClass('active') !== true) {
					$('.accordion .accord-btn').removeClass('active');

				}

				if ($(this).next('.accord-content').is(':visible')) {
					$(this).removeClass('active');
					$(this).next('.accord-content').slideUp(500);
				} else {
					$(this).addClass('active');
					$('.accordion .accord-content').slideUp(500);
					$(this).next('.accord-content').slideDown(500);
				}
			});
		}
	}



	// ===Project //  masonary===
	function projectMasonaryLayout() {
		if ($('.masonary-layout').length) {
			$('.masonary-layout').isotope({
				layoutMode: 'masonry'
			});
		}
		if ($('.post-filter').length) {
			$('.post-filter li').children('.filter-text').on('click', function() {
				var Self = $(this);
				var selector = Self.parent().attr('data-filter');
				$('.post-filter li').removeClass('active');
				Self.parent().addClass('active');
				$('.filter-layout').isotope({
					filter: selector,
					animationOptions: {
						duration: 500,
						easing: 'linear',
						queue: false
					}
				});
				return false;
			});
		}

		if ($('.post-filter.has-dynamic-filters-counter').length) {
			// var allItem = $('.single-filter-item').length;
			var activeFilterItem = $('.post-filter.has-dynamic-filters-counter').find('li');
			activeFilterItem.each(function() {
				var filterElement = $(this).data('filter');
				var count = $('.filter-layout').find(filterElement).length;
				$(this).children('.filter-text').append('<span class="count">' + count + '</span>');
			});
		};
	}



	//Masonary
	function enableMasonry() {
		if ($('.masonry-items-container').length) {

			var winDow = $(window);
			// Needed variables
			var $container = $('.masonry-items-container');

			$container.isotope({
				itemSelector: '.masonry-item',
				masonry: {
					columnWidth: '.gallery-item'
				},
				animationOptions: {
					duration: 500,
					easing: 'linear'
				}
			});

			winDow.bind('resize', function() {

				$container.isotope({
					itemSelector: '.masonry-item',
					animationOptions: {
						duration: 500,
						easing: 'linear',
						queue: false
					}
				});
			});
		}
	}



	function SmoothMenuScroll() {
		var anchor = $(".scrollToLink");
		if (anchor.length) {
			anchor.children("a").bind("click", function(event) {
				if ($(window).scrollTop() > 10) {
					var headerH = "90";
				} else {
					var headerH = "90";
				}
				var target = $(this);
				$("html, body")
					.stop()
					.animate({
							scrollTop: $(target.attr("href")).offset().top - headerH + "px"
						},
						900,
						"easeInSine"
					);
				anchor.removeClass("current");
				anchor.removeClass("current-menu-ancestor");
				anchor.removeClass("current_page_item");
				anchor.removeClass("current-menu-parent");
				target.parent().addClass("current");
				event.preventDefault();
			});
		}
	}



	function OnePageMenuScroll() {
		var windscroll = $(window).scrollTop();
		if (windscroll >= 117) {
			var menuAnchor = $(".one-page-scroll-menu .scrollToLink").children("a");
			menuAnchor.each(function() {
				var sections = $(this).attr("href");
				$(sections).each(function() {
					if ($(this).offset().top <= windscroll + 100) {
						var Sectionid = $(sections).attr("id");
						$(".one-page-scroll-menu").find("li").removeClass("current");
						$(".one-page-scroll-menu").find("li").removeClass("current-menu-ancestor");
						$(".one-page-scroll-menu").find("li").removeClass("current_page_item");
						$(".one-page-scroll-menu").find("li").removeClass("current-menu-parent");
						$(".one-page-scroll-menu")
							.find("a[href*=\\#" + Sectionid + "]")
							.parent()
							.addClass("current");
					}
				});
			});
		} else {
			$(".one-page-scroll-menu li.current").removeClass("current");
			$(".one-page-scroll-menu li:first").addClass("current");
		}
	}



	// ===Image Hover Script===
	function onHoverthreeDmovement() {
		var tiltBlock = $('.js-tilt');
		if (tiltBlock.length) {
			$('.js-tilt').tilt({
				maxTilt: 20,
				perspective: 700,
				glare: true,
				maxGlare: 0
			})
		}
	}



	//===Language switcher===
	function languageSwitcher() {
		if ($("#polyglot-language-options").length) {
			$('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
				effect: 'slide',
				animSpeed: 100,
				testMode: true,
				onChange: function(evt) {
					alert("The selected language is: " + evt.selectedItem);
				}

			});
		};
	}



	// Color switcher
	function swithcerMenu() {
		if ($('.switch_menu').length) {

			$('.switch_btn button').on('click', function() {
				$('.switch_menu').toggle(500)
			});

			$('#styleOptions').styleSwitcher({
				hasPreview: true,
				fullPath: 'assets/css/color/',
				cookie: {
					expires: 30,
					isManagingLoad: true
				}
			});

		};
	}



	if ($(".marquee_mode").length) {
		$('.marquee_mode').marquee({
			speed: 50,
			gap: 0,
			delayBeforeStart: 0,
			direction: 'left',
			duplicated: true,
			pauseOnHover: true,
			startVisible: true,
		});
	}



	if ($(".main-menu__list").length) {
		// dynamic current class
		let mainNavUL = $(".main-menu__list");
		dynamicCurrentMenuClass(mainNavUL);
	}



	if ($(".main-menu__list").length && $(".mobile-nav__container").length) {
		let navContent = document.querySelector(".main-menu__list").outerHTML;
		let mobileNavContainer = document.querySelector(".mobile-nav__container");
		mobileNavContainer.innerHTML = navContent;
	}



	if ($(".mobile-nav__container .main-menu__list").length) {
		let dropdownAnchor = $(
			".mobile-nav__container .main-menu__list .dropdown > a"
		);
		dropdownAnchor.each(function() {
			let self = $(this);
			let toggleBtn = document.createElement("BUTTON");
			toggleBtn.setAttribute("aria-label", "dropdown toggler");
			toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";
			self.append(function() {
				return toggleBtn;
			});
			self.find("button").on("click", function(e) {
				e.preventDefault();
				let self = $(this);
				self.toggleClass("expanded");
				self.parent().toggleClass("expanded");
				self.parent().parent().children("ul").slideToggle();
			});
		});
	}



	if ($(".mobile-nav__toggler").length) {
		$(".mobile-nav__toggler").on("click", function(e) {
			e.preventDefault();
			$(".mobile-nav__wrapper").toggleClass("expanded");
			$("body").toggleClass("locked");
		});
	}



	if ($(".sticky-header__content").length) {
		let navContent = document.querySelector(".main-menu").innerHTML;
		let mobileNavContainer = document.querySelector(".sticky-header__content");
		mobileNavContainer.innerHTML = navContent;
	}



	if ($(".service-details__sidebar-service-list").length) {
		// dynamic current class
		let mainNavUL = $(".service-details__sidebar-service-list");
		dynamicCurrentMenuClass(mainNavUL);
	}



	// Tab Box
	if ($('.tabs-box').length) {
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));

			if ($(target).is(':visible')) {
				return false;
			} else {
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				$(target).fadeIn(300);
				$(target).addClass('active-tab');
			}
		});
	}



	// Price Filter
	if ($('.price-ranger').length) {
		$('.price-ranger #slider-range').slider({
			range: true,
			min: 10,
			max: 200,
			values: [11, 99],
			slide: function(event, ui) {
				$('.price-ranger .ranger-min-max-block .min').val('$' + ui.values[0]);
				$('.price-ranger .ranger-min-max-block .max').val('$' + ui.values[1]);
			}
		});
		$('.price-ranger .ranger-min-max-block .min').val('$' + $('.price-ranger #slider-range').slider('values', 0));
		$('.price-ranger .ranger-min-max-block .max').val('$' + $('.price-ranger #slider-range').slider('values', 1));
	};



	//Fact Counter + Text Count
	if ($(".count-box").length) {
		$(".count-box").appear(
			function() {
				var $t = $(this),
					n = $t.find(".count-text").attr("data-stop"),
					r = parseInt($t.find(".count-text").attr("data-speed"), 10);

				if (!$t.hasClass("counted")) {
					$t.addClass("counted");
					$({
						countNum: $t.find(".count-text").text()
					}).animate({
						countNum: n
					}, {
						duration: r,
						easing: "linear",
						step: function() {
							$t.find(".count-text").text(Math.floor(this.countNum));
						},
						complete: function() {
							$t.find(".count-text").text(this.countNum);
						}
					});
				}
			}, {
				accY: 0
			}
		);
	}



	if ($('.time-countdown-two').length) {
		$('.time-countdown-two').each(function() {
			var Self = $(this);
			var countDate = Self.data('countdown-time'); // getting date

			Self.countdown(countDate, function(event) {
				$(this).html('<li> <div class="box"> <span class="days">' + event.strftime('%D') + '</span> <span class="timeRef">days</span> </div> </li> <li> <div class="box"> <span class="hours">' + event.strftime('%H') + '</span> <span class="timeRef clr-1">Hours</span> </div> </li> <li> <div class="box"> <span class="minutes">' + event.strftime('%M') + '</span> <span class="timeRef clr-2">Minutes</span> </div> </li> <li> <div class="box"> <span class="seconds">' + event.strftime('%S') + '</span> <span class="timeRef clr-3">Seconds</span> </div> </li>');
			});
		});
	}



	// Cart Touch Spin
	if ($('.quantity-spinner').length) {
		$("input.quantity-spinner").TouchSpin({
			verticalbuttons: true
		});
	}



	// === Round Progress Bar===
	if ($('.dial').length) {
		$('.dial').appear(function() {
			var elm = $(this);
			var color = elm.attr('data-fgColor');
			var perc = elm.attr('value');
			elm.knob({
				'value': 0,
				'min': 0,
				'max': 100,
				'skin': 'tron',
				'readOnly': true,
				'thickness': 0.15,
				'dynamicDraw': true,
				'displayInput': false
			});
			$({
				value: 0
			}).animate({
				value: perc
			}, {
				duration: 2000,
				easing: 'swing',
				progress: function() {
					elm.val(Math.ceil(this.value)).trigger('change');
				}
			});
			$(this).append(function() {});
		}, {
			accY: 20
		});
	}



	//Progress Bar / Levels
	if ($('.progress-levels .progress-box .bar-fill').length) {
		$(".progress-box .bar-fill").each(function() {
			$('.progress-box .bar-fill').appear(function() {
				var progressWidth = $(this).attr('data-percent');
				$(this).css('width', progressWidth + '%');
			});

		}, {
			accY: 0
		});
	}



	//====== Magnific Popup
	if ($(".video-popup").length) {
		$(".video-popup").magnificPopup({
			type: "iframe",
			mainClass: "mfp-fade",
			removalDelay: 160,
			preloader: true,

			fixedContentPos: false
		});
	}



	if ($(".img-popup").length) {
		var groups = {};
		$(".img-popup").each(function() {
			var id = parseInt($(this).attr("data-group"), 10);

			if (!groups[id]) {
				groups[id] = [];
			}

			groups[id].push(this);
		});

		$.each(groups, function() {
			$(this).magnificPopup({
				type: "image",
				closeOnContentClick: true,
				closeBtnInside: false,
				gallery: {
					enabled: true
				}
			});
		});
	}



	//LightBox / Fancybox
	if ($('.lightbox-image').length) {
		$('.lightbox-image').fancybox({
			openEffect: 'fade',
			closeEffect: 'fade',

			youtube: {
				controls: 0,
				showinfo: 0
			},

			helpers: {
				media: {}
			}
		});
	}



	// AOS Animation
	if ($("[data-aos]").length) {
		AOS.init({
			duration: '1000',
			disable: 'false',
			easing: 'ease',
			mirror: true
		});
	}




	//Contact Form Validation
	if ($("#contact-form").length) {
		$("#contact-form").validate({
			submitHandler: function(form) {
				var form_btn = $(form).find('button[type="submit"]');
				var form_result_div = '#form-result';
				$(form_result_div).remove();
				form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
				var form_btn_old_msg = form_btn.html();
				form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
				$(form).ajaxSubmit({
					dataType: 'json',
					success: function(data) {
						if (data.status = 'true') {
							$(form).find('.form-control').val('');
						}
						form_btn.prop('disabled', false).html(form_btn_old_msg);
						$(form_result_div).html(data.message).fadeIn('slow');
						setTimeout(function() {
							$(form_result_div).fadeOut('slow')
						}, 6000);
					}
				});
			}
		});
	}



	if ($("#datepicker").length) {
		$("#datepicker").datepicker();
	}



	if ($(".odometer").length) {
		var odo = $(".odometer");
		odo.each(function() {
			$(this).appear(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});
	}



	if ($(".wow").length) {
		var wow = new WOW({
			boxClass: "wow", // animated element css class (default is wow)
			animateClass: "animated", // animation css class (default is animated)
			mobile: true, // trigger animations on mobile devices (default is true)
			live: true // act on asynchronously loaded content (default is true)
		});
		wow.init();
	}



	//Accordion Box
	if ($('.accordion-box').length) {
		$(".accordion-box").on('click', '.acc-btn', function() {

			var outerBox = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');

			if ($(this).hasClass('active') !== true) {
				$(outerBox).find('.accordion .acc-btn').removeClass('active');
			}

			if ($(this).next('.acc-content').is(':visible')) {
				return false;
			} else {
				$(this).addClass('active');
				$(outerBox).children('.accordion').removeClass('active-block');
				$(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);
			}
		});
	}



	// ===Search Toggler Script===
	if ($(".search-toggler").length) {
		$(".search-toggler").on("click", function(e) {
			e.preventDefault();
			$(".search-popup").toggleClass("active");
			$(".mobile-nav__wrapper").removeClass("expanded");
			$("body").toggleClass("locked");
		});
	}



	if ($('.paroller').length) {
		$('.paroller').paroller({
			factor: -0.1, // multiplier for scrolling speed and offset, +- values for direction control  
			factorLg: -0.1, // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control  
			type: 'foreground', // background, foreground  
			direction: 'vertical' // vertical, horizontal  
		});
	}



	if ($('.paroller-2').length) {
		$('.paroller-2').paroller({
			factor: 0.05, // multiplier for scrolling speed and offset, +- values for direction control  
			factorLg: 0.05, // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control  
			type: 'foreground', // background, foreground  
			direction: 'horizontal' // vertical, horizontal  
		});
	}



	$(document).ready(function() {
		$('select:not(.ignore)').niceSelect();

	});



	// Tab Box Style1
	if ($('.tab-box-style1').length) {
		$('.tab-box-style1 .tabs-button-box .tab-btn-item').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));

			if ($(target).hasClass('actve-tab')) {
				return false;
			} else {
				$('.tab-box-style1 .tabs-button-box .tab-btn-item').removeClass('active-btn-item');
				$(this).addClass('active-btn-item');
				$('.tab-box-style1 .tabs-content-box .tab-content-box-item').removeClass('tab-content-box-item-active');
				$(target).addClass('tab-content-box-item-active');
			}
		});
	}



	if ($(".project-style2__box li").length) {
		$(".project-style2__box li").each(function() {
			let self = $(this);

			self.on("mouseenter", function() {
				console.log($(this));
				$(".project-style2__box li").removeClass("active");
				$(this).addClass("active");
			});
		});
	}








	// Vegas Slider
	if ($(".slider-bg-slide").length) {
		$(".slider-bg-slide").each(function() {
			var Self = $(this);
			var bgSlideOptions = Self.data("options");
			var bannerTwoSlides = Self.vegas(bgSlideOptions);
		});
	}



	// Animation gsap 
	function tg_title_animation() {
		var tg_var = jQuery('.sec-title-animation');
		if (!tg_var.length) {
			return;
		}
		const quotes = document.querySelectorAll(".sec-title-animation .title-animation");

		quotes.forEach(quote => {

			//Reset if needed
			if (quote.animation) {
				quote.animation.progress(1).kill();
				quote.split.revert();
			}

			var getclass = quote.closest('.sec-title-animation').className;
			var animation = getclass.split('animation-');
			if (animation[1] == "style4") return

			quote.split = new SplitText(quote, {
				type: "lines,words,chars",
				linesClass: "split-line"
			});
			gsap.set(quote, {
				perspective: 400
			});

			if (animation[1] == "style1") {
				gsap.set(quote.split.chars, {
					opacity: 0,
					y: "90%",
					rotateX: "-40deg"
				});
			}
			if (animation[1] == "style2") {
				gsap.set(quote.split.chars, {
					opacity: 0,
					x: "50"
				});
			}
			if (animation[1] == "style3") {
				gsap.set(quote.split.chars, {
					opacity: 0,
				});
			}
			quote.animation = gsap.to(quote.split.chars, {
				scrollTrigger: {
					trigger: quote,
					start: "top 90%",
				},
				x: "0",
				y: "0",
				rotateX: "0",
				opacity: 1,
				duration: 1,
				ease: Back.easeOut,
				stagger: .02
			});
		});
	}
	ScrollTrigger.addEventListener("refresh", tg_title_animation);





	//  Animation Fade Left End
	///////////////////////////////////////
	// CURSOR
	var cursor = $(".cursor"),
		follower = $(".cursor-follower");

	var posX = 0,
		posY = 0;

	var mouseX = 0,
		mouseY = 0;

	TweenMax.to({}, 0.016, {
		repeat: -1,
		onRepeat: function() {
			posX += (mouseX - posX) / 9;
			posY += (mouseY - posY) / 9;

			TweenMax.set(follower, {
				css: {
					left: posX - 12,
					top: posY - 12
				}
			});

			TweenMax.set(cursor, {
				css: {
					left: mouseX,
					top: mouseY
				}
			});
		}
	});

	$(document).on("mousemove", function(e) {
		mouseX = e.clientX;
		mouseY = e.clientY;
	});
	//circle
	$(".theme-btn, a").on("mouseenter", function() {
		cursor.addClass("active");
		follower.addClass("active");
	});
	$(".theme-btn, a").on("mouseleave", function() {
		cursor.removeClass("active");
		follower.removeClass("active");
	});










	// window load event
	$(window).on("load", function() {

		thmSwiperInit();
		thmOwlInit();
		handlePreloader();
		projectMasonaryLayout();
		onHoverthreeDmovement();
		accordionActive();
		accordionActive2();
		enableMasonry();
		fullHeight();
		timepicker();
		languageSwitcher();
		swithcerMenu();
		tg_title_animation();



		//Jquery Spinner / Quantity Spinner
		if ($('.quantity-spinner').length) {
			$("input.quantity-spinner").TouchSpin({
				verticalbuttons: true
			});
		}



		//Jquery Curved Circle
		if ($('.curved-circle').length) {
			$('.curved-circle').circleType({
				position: 'absolute',
				dir: 1,
				radius: 70,
				forceHeight: true,
				forceWidth: true
			});
		}


		// Vegas Slider
		if ($(".banner-bg-slide").length) {
			$(".banner-bg-slide").each(function() {
				var Self = $(this);
				var bgSlideOptions = Self.data("options");
				var bannerTwoSlides = Self.vegas(bgSlideOptions);
			});
		}





	});



	// window scroll event
	$(window).on("scroll", function() {

		OnePageMenuScroll();
		SmoothMenuScroll();
		handleScrollbar();


		//Stricked Menu Fixed
		if ($(".stricked-menu").length) {
			var headerScrollPos = 130;
			var stricky = $(".stricked-menu");
			if ($(window).scrollTop() > headerScrollPos) {
				stricky.addClass("stricky-fixed");
			} else if ($(this).scrollTop() <= headerScrollPos) {
				stricky.removeClass("stricky-fixed");
			}
		}


		//Scroll To Top
		if ($(window).scrollTop() > 200) {
			$('.scroll-top-inner').addClass('visible');
		} else {
			$('.scroll-top-inner').removeClass('visible');
		}



	});



	// Scroll top button
	$('.scroll-top-inner').on("click", function() {
		$('html, body').animate({
			scrollTop: 0
		}, 500);
		return false;
	});




})(jQuery);
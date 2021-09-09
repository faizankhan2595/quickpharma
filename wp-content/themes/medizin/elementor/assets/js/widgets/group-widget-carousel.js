(
	function ($) {
		'use strict';

		var SwiperHandler = function ($scope, $) {
			var $element = $scope.find('.tm-slider-widget');

			$element.MedizinSwiper();
		};

		var SwiperHandlerVertical = function ($scope, $) {
			var $element = $scope.find('.medizin-product-widget');

			$element.MedizinSwiper();
		};

		var SwiperLinkedHandler = function ($scope, $) {
			var $element = $scope.find('.tm-slider-widget');

			if ($scope.hasClass('medizin-swiper-linked-yes')) {
				var thumbsSlider = $element.filter('.medizin-thumbs-swiper').MedizinSwiper();
				var mainSlider = $element.filter('.medizin-main-swiper').MedizinSwiper({
					thumbs: {
						swiper: thumbsSlider,
						slidesPerGroup: 3
					}
				});
			} else {
				$element.MedizinSwiper();
			}
		};

		$(window).on('elementor/frontend/init', function () {
			elementorFrontend.hooks.addAction('frontend/element_ready/tm-image-carousel.default', SwiperHandler);
			elementorFrontend.hooks.addAction('frontend/element_ready/tm-modern-carousel.default', SwiperHandler);
			elementorFrontend.hooks.addAction('frontend/element_ready/tm-modern-slider.default', SwiperHandler);
			elementorFrontend.hooks.addAction('frontend/element_ready/tm-team-member-carousel.default', SwiperHandler);
			elementorFrontend.hooks.addAction('frontend/element_ready/tm-portfolio-carousel.default', SwiperHandler);
			elementorFrontend.hooks.addAction('frontend/element_ready/tm-product-carousel.default', SwiperHandler);
			elementorFrontend.hooks.addAction('frontend/element_ready/tm-product-widget.default', SwiperHandlerVertical);

			elementorFrontend.hooks.addAction('frontend/element_ready/tm-testimonial.default', SwiperLinkedHandler);
		});
	}
)(jQuery);

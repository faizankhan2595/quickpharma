(
	function( $ ) {
		'use strict';

		var MedizinGridHandler = function( $scope, $ ) {
			var $element = $scope.find( '.medizin-grid-wrapper' );

			$element.MedizinGridLayout();
		};

		$( window ).on( 'elementor/frontend/init', function() {
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-image-gallery.default', MedizinGridHandler );
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-testimonial-grid.default', MedizinGridHandler );
			elementorFrontend.hooks.addAction( 'frontend/element_ready/tm-product-categories.default', MedizinGridHandler );
		} );
	}
)( jQuery );

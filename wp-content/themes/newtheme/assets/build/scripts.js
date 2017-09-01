(function($) {

	var Site = {

		/**
		 * Initialize site
		 */
		init: function() {
			/**
			 * Set the initial breakpoint context
			 */
			//Site.challengeContext();
		},

	};

	$(document).ready(function() {
		Site.init();
	}).on('click', '.js-login-nav', function() {
		$(this).addClass('active');
		$('.js-login-content').addClass('active');
		$('.js-registration-nav').removeClass('active');
		$('.js-registration-content').removeClass('active');
	}).on('click', '.js-registration-nav', function() {
		$(this).addClass('active');
		$('.js-registration-content').addClass('active');
		$('.js-login-nav').removeClass('active');
		$('.js-login-content').removeClass('active');
	});

	// Chain any click events here

})(jQuery);

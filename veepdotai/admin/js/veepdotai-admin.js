(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	 $( window ).load(function() {
		var last = "";
	 	var input = $.find("#context"); 
		input[0].addEventListener("keyup", function(e) {
			if ('Enter' == e.key) {
				last = "";
			} else {
				var re = /exécute/i;

				// Gets the last line because the user may have been back and insert a char somewhere
				var lines = this.value.split('\n');
				last = lines[lines.length - 1];

				if (last.match(re)) {
					console.log("match exécute");
					window.location = "https://www.google.com";
				} else {
					console.log(e.key);
				}
			}
		});
	});

	 

})( jQuery );

var lastLine = "";
function check(lastChar) {
	console.log(lastChar);
}


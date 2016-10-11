/*  
Theme Name: Students of Premium Design Works
Script Description: Override functionality on the calendar plugin.
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
*/

$(window).load(function() { // when the window loads...
	
	var $ = jQuery.noConflict(); // prevent jQuery conflicts
	
	var calLink = function() {
		
		return false; // disable calendar link
		
	};
		
	$("a.ai1ec-popup-trigger").on("click", calLink); // 
	$("a.ai1ec-load-event").on("click", calLink); // 
	
}); // end window load
/*  
Theme Name: Students of Premium Design Works
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
*/

$(window).load(function() { // when the window loads...
	
	var $ = jQuery.noConflict(); // prevent jQuery conflicts
	
	var mainToggle = function() {
		
		$("#nav-items").slideToggle(); // enable main-menu toggle
		$("#nav-glyph").toggleClass("opened"); // enable main-menu glyph toggle

	};
	
	$("#nav-title").on("click", mainToggle); // trigger main-menu with glyph toggle
	
	var subToggle = function(e) {
		
		$(this).next("#nav-items li > ul.sub-menu").slideToggle(); // enable sub-menu toggle
		$(this).toggleClass("opened"); // enable sub-menu icon toggle
		e.preventDefault(); // disable href on main-menu item
		
	};
	
	$("#nav-items li.main > a").append("<span>"); // create span tag to attach toggle icon to (asshole!)
	
	if (window.innerWidth < 801) { // if width is less than 801px...
		
		$("#nav-items li.main > a").on("click", subToggle); // trigger sub-menu with icon toggle
	
	}	
	
	$("#nav-items li.current-page-item > a").addClass("opened"); // open toggle icon on current page
	$("#nav-items li.current-page-parent > a").addClass("opened"); // open toggle icon on current page parent
	
	var loadWidth = window.innerWidth; // save window load width as a variable
	
	$(window).resize(function() { // when the window is resized...
			
		if ( loadWidth !== window.innerWidth ) { // trigger for width only...
			
			if (window.innerWidth < 801) { // if width is less than 801px...
			
				$("#nav-items").hide(); // hide the navigation items
				$("#nav-glyph").removeClass("opened"); // remove opened class on glyph
				$("#nav-items li.current-page-item ul.sub-menu").show(); // show current page item sub-menu
				$("#nav-items li.current-page-item > a").addClass("opened"); // open toggle icon on current page
				$("#nav-items li.current-page-parent ul.sub-menu").show(); // show current page parent sub-menu
				$("#nav-items li.current-page-parent > a").addClass("opened"); // open toggle icon on current page parent
				
				if ($("#nav-items li.main > a").unbind( "click", subToggle)) { // if sub-menu toggle trigger click has been previously unbound...
				
					$("#nav-items li.main > a").bind( "click", subToggle); // ... bind it again (once and only once) to trigger sub-menu toggle click
						
				}
									
			} else  { // else ...
			
				$("#nav-items").show(); // show the navigation items
				$("#nav-items li > ul.sub-menu").hide();// close sub-menu
				$("#nav-items li.main > a").unbind( "click", subToggle); // unbind sub-menu toggle trigger click
				
			}
			
		} // end trigger for width only
		
	}); // end window resize
		
}); // end window load
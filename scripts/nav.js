/*  
Theme Name: Students of Premium Design Works
Description: This is a theme your mom would finally respond to.
Version: 3
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
*/

$(window).load(function() { // when the window loads...
	
	var $ = jQuery;
	var loadWidth = $(window).width();
		
	$("#nav-title").click(function() { 
	
		$("#nav-items").slideToggle(); // toggle main menu
		
	});
			
	if ( $(window).width() < 801 ) { // if width is less than 801px...
			
		$("#nav-items > li.main > a").click(function() {
			
			$(this).next("#nav-items li > ul.sub-menu").slideToggle(); // toggle sub-menu
			return false; // disable href on main menu item for mobile devices
			
		});	
	
	} 
	
	$(window).resize(function() { // when the window is resized...
			
		if ( loadWidth != $(window).width() ) { // disable vertical resize
			
			if ($(window).width() < 801) { // if width is less than 801px...
			
				$('#nav-items').css('display' , 'none'); // hide the navigation items
				
			} else if ($(window).width() > 800) { // else if width is greater than 800px...
			
				$("#nav-items").css('display' , 'block'); // show the navigation items
				$("#nav-items > li.main > a").unbind('click'); // unbind disable href on-click
				$("#nav-items li > ul.sub-menu").css('display', 'none');// close sub-menu
				
			}
			
		} // end disable verticle resize
		
	}); // end window resize
		
}); // end window load
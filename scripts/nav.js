// JavaScript Document

$(document).ready(function() {
	
	var $ = jQuery;
		
	$("#nav-title").click(function() { 
	
		$("#nav-items").slideToggle(); // toggle main menu
		
	});
			
	if ($(window).width() < 801) {
			
		$("#nav-items > li.main > a").click(function() {
			
			$(this).next("#nav-items li > ul.sub-menu").slideToggle(); // toggle sub menu (of parent menu item only)
			return false; // disable anchor
			
		});	
	
	}
		
});
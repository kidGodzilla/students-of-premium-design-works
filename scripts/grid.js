/*  
Theme Name: Students of Premium Design Works
Description: This is a theme your mom would finally respond to.
Version: 3
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
*/
		

if (window.innerWidth < 981) { // if the window is less than 981px...

	document.getElementById("specification").innerHTML = window.innerWidth + "px"; // list window width in pixels
			
} 
		
window.onresize = function() { // if the widow gets resized...
	
		if (window.innerWidth < 981) { // and the the window is less than 981px...
	
			document.getElementById("specification").innerHTML = window.innerWidth + "px"; // list window width in pixels
		
		}
	
};
    
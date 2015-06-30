/*  
Theme Name: Students of Premium Design Works
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
*/	

window.onload = function() { // when the window loads...
 
	if (window.innerWidth < 980) { // if the window is less than 980px...
	
		document.getElementById("specification").innerHTML = window.innerWidth + "px"; // list window width in pixels
				
	} 

};
		
window.onresize = function() { // when the window is resized...
	
	if (window.innerWidth < 980) { // and the the window is less than 980px...
	
		document.getElementById("specification").innerHTML = window.innerWidth + "px"; // list window width in pixels
	
	} else {
		
		document.getElementById("specification").innerHTML = "980px"; // list window width as 980 pixels
		
	}
	
}; 
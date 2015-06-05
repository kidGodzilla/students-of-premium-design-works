// JavaScript Document

if (window.innerWidth < 980) {
		
			document.write('<div id="line"><span class="specification">' + window.innerWidth + 'px</span></div>');
		
		} else {
			
			document.write('<div id="line"><span class="specification">980px</span></div>');

		}
		
		document.write('<ul id="columns">');

		
			
		if (window.innerWidth < 600) {
			
			for (i = 1; i < 4; i++) {
				
				document.write('<li class="column">' + i +'</li>'); // create three columns
					
			}
				
		} 
		
		else if (window.innerWidth < 800) {
			
			for (i = 1; i < 5; i++) {
				
				document.write('<li class="column">' + i +'</li>'); // create four columns
				
			}
					
		} else {
			
			for (i = 1; i < 13; i++) {
				
				document.write('<li class="column">' + i +'</li>'); // create twelve columns
					
			}
			
		}
		
		document.write('</ul>');
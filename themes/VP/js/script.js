/**
 * Parallax Scrolling Tutorial
 * For NetTuts+
 *  
 * Author: Mohiuddin Parekh
 *	http://www.mohi.me
 * 	@mohiuddinparekh   
 */


$(document).ready(function(){
	// Cache the Window object
	$window = $(window);
	
           /*  $('#divstudentapp').css('display','block');
             $('#divstartupapp').css('display', 'none');
             $('#divstartupapp').parent('div').children('h3').children('a').children('span').children('img').attr('src', 'images/content-plus.png');
			 $('#divstudentapp').parent('div').children('h3').children('a').children('span').children('img').attr('src','images/content-minus.png');
			 $('#apply_opn').css('display','block');
			 $('#apply_opn').parent('div').children('h3').children('a').children('span').children('img').attr('src','images/content-minus.png');*/
			 
   $('div[data-type="background"]').each(function(){
     var $bgobj = $(this); // assigning the object
                    
      $(window).scroll(function() {
		// Scroll the background at var speed
		// the yPos is a negative value because we're scrolling it UP!								
		var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
		
		// Put together our final background position
		var coords = '50% '+ yPos + 'px';

		// Move the background
		$bgobj.css({ backgroundPosition: coords });
		
}); // window scroll Ends

 });	

}); 
/* 
 * Create HTML5 elements for IE's sake
 */

document.createElement("article");
document.createElement("div");
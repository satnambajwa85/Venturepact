// JavaScript Document
$(document).ready(function() {

        //attach some code to the scroll event of the window object
        //or whatever element(s) see http://docs.jquery.com/Selectors
        $(window).scroll(function () {
              var height = $('body').height();
              var scrollTop = $(document).scrollTop();
              var opacity = 0.2;
			  //alert($('.content_inner_dark').scrollTop());
			  if(scrollTop>749)
			  {
				  //$('#someDivId').hide();
					 $('.content_inner_dark').hide();
				  //$('#someDivId').animate({'margin-top':'-2000px'});
				  // $('.content_inner_dark').animate({'margin-top':'-2000px'});
				   //$('.content_inner_dark').css('position','absolute');
				  //$('.content_inner_dark').animate({'top':'-3000px',position:'absolute'});
/*				   	$('#someDivId').hide();
				  	$('.content_inner_dark').hide();*/
				  $('.serv_mid').css('min-height','628px');
				  if($('#someDivId').css('position')=='fixed')
				  {
				  $('#someDivId').css('position','relative');
				  $('#someDivId').css('top','750px');
				 // $("#someDivId").animate({top:"-500px"},"slow");
				  //alert('up');
				  }
			  }
			  
			  
			  if(scrollTop<=750)
			  {
				  $('#someDivId').show();
					 $('.content_inner_dark').show();
					$('.serv_mid').css('min-height','628px');
				  if($('#someDivId').css('position')=='relative')
				  {
					
					  $('#someDivId').attr('style','position:fixed;opacity:1;top:0');
					  
				  }
			  }
              // do some math here, by placing some condition or formula
              if(scrollTop < 80) {
				  
                  $('#fadeIn').css('opacity','0.0');
				  $('#fadeoutt').css('opacity','1');
              }
			  	else if(scrollTop>70 && scrollTop<170)
				{

					$('#fadeIn').css('opacity','0.2');
					$('#fadeoutt').css('opacity','0.8');
					
				}
				else if(scrollTop>70 && scrollTop<170)
				{

					$('#fadeIn').css('opacity','0.4');
					$('#fadeoutt').css('opacity','0.6');
					
				}
				else if(scrollTop>170 && scrollTop<270)
				{
					$('#fadeIn').css('opacity','0.6');
					$('#fadeoutt').css('opacity','0.4');
				
					
				}
				else if(scrollTop>270 && scrollTop<370)
				{
					$('#fadeIn').css('opacity','0.8');
					$('#fadeoutt').css('opacity','0.2');
					
				}
				else if(scrollTop>370 && scrollTop<570)
				{
					$('#fadeIn').css('opacity','1');
					$('#fadeoutt').css('opacity','0');
				}
				
				
		/*		else if(scrollTop>400 && scrollTop<430)
				{
					$('#someDivId').css('opacity','0.6');
				}
				else if(scrollTop>430 && scrollTop<470)
				{
					$('#someDivId').css('opacity','1');
				}*/
			
              //$('#someDivId').css('opacity', opacity);
        });
    }); 
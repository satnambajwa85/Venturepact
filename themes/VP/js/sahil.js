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
				  //$('.test').show();	
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
				  
                  
				  $('#fadeoutt').css('opacity','1');
				  $('#request_invite').hide();
				  $('#login_invite').show();
              }
			  	else if(scrollTop>70 && scrollTop<170)
				{

					
					$('#fadeoutt').css('opacity','0.8');
					$('#request_invite').hide();
				  $('#login_invite').show();
					
				}
				else if(scrollTop>70 && scrollTop<170)
				{

					
					$('#fadeoutt').css('opacity','0.6');
					$('#request_invite').hide();
				  $('#login_invite').show();
				}
				else if(scrollTop>170 && scrollTop<270)
				{
					
					$('#fadeoutt').css('opacity','0.4');
					$('#request_invite').hide();
				  $('#login_invite').show();
				}
				else if(scrollTop>270 && scrollTop<370)
				{
					
					$('#fadeoutt').css('opacity','0.3');
					$('#request_invite').hide();
				  $('#login_invite').show();
				}
				else if(scrollTop>370 && scrollTop<400)
				{
					
					$('#fadeoutt').css('opacity','0.2');
					$('#request_invite').hide();
				  $('#login_invite').show();
				}
				else if(scrollTop>400 && scrollTop<430)
				{
					
					$('#fadeoutt').css('opacity','0');
					$('#request_invite').hide();
				  $('#login_invite').show();
				}
				else if(scrollTop>430)
				{
					$('#login_invite').hide();
				  $('#request_invite').show();
					//$('#').addClass('request_icon_all').html('Request an invite');
				}
			
              //$('#someDivId').css('opacity', opacity);
        });
		//window.setTimeout(function () {$('#fadeIn').parent().fadeIn(2500).css('display','block');$('#fadeIn').css('opacity','1');},5000);
        	
    	});
(function($){$.confirm = function(params){
	if($('#confirmOverlay').length){return false;}
	var buttonHTML = '';
	$.each(params.buttons,function(name,obj){
		buttonHTML += '<a href="#" class="button '+obj['class']+'">'+name+'<span></span></a>';
		if(!obj.action){obj.action = function(){};}
	});
	var markup = ['<div id="confirmOverlay">','<div id="confirmBox">','<h1>',params.title,'</h1>','<p>',params.message,'</p>','<div id="confirmButtons">',buttonHTML,'</div></div></div>'].join('');
	$(markup).hide().appendTo('body').fadeIn();
	var buttons = $('#confirmBox .button'),i = 0;
	$.each(params.buttons,function(name,obj){buttons.eq(i++).click(function(){obj.action();$.confirm.hide();return false;});});}
	$.confirm.hide = function(){$('#confirmOverlay').fadeOut(function(){$(this).remove();});}
})(jQuery);

function validateField(){
	var errorList	=	0;
	$('#developer-form :input').each(function (){
	if($(this).hasClass('error')){
		if($(this).hasClass('required') && $(this).val().length==0){
			$(this).addClass('error');
			$(this).attr('title','Please enter required field');
			errorList	=	1;
		}else if($(this).hasClass('email') && !testEmail($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid email address');
			errorList	=	1;
		}else if($(this).hasClass('url') && !testURL($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid url (www.example.com)');
			errorList	=	1;
		}else if($(this).hasClass('phone') && !testPhone($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid phone number');
			errorList	=	1;
		}else if($(this).hasClass('date') && !testDate($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid date (YYYY-MM-DD)');
			errorList	=	1;
			console.log($(this));
        }else
			$(this).removeClass('error');
	}
	});
	return !errorList;
}

function validate(id){
	var errorList	=	0;
	$('#validateStatus').val(1);
	var $fieldId	=	'pp-step-'+id;
	
	$('#'+$fieldId+' :input.required').each(function (){
		if($(this).val().length==0){
			$(this).addClass('error');
			$(this).attr('title','Please enter required field');
			errorList	=	1;
		}else if($(this).hasClass('email') && !testEmail($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid email address');
			errorList	=	1;
		}else if($(this).hasClass('url') && !testURL($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid url (www.example.com)');
			errorList	=	1;
		}else if($(this).hasClass('phone') && !testPhone($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid phone number');
			errorList	=	1;
		}else
			$(this).removeClass('error');
	});
	$('#'+$fieldId+' :input.url').each(function (){
		if(!testURL($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid url (www.example.com)');
			errorList	=	1;
			console.log($(this));
        }else if($(this).hasClass('required') && $(this).val().length==0){
			$(this).addClass('error');
			$(this).attr('title','Please enter required field');
			errorList	=	1;
			console.log($(this));
		}else
			$(this).removeClass('error');
	});
	$('#'+$fieldId+' :input.date').each(function (){
		if(!testDate($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid date (YYYY-MM-DD)');
			errorList	=	1;
			console.log($(this));
        }else if($(this).hasClass('required') && $(this).val().length==0){
			$(this).addClass('error');
			$(this).attr('title','Please enter required field');
			errorList	=	1;
			console.log($(this));
		}else
			$(this).removeClass('error');
	});
	$('#'+$fieldId+' :input.to').each(function (){
		var dateFrom	=	$(this).parent().find('.from').val();
		var dateTo		=	$(this).val();
		
		if(!testDateRange(dateFrom,dateTo)){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid date (YYYY-MM-DD)');
			errorList	=	1;
			console.log($(this));
        }else if($(this).hasClass('required') && $(this).val().length==0){
			$(this).addClass('error');
			$(this).attr('title','Please enter required field');
			errorList	=	1;
			console.log($(this));
		}else
			$(this).removeClass('error');
	});
	if($fieldId == 'pp-step-5'){
		for(var i=0;i<2;i++){
			for(var j=0;j<2;j++){
				if(i!=j && $('#referenceEmail_'+i).val()==$('#referenceEmail_'+j).val()){
					$('#referenceEmail_'+j).addClass('error');
					$(this).attr('title','Please enter unique and required field');
					errorList	=	1;
					console.log($(this));
				}
			}
		}
	}
	return !errorList;
}
function validateFull(){
	var errorList	=	0;
	$('#validateStatus').val(1);
	var $fieldId	=	'developer-form';
	$('#'+$fieldId+' :input.required').each(function (){
		if($(this).val().length==0){
			$(this).addClass('error');
			$(this).attr('title','Please enter required field');
			errorList	=	1;
			console.log($(this));
		}else if($(this).hasClass('email') && !testEmail($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid email address');
			errorList	=	1;
			console.log($(this));
		}else if($(this).hasClass('url') && !testURL($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid url (www.example.com)');
			errorList	=	1;
			console.log($(this));
        }else if($(this).hasClass('phone') && !testPhone($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid phone number');
			errorList	=	1;
			console.log($(this));
		}else
			$(this).removeClass('error');
	});
	$('#'+$fieldId+' :input.url').each(function (){
		if(!testURL($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid url (www.example.com)');
			errorList	=	1;
			console.log($(this));
        }else if($(this).hasClass('required') && $(this).val().length==0){
			$(this).addClass('error');
			$(this).attr('title','Please enter required field');
			errorList	=	1;
			console.log($(this));
		}else
			$(this).removeClass('error');
	});
	$('#'+$fieldId+' :input.date').each(function (){
		if(!testDate($(this).val())){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid date (YYYY-MM-DD)');
			errorList	=	1;
			console.log($(this));
        }else if($(this).hasClass('required') && $(this).val().length==0){
			$(this).addClass('error');
			$(this).attr('title','Please enter required field');
			errorList	=	1;
			console.log($(this));
		}else
			$(this).removeClass('error');
	});
	$('#'+$fieldId+' :input.to').each(function (){
		var dateFrom	=	$(this).parent().find('.from').val();
		var dateTo		=	$(this).val();
		
		if(!testDateRange(dateFrom,dateTo)){
			$(this).addClass('error');
			$(this).attr('title','Please enter valid date (YYYY-MM-DD)');
			errorList	=	1;
			console.log($(this));
        }else if($(this).hasClass('required') && $(this).val().length==0){
			$(this).addClass('error');
			$(this).attr('title','Please enter required field');
			errorList	=	1;
			console.log($(this));
		}else
			$(this).removeClass('error');
	});
	for(var i=0;i<2;i++){
		for(var j=0;j<2;j++){
			if(i!=j && $('#referenceEmail_'+i).val()==$('#referenceEmail_'+j).val()){
				$('#referenceEmail_'+j).addClass('error');
				$(this).attr('title','Please enter unique and required field');
				errorList	=	1;
				console.log($(this));
			}
		}
	}
	return errorList;
}
function testPhone(value){
	var regexp = /^((\+)?[1-9]{1,2})?([-\s\.])?((\(\d{1,4}\))|\d{1,4})(([-\s\.])?[0-9]{1,12}){1,2}$/;
	var re = new RegExp(regexp);
	return re.test(value);
}

function testEmail(value){
	var regexp = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i;
	var re = new RegExp(regexp);
	return re.test(value);
}

function testURL(value){
    var regexp=/^((https?|s?ftp):\/\/)?(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;
        
	if(!$(this).hasClass('required')){	
		var re = new RegExp(regexp);
		if(value=='')
			return true;
		else
			return re.test(value);
	}else{
		var re = new RegExp(regexp);
		return re.test(value);
	}
}
function testDate(value){
    var regexp=/^(([1-9]{1}\d{3}))-(([0]?\d{1})|([1][0,1,2]{1}))-(([0-2]?\d{1})|([3][0,1]{1}))$/;
	if(!$(this).hasClass('required')){
		var re = new RegExp(regexp);
		if(value=='')
			return true;
		else
			return re.test(value);
	}else{
		var re = new RegExp(regexp);
		return re.test(value);
	}
}
function testDateRange(dateFrom,dateTo){
    if(dateFrom == '' && dateTo == '' )
        return true;
	Date.prototype.yyyymmdd = function() {
		var yyyy = this.getFullYear().toString();
		var mm = (this.getMonth()+1).toString();
		var dd  = this.getDate().toString();
		return yyyy + "-" + (mm[1]?mm:"0"+mm[0]) + "-" + (dd[1]?dd:"0"+dd[0]);
	};
	d	=	new Date();	
	cur	=	d.yyyymmdd();
	if(dateTo > dateFrom){
		if(dateTo <= cur){
			return true;
		}else
			return false;	
	}else
		return false;
}		
			
$(document).ready(function(){
	$('.item .delete').click(function(){
		
		CheckSteps();
		var $returnValidate	=	validateFull();
		if(($returnValidate ==1) || ($returnValidate== true) || ($returnValidate== 'true')){
			var elem = $(this).closest('.item');
			$.confirm({
				'title'		: 'Profile incomplete',
				'message'	: 'Some fields are either incomplete or left blank.<br /> Please return to the application and complete your profile.',
				'buttons'	: {
					'Return to application'	: {
						'class'	: 'gray',
						'action': function(){}
					}
				}
			});
		}else{
			var elem = $(this).closest('.item');
			$.confirm({
				'title'		: 'Confirm submission',
				'message'	: 'Are you sure that all the information on this application is accurate and honest? <br /> After you submit the application you will not be able to edit the information. <br/> Your profile will only be forwarded to your preferred startups once it has been verified by VenturePact.',
				'buttons'	: {
					'All good. Submit!'	: {
						'class'	: 'blue',
						'action': function(){$("#developer-form").submit();loadPopupBox1();}
					},
					'Return to application'	: {
						'class'	: 'gray',
						'action': function(){}
					}
				}
			});
		}
	});
});
//Login Form
//
function validate_login(flag){
	var errorList	=	0;
    var  id="login-form";
    if(flag === 1)
        id = "users-form";
    if(flag === 2)
		id="hire-form"
    $('#' + id + ' :input.required').each(function (){
        if($(this).val().length==0){
            $(this).addClass('error');
            errorList	=	1;
        }else if($(this).hasClass('email') && !testEmail($(this).val())){
            $(this).addClass('error');
            errorList	=	1;
        }else if($(this).hasClass('url') && !testURL($(this).val())){
            $(this).addClass('error');
            errorList	=	1;
        }else if($(this).hasClass('phone') && !testPhone($(this).val())){
            $(this).addClass('error');
            errorList	=	1;
        }else
             $(this).removeClass('error');
        });
    $('#'+id+' :input.url').each(function (){
		if(!testURL($(this).val())){
			$(this).addClass('error');
			errorList	=	1;
        }else if($(this).hasClass('required') && $(this).val().length==0){
			$(this).addClass('error');
			errorList	=	1;
		}else
			$(this).removeClass('error');
	});
	if(errorList)
        return true;
    else
		return false;
}

//
$(document).ready(function(){
	$('.btn_login , .btn_register,.hire_btn').click(function(){
		if($(this).hasClass("btn_register")){
			var flag=1;
        	var title ="Register Error";
        	var id = "users-form";
			$("#validate-users-form").val(1);
        }
		if($(this).hasClass("btn_login")){
            flag=0;
            title="Login Error";
            id = "login-form";
			$("#validate-login-form").val(1);
        }
		if($(this).hasClass("hire_btn")){
            flag=2;
            title="Hire Error";
            id = "hire-form";
        }
		if(validate_login(flag)){
			return false;
		}else{
         	if(flag==2){
				$('#'+id).submit();
			}else
		    	return true;
		}
	});
	$("#hire-form :input").change(function() {
		if(validate_login(2))
			return false;
		else
			return true;
		
	});
	$("#users-form :input").change(function() {
		if($("#validate-users-form").val()==1 && validate_login(1))
			return false;
		else
			return true;
		
	});
	$("#login-form :input").change(function() {
		if($("#validate-login-form").val()==1 && validate_login(0))
			return false;
		else
			return true;
		
	});
});
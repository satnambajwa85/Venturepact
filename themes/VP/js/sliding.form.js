$(function () {
    /*number of fieldsets*/
    var fieldsetCount = $('#developer-form').children().length;
    var current = 1;
    /*	sum and save the widths of each one of the fieldsets set the final sum as the total width of the steps element*/
    var stepsWidth = 0;
    var widths = new Array();
    $('#steps .step').each(function (i) {
        var $step = $(this);
        widths[i] = stepsWidth;
        stepsWidth += $step.width() + 30;
        /*var height	=	$step.height();
		$(this).attr('rel',height);*/
    });
    $('#steps').resize(function () {
        if ($(this).height() > 400) {
            $(this).css('height', 'auto');
        }
    });

    $('#steps').width(stepsWidth);
    /*to avoid problems in IE, focus the first input of the form*/
        $('#developer-form').children(':first').find(':input:not([type=hidden]):first').focus();
/*	show the navigation bar	*/
    $('#navigation').show();
    /*when clicking on a navigation link the form slides to the corresponding fieldset*/
    $('#navigation a').bind('click', function (e) {
        var $this = $(this);
        var prev = current;
        $this.closest('ul').find('li').removeClass('selected');
        var $activeClass = $this.parent().attr('class');
        $this.parent().addClass('selected');
        current = $this.parent().index() + 1;
        var $link = $('#navigation li:nth-child(' + parseInt(current) + ') a');
        var Validate = validate($(this).attr('rel'));
        if (Validate == 1 || Validate == true || Validate == 'true') {
            $('#steps').stop().animate({
                marginLeft: '-' + widths[current - 1] + 'px'
            }, 500, function () {
                //$link.parent().find('.error,.checked').remove();
                //$('<span class="checked"></span>').insertAfter($link);
                $('#developer-form').children(':nth-child(' + parseInt(current) + ')').find(':input:not([type=hidden]):first').focus();
                var chiHe = $('#steps').children(':nth-child(' + parseInt(current) + ')').attr('rel');
                $('#steps').height(parseInt(chiHe));
            });
        }
        e.preventDefault();
    });


$('#developer-form > fieldset').each(function () {
        var $fieldset = $(this);
        /*$fieldset.children(':last').find(':input').keydown(function(e){
			
			console.log("value ",$(this));
			if (e.which == 9){
				$('#navigation li:nth-child(' + (parseInt(current)+1) + ') a').click();
				//force the blur for validation 
				//$(this).blur();
				e.preventDefault();
			}
		});*/
        $fieldset.children().bind('keydown', function (event) {
            console.log("has class" + $(event.target).hasClass('next'));
            if ($(event.target).hasClass("next")) {
                if (event.which == 9) {
                    $('#navigation li:nth-child(' + (parseInt(current) + 1) + ') a').click();
                    //force the blur for validation 
                    $(this).blur();
                    event.preventDefault();
                }
            }
        });
    });

    $('.next').bind('click', function (e) {
        var $this = $(this);
        var $stepVal = $this.attr('rel');
        var prev = parseInt($stepVal);
        current = parseInt($stepVal) + 1;
        $('#navigation').find('ul').find('li').removeClass('selected');
        $('#navigation').find('ul').find('li.' + current).addClass('selected');
        var Validate = validate($(this).attr('rel'));
        var $link = $('#navigation li:nth-child(' + parseInt($stepVal) + ') a');
        if (Validate == 1 || Validate == true || Validate == 'true') {
            $('#steps').stop().animate({
                marginLeft: '-' + widths[current - 1] + 'px'
            }, 500, function () {
                $link.parent().find('.error,.checked').remove();
                $('<span class="checked"></span>').insertAfter($link);
                postForm();
                if (current == fieldsetCount)
                    validateSteps();
                else
                    validateStep(prev);
                $('#steps').children(':nth-child(' + parseInt(current) + ')').find(':input:first').focus();
                var chiHe = $('#steps').children(':nth-child(' + parseInt(current) + ')').attr('rel');
                $('#steps').height(parseInt(chiHe));
            });
        } else {
            current = current - 1;
            $('#navigation').find('ul').find('li').removeClass('selected');
            $('#navigation').find('ul').find('li.' + current).addClass('selected');
            $link.parent().find('.error,.checked').remove();
            $('<span class="error"></span>').insertAfter($link);
        }
        e.preventDefault();
    });

    /*	clicking on the tab (on the last input of each fieldset), makes the form slide to the next step*/
    $('#steps > fieldset').each(function () {
        var $fieldset = $(this);
        $fieldset.children(':last').find(':input').keydown(function (e) {
            if (e.which == 9) {
                $('#navigation li:nth-child(' + (parseInt(current) + 1) + ') a').click();
                $(this).blur();
                e.preventDefault();
            }
        });
    });

    /*	validates errors on all the fieldsets	records if the Form has errors in $('#steps').data()*/
    function validateSteps() {
        var FormErrors = false;
        for (var i = 1; i < fieldsetCount; ++i) {
            var error = validateStep(i);
            if (error == -1)
                FormErrors = true;
        }
        $('#steps').data('errors', FormErrors);
    }

    /*	validates one fieldset	and returns -1 if errors found, or 1 if not	*/
    function validateStep(step) {
        if (step == fieldsetCount) return;

        var error = 1;
        var hasError = false;
        $('#steps').children(':nth-child(' + parseInt(step) + ')').find(':input:not(button)').each(function () {
            var $this = $(this);
            var valueLength = jQuery.trim($this.val()).length;

            if (valueLength == '') {
                hasError = true;
                //$this.css('background-color','#FFEDEF');
            } else
                $this.css('background-color', '#FFFFFF');
        });
        var $link = $('#navigation li:nth-child(' + parseInt(step) + ') a');
        //$link.parent().find('.error,.checked').remove();

        var valclass = 'checked';
        if (hasError) {
            error = -1;
            valclass = 'error';
        }
        //$('<span class="'+valclass+'"></span>').insertAfter($link);

        return error;
    }
    /*if there are errors don't allow the user to submit*/
    $('#registerButton').bind('click', function () {
        if ($('#steps').data('errors')) {
            alert('Please correct the errors in the Form');
            return false;
        }
    });
});

function CheckSteps() {
    $('.dashpro_right_form').find('.next').each(function () {
        var $this = $(this);
        var $stepVal = $this.attr('rel');
        var Validate = validate($(this).attr('rel'));
        var $link = $('#navigation li:nth-child(' + parseInt($stepVal) + ') a');
        if (Validate == 1 || Validate == true || Validate == 'true') {
            $link.parent().find('.error,.checked').remove();
            $('<span class="checked"></span>').insertAfter($link);
        } else {
            $link.parent().find('.error,.checked').remove();
            $('<span class="error"></span>').insertAfter($link);
        }
    });
}
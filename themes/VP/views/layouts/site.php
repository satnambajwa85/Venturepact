<!DOCTYPE html>
<html><head>
<title>VenturePact</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:title" content="VenturePact" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://test.venturepact.com/" />
<meta property="og:image" content="http://test.venturepact.com/themes/VP/images/fb_big.jpg" />
<meta property="og:description" content="Get hired by your dream company, no matter where you are." />
<meta property="og:site_name" content="VenturePact" />    
<!--<meta property="og:image" content="<?php //echo Yii::app()->theme->baseUrl; ?>/images/fb_img.png" />
<link rel="image_src" href="<?php// echo Yii::app()->baseUrl; ?>/images/fb_img.png" />--> 
<link rel="icon" type="image/x-icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" /> 
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/responsive.css" rel="stylesheet" type="text/css">
<?php 
//Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.min.js',CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.smint.js',CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/script.js',CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/sahil.js',CClientScript::POS_END);
//Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery-ui-1.10.3.custom.js',CClientScript::POS_END);

Yii::app()->clientScript->registerScript('popup2','$(document).ready( function() {
	var offset = 220;
	var duration = 500;
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > offset) {
			jQuery(".back-to-top").fadeIn(duration);
		} else {
			jQuery(".back-to-top").fadeOut(duration);
		}
	});
	
	jQuery(".logo_link").click(function(event) {
		event.preventDefault();
		jQuery("html, body").animate({scrollTop: 0}, duration);
		return false;
	})
	$(".subMenu").smint({
		"scrollSpeed" : 1000
	});
}); ');
?>
</head>
<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">
<div id="main_outer">
    <?php echo $content; ?>

    <!-- Footer outer  -->
    <?php if(Yii::app()->controller->action->id=='login'){?>
    <div id="footer_outer" >
    <?php }else{?>
    <div id="footer_outer_1" > 
    <?php } ?>
        <div  id="footer_wrapper">
           <div class="ny_icon"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ny.png" alt="" /></div>  
          <div  id="icon_outer_main"> 
            
              <div class="footer_icon_outer_g"><a href="https://plus.google.com/105960621900752720957/posts" target="_blank" title="Google Plus"></a></div>
              <div class="footer_icon_outer_fb"><a href="https://www.facebook.com/VenturePact" target="_blank" title="Facebook"></a></div>
              <div class="footer_icon_outer_tw"><a href="https://twitter.com/VenturePact" target="_blank" title="Twitter"></a></div>
              <!-- <div class="footer_icon_outer_you"><a href="#" title="Youtube"></a></div>-->
            </div>
           
                <div class="footer_text">
                        <?php echo CHtml::link('About Us',array('/site/about'),array('class'=>'footer_text')); ?>
                        <?php //echo CHtml::link('FAQ',array('/site/faq'),array('class'=>'footer_text')); ?>
                      <?php //echo CHtml::link('Blog','http://venturepact.tumblr.com/',array('class'=>'footer_text','target'>'_blank')); ?>
                      <a href="http://venturepact.tumblr.com/" class="footer_text" target="_blank">Blog</a> 
                        <?php echo CHtml::link('Privacy &amp; Terms',array('/site/privacyTerms'),array('class'=>'footer_text')); ?>
                   
                    </div>
             <div class="copyright">&#169;Copyright VenturePact</div>
                  
             <div class="footer_logo logo_link"><a href="">
                <img  id="campaign-icon" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/footer_project.png" alt="" border="0" /></a></div>
      </div>
    </div>


<!-- Footer outer end -->
</div>

        <script type="text/javascript" defer>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35066643-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

        </script>
</body>
</html>
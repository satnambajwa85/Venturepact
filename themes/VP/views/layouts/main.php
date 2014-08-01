<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VenturePact</title>
<meta property="og:title" content="VenturePact" />
<meta property="og:type" content="article" /> 
<meta property="og:url" content="http://test.venturepact.com/" />
<meta property="og:image" content="http://test.venturepact.com/images/fb_img.png" />
<meta property="og:description" content="Get hired by your dream company, no matter where you are." />
<meta property="og:site_name" content="VenturePact" />   
<!--<meta property="og:image" content="<?php //echo Yii::app()->theme->baseUrl; ?>/images/thumnail_400.png" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />-->
<link rel="icon" type="image/x-icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" /> 
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main_style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/responsive.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src="<?php echo Yii::app()->theme->baseUrl.'/js/jquery.min.js';?>"></script>
</head>
<body>
	<div id="main_outer">
        <!-- Top outer -->
        <div id="top_outer">
            <div id="top_wrapper">
                <div class="banner">
                    <div class="logo_outer"><?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/vp-logo.png" alt="Vp_Logo" border="0" />',array('/site')); ?></div>
                    <div class="top_menu_outer top_menu_outer_logout">
                       <ul class="top_nav ">
						<?php if(!Yii::app()->user->isGuest){?>
                        <li><?php echo CHtml::link('Logout',array('/site/logout'),array('class'=>'button logout_icon')); ?></li>                        
                        <?php }?>
                       
                    </ul>                    
                    </div>
                </div>                
            </div>
        </div>
        <!-- Top outer end -->     
        <div id="typing" class="saved_outr"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/final_typing.gif" alt="" border="0" /></div>
        <div id="saving" class="saved_outr"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/sav.jpg" alt="" border="0" /></div>
        <!-- mid  form outer  --> 
        <div class="dashprofile_main_outer">
            <div class="dashprofile_main_inner">
                <div class="dashprofile_text">&nbsp;</div>
            </div>
        </div>
        <div class="color_strip_outer">
        	<div class="color_strip_inner"></div>
        </div> 


		<?php echo $content;?>
	<!--  Footer outer start --> 
<!-- Footer outer  -->
 <div id="footer_outer" >
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
                    <a href="http://venturepact.tumblr.com/" class="footer_text" target="_blank">Blog</a>
                    <?php //echo CHtml::link('Blog',array('http://venturepact.tumblr.com/'),array('class'=>'footer_text', 'target'=>"_blank", "escape"=>false )); ?>
                    <?php echo CHtml::link('Privacy &amp; Terms',array('/site/privacyTerms'),array('class'=>'footer_text')); ?>
                </div>
                
                
                <div class="footer_logo logo_link"><a href="#">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/footer_project.png" alt="" border="0" /></a>
                </div>
           
        </div>
        <!-- Footer outer end -->
        </div>
    </div>
<!-- begin olark code -->
<!--<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('6267-903-10-7196');/*]]>*/</script><noscript><a href="https://www.olark.com/site/6267-903-10-7196/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>-->
<!-- end olark code -->
    
    

</body>
</html>
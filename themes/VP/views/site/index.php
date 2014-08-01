<script type="text/javascript">
function mobilecheck() {
	console.log("runnning mobile check");
	var check = false;
	(function(a){
		if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))
	{
		window.location.href="http://m.venturepact.com";
	}
	})(navigator.userAgent||navigator.vendor||window.opera);
}
window.onload= mobilecheck();
</script>
<div class="wrap">
<?php if(Yii::app()->user->hasFlash('RecommendationsSuccess')):?>
<script type="text/javascript">$(document).ready( function() {
function loadPopMess(){$('.mess_popup').fadeIn("slow");$(".mess_popup_container").css({"z-index": "99"});}
function unloadPopMess(){$('.mess_popup').fadeOut("slow");$(".mess_popup_container").css({"z-index": "-1"});}
$('.popupBoxClose').click(function(){unloadPopMess();});
loadPopMess();});
</script>
<div class="mess_popup_container">
	<div class="mess_popup"> 
        <div class="area_set">  
			<div class="success_icon_outer" ><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/success_icon.png" alt="" /></div>
            <div class="success_text"><span>Thanks for your time!</span><br/>
                <?php echo Yii::app()->user->getFlash('RecommendationsSuccess'); ?>
            </div>            
		</div>
        <a class="popupBoxClose"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/profile_cancel.png" alt="" /></a>
	</div>
</div>
<?php endif; ?>
	<div class="test">
	  <div  class="subMenu">
       	<div class="top_header_outr" style=" margin:0 auto; width:998px; position:relative;">
	 		<div class="inner">
                <a href="#" id="sTop" class="subNavBtn"></a>
                <a href="#" id="s3" class="subNavBtn">The Pact</a>
                <a href="#" id="s9" class="subNavBtn">How it works</a>
              
            </div>
            <div class="logo logo_link">
                <a href="" ><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/footer_project_active.png" border="0" /></a>
            </div>
            <div class="nav_right">
            	<?php
				echo CHtml::link('Get Started ',array('/site/getStarted'),array('class'=>"button login_icon"));
				?>
            </div>
        </div>
	</div>
	</div>
	<div class="section sTop" data-speed="5" data-type="background">
		<div class="inner">
          <div class="mid_outer" id="fadeoutt">
            <div class="mid_text"> 
            	Building, improving or testing your software?<br/>
                Find the right software development partner.
              </div>

            <div class="text_bar">
                <span style="color: rgba(255, 255, 255, 0.7);">    
                    <!-- Work with the best engineering teams in Silicon Valley and New Yorkand earn US salaries.-->
                    
                    - Get pitches from pre-screened companies.<br> 
                    - See company reviews & portfolio upfront. <br> 
                    - Free of charge.
                </span>
                </div>
            <div class="request_button">
                <a href="<?php echo $this->createUrl('site/getStarted');?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/request_button.jpg" alt="" boarder="0" /></a>
            </div>
		  </div>	
		</div>       
		<br class="clear">        
	</div>
	<div class="section s1">
		<div class="inner">
			<div class="white_wrapper" >100+ companies have used VenturePact</div>
		</div>
	</div>
    
    <div class="section s13_1">
		<div class="inner">
       	  <div class="s13_1_main">
            	<div class="img_logo_top1"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/l_logo.png" alt="" /></div>
                <div class="img_logo_top2"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ff.png" alt="" /></div>
                <div class="img_logo_top3"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/seratis-logo.png" alt="" /></div>
                <div class="img_logo_top4"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/yalelogo2.png" alt="" /></div>
            
          </div>
        
        </div>
       

	</div>

	<div class="section s3">
		<div class="inner">
          <div class="mid_outer">
			<div class="mid_text_dark">The Pact</div>
            <div class="text_bar1">Get fully transparent pitches from top tier trusted software development companies.</div>
		
	</div>
		</div>
	</div>

	<div class="section s4">
		<div class="inner">
<div class="white_content_wrapper_main">
            	<div class="white_col_left">
                    <h1 class="title">Only the top tier firms</h1>
                    <div class="title_info">
                       Get pitched by the <strong>top tier</strong> development companies that fit your location, budget & technical preferences. We have <strong>pre-screened</strong> each company for experience and technical proficiency.
                    </div>
                </div>
                <div class="white_col_right">
                	<div class="icon_img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icon_flexi.png "></div>
                </div>
            </div>
		</div>

	</div>

	<div class="section s7">
		<div class="inner">
				<div class="grey_content_wrapper_main">
            	<div class="grey_col_left">
                	<div class="icon_img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icon_travel.png"></div>
                </div>
                <div class="grey_col_right">
                	<h1 class="title">Transparent proposals</h1>
                    <div class="title_info">
                       See <strong>quotes</strong>, <strong>client reviews</strong>, <strong>portfolios</strong> and <strong>talent profiles</strong> upfront in one place. Compare and make an informed decision without having to sift through hundreds of proposals and pitch decks.            
                    </div>
                </div>
            </div>
		</div>
	</div>    
    <div class="section s6">
		<div class="inner">
		  <div class="white_content_wrapper_main">
            	<div class="white_col_left">
                    <h1 class="title">Answer questions once</h1>
                    <div class="title_info">
                       No need to reach out to multiple providers individually and answer the same questions. Submit your requirements and preferences once and we keep everyone on the same page.
                    </div>
                </div>
                <div class="white_col_right">
                	<div class="icon_img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icon_time.png"></div>
                </div>
            </div>
		</div>
	</div>    
    <div class="section s8">
		<div class="inner">
		  <div class="grey_content_wrapper_main">
            	<div class="grey_col_right">
                    <h1 class="title">Security and Payments</h1>
                    <div class="title_info">
                       	We as well as our trusted software development companies sign <strong>NDAs</strong> to keep your sensitive information secure. You can make payments through any channel you are comfortable with.


                    </div>
                </div>
                <div class="grey_col_left">
                	<div class="icon_img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icon_guarantee1.png"></div>
                </div>
            </div>
		</div>

	</div>
    <div class="section s13_bg">
		<div class="inner">
			<div class="testimonial_index">
            	<span><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/col1.png" /></span>
                <p>VenturePact connected me to the perfect software partner for my startup's needs in less than 12 hours. Its been 7 months since and I haven't felt the need to hire in-house!
                </p>
                <span style="float:right;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/col2.png" /></span>
                <h3>Steve Murdoch,</h3>
                <h4>Founder</h4>
            </div>		
		</div>
	</div>
    
    
    <div id="s_arrow" class="section s9">
		<div class="inner">
			<div class="mid_text_dark_s10"> How the Pact works</div>
		</div>
        

	</div>
    
    <div class="section s9_1">
		<div class="inner">
			<div class="s9_1_white_content_wrapper_main">
                  <div class="s15_main_outer">
                    <div class="gray_box_small_s15">
                      <div class="wr_icon_outer padding"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/b_icon.png" /></div>
                      <div class="name_head">Short call</div>
                      <div class="plane_box_outer">
                        <div class="graytop_text_outer">Our software architects collect the project information over one short call.</div>
                        <div class="arrow_blue"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow_blue.png" /></div>
                      </div>
                    </div>
                    <div class="gray_box_small_s15">
                      <div class="wr_icon_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/b_icon1.png" /></div>
                      <div class="name_head">We filter</div>
                      <div class="plane_box_outer">
                        <div class="graytop_text_outer">We find 3 potential partners for your project and share details with them.</div>
                        <div class="arrow_blue"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow_blue.png" /></div>
                      </div>
                    </div>
                      
                      <div class="gray_box_small_s15">
                      <div class="wr_icon_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/b_icon2.png" /></div>
                      <div class="name_head">Companies pitch</div>
                      <div class="plane_box_outer">
                        <div class="graytop_text_outer">They share their customized proposals for your project and needs.</div>
                        <div class="arrow_blue"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow_blue.png" /></div>
                      </div>
                    </div>
                      
                    <div class="gray_box_small_s15 margin_free">
                      <div class="wr_icon_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/offer_icon.png" /></div>
                      <div class="name_head">Get started</div>
                      <div class="plane_box_outer">
                        <div class="graytop_text_outer">You decide who you want to work with and get the project started.</div>
                      </div>
                    </div>
                  </div>
                </div>
		
     
		
		</div>

	</div>
    
<div class="section s13">
		<div class="inner">
		
		<a class="btn-red" href="<?php echo $this->createUrl('site/getStarted');?>" ><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/request_button.jpg"></a>
      
		
		</div>

	</div>
    
    <div class="section s13_1">
		<div class="inner">
       	  <div class="s13_1_main">
            	<div class="img_logo1"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic11.png" alt="" /></div>
                <div class="img_logo2"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic12.png" alt="" /></div>
                <div class="img_logo3"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic13.png" alt="" /></div>
                <div class="img_logo3"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic14.png" alt="" /></div>
            
          </div>
        
        </div>
       

	</div>
    
    
    
    
</div>
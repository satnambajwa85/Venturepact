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

<?php 
Yii::app()->clientScript->registerScript('popup',' $(document).ready( function(){
	$(".popup").click(function(){ loadPopupBox();});
	$("#popupBoxClose").click( function() {unloadPopupBox();});
	$("#container").click( function() {});
	function unloadPopupBox(){$("#popup_box").fadeOut("slow");$(".popup_container").css({"z-index": "0"});}
	function loadPopupBox() {$("#popup_box").fadeIn("slow");$(".popup_container").css({"z-index": "99"});}
	});');
?>
<?php if(Yii::app()->user->hasFlash('success')):?>
<script type="text/javascript">
$(document).ready( function() {
	function loadPopMess() {$('.mess_popup').fadeIn("slow");$(".mess_popup_container").css({"z-index": "99"});}
	loadPopMess();
	$('.popupBoxClose').click( function(){$('.mess_popup').fadeOut();$(".mess_popup_container").css({"z-index":"-1",'position':'relative'});});
});
</script>
<div class="mess_popup_container">
	<div class="mess_popup"> 
        <div class="area_set">  
			<div class="success_icon_outer" ><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/success_icon.png" alt="" /></div>
            <div class="success_text"><span>Thanks!</span><br/>
                <?php echo Yii::app()->user->getFlash('success');?>
            </div>            
		</div>
        <a class="popupBoxClose"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/profile_cancel.png" alt="" /></a>
	</div>
</div>
<?php endif; ?>
<div class="wrap">

	<div class="test">
	  <div id="fadeIn" class="subMenu">
      	
       	<div class="comp_head_s">        	
	 		<div class="inner comp_pp">   
                <a href="#" id="comp_sTop" class="subNavBtn"></a>
                <a href="#" id="s3" class="subNavBtn_Companies">The Pact</a>
                <a href="#" id="s10" class="subNavBtn_Companies">The Community</a>
               
			</div>
            <!--<div class="inner2" style="width: auto;">
<?php //echo CHtml::link('For Engineers',array('/site'),array('class'=>"subNavBtn_right_companies"));?>
			</div>-->
            <div class="nav_right_comp">
            	
            	
                <?php echo CHtml::link('Hire!','javascript:void(0);',array('class'=>"button hire_icon popup",'id'=>''));?>
               <?php echo CHtml::link('For Developers',array('/site'),array('class'=>"subNavBtn_right_companies"));?>
                
            </div>
            
			<div class="logo logo_link">
                <a href="" ><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/footer_project_active.png" border="0" /></a>
            </div>
            
        </div>
				
	</div>
	</div>
	<div class="section comp_sTop" data-speed="5" data-type="background">
		

		
			
		<div class="inner">
          <div class="mid_outer" id="fadeoutt">
            <div class="company_mid_text">
               Expand the talent pool, <br> hire full time internationally!
            </div>
            <div class="company_text_bar">
                <span>
                	- Hire top pre-screened developers. <br>
                    - Bring them onsite or work remotely.<br>
                    - 2 week risk free trial.
                </span> 
            </div>
          <div class="hire_butn">
                <a href="javascript:void(0);" class="popup"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/hire_butt.jpg" alt="" boarder="0" /></a>
            </div>
		  </div>	
		</div>       
        
		<br class="clear">
        
        
        
        
	</div>



<div class="section s1">
		
		<div class="inner">
        
       

			<div class="white_wrapper" >Companies hiring on VenturePact</div>

		</div>

	</div>

	<div class="section s2">
		<div class="inner">

			<div class="comp_box_main">
            	<div class="comp_box">
                	<div class="c_logo_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/pic2.png" alt="" /></div>
                    <div class="c_name">Lawdingo </div> 
                    <div class="c_discr">Lawdingo brings lawyers online, via online consultations, services, payments.
</div>
                    <div class="c_option">Team : <span> Wharton, Yelp</span></div>
                    <div class="c_option">Investors : <span> YC, K. Hosanagar</span></div>
                    <div class="c_option">Salary : <span> $50K - $120K + Stock</span></div>
                    <div class="c_option">Hiring for : <span>Ruby on Rails</span></div>
                   
                    
                </div>
                
                <div class="comp_box">
                	<div class="c_logo_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/pic1.png" alt="" /></div>
                    <div class="c_name">Seratis </div> 
                    <div class="c_discr">Transparency platform enabling care coordination for healthcare providers.</div>
                    <div class="c_option">Team : <span>Harvard, UC Berkeley</span></div>
                    <div class="c_option">Investors : <span> DreamIt Ventures</span></div>
                    <div class="c_option">Salary : <span>$55K - $115K + Stock</span></div>
                    <div class="c_option">Hiring for : <span>iOS</span></div>
                   
                    
                </div>
                
                
                <div class="comp_box">
                	<div class="c_logo_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/pic3.png" alt="" /></div>
                    <div class="c_name">EquityZen </div> 
                    <div class="c_discr">EquityZen is a unique marketplace for private company shares.</div>
                    <div class="c_option">Team : <span> Wharton, Barclays</span></div>
                    <div class="c_option">Investors : <span>500 Startups</span></div>
                    <div class="c_option">Salary : <span> $45K - $95K + Stock</span></div>
                    <div class="c_option">Hiring for : <span>JS, Jquery, Django</span></div>
                   
                    
                </div>
            
            </div>

		</div>

	</div>


	<div class="section s3" data-speed="50" data-type="background">
		<div class="inner">
          <div class="mid_outer">
        
			<div class="mid_text_dark_s9">The Pact</div>
           <div class="mid_text_dark_s9_small">Hire pre-screened and full-time remote employees, risk free.</div>
		
	</div>
		</div>

	</div>

	<div class="section comp_s4">
		<div class="inner">
<div class="white_content_wrapper_main">
            	<div class="comp_white_col_left">
                	<div class="comp_talent_heading">Vetted Top Talent</div>
                    <h1 class="title">We short list</h1>
                    <div class="title_info">
                        We test for technical, communication and key remote work skills and invite the best candidates to join the marketplace. 
                        
                    </div>
                    <h1 class="title">You select</h1>
                    <div class="title_info">
                       You interview approved candidates and hire those that best fit your company full time.
                       
                    </div>
                </div>
                <div class="comp_white_col_right">
                	<div class="icon_img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/vetted_talent.png"></div>
                </div>
            </div>
		</div>

	</div>
    
    
    <div class="section comp_s5">
		<div class="inner">
			<div class="grey_content_wrapper_main">
            	<div class="comp_grey_col_left">
                	<div class="icon_img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/risk_free.png"></div>
                </div>
                <div class="comp_grey_col_right">
                	<div class="comp_risk_heading">Risk Free</div>
                	<h1 class="title">Trial period</h1>
                    <div class="title_info">
                       You get a 2 week trial after the initial hire to further test the developer. 
 
                    </div>
                    <h1 class="title">Time investment</h1>
                    <div class="title_info">
                        We have optimized the use of communication tools to improve coordination and limit the time investment of your tech lead. 
                    </div>
                </div>
            </div>       
		
		</div>

	</div>
    
    
    <div class="section comp_s6">
		<div class="inner">
		  <div class="white_content_wrapper_main">
            	<div class="comp_white_col_left">
                	<div class="comp_talent_heading">Culturally integrated</div>
                    <h1 class="title">Inclusive culture</h1>
                    <div class="title_info">
                        To help build a strong relationship with remote developers, the team leads can travel as required. 
                    </div
                    ><h1 class="title">Seamless communication</h1>
                    <div class="title_info">
                       We have optimized communication practices to ensure that your remote employees adopt and understand your culture. 
                    </div>
                </div>
                <div class="comp_white_col_right">
                	<div class="icon_img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/cultural.png"></div>
                </div>
            </div>
      
		
		</div>

	</div>
    
    
    <div class="section comp_s7">
		<div class="inner">
				<div class="grey_content_wrapper_main">
            	<div class="comp_grey_col_left">
                	<div class="icon_img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/optimized.png"></div>
                </div>
                <div class="comp_grey_col_right">
                	<div class="comp_risk_heading">Payments and legal</div>
                	<h1 class="title">Simple and secure</h1>
                    <div class="title_info">
                        We manage salary payments, benefits and international employment regulations.
                    </div>
                    
                    <h1 class="title">Pricing</h1>
                    <div class="title_info">
                      Only pay if you hire. We take a 1% fee of annual salary each month during the first two years. 
                    </div>
                </div>
            </div>
		
     
		</div>

	</div>

	
    
    
     <div class="section s10" data-speed="80" data-type="background">
		<div class="inner">
			<div class="mid_text_dark_s10"> The VenturePact Community</div>
            <div class="mid_text_dark_s10_small">Our engineers include top hackers and startup enthusiasts. </div>
		</div>

	</div>
  
    
    <div class="section s12">
		<div class="inner">
        	<!--<div class="s12_grey_text">Overview of our community</div>-->
			<div class="s12_gray_content_wrapper_main">
          		<div class="gray_box_small_outer">
                	
                        	<div class="image_name">71%</div>
                            <div class="white_box_outer">
                            	<div class="top_text_outer"><b>graduated</b> from <b> a top 10 university</b> in their country</div>
                                
                            </div>                
                </div>
                
                <div class="gray_box_small_outer">
                 <div class="image_name">40%</div>
                            <div class="white_box_outer">
                            	<div class="top_text_outer">did not study CS and <b>taught themselves programming</b></div>
                                
                            </div>                
                </div>
                
                <div class="gray_box_small_outer">
                	
                        	<div class="image_name">60%</div>
                            <div class="white_box_outer">
                            	<div class="top_text_outer"><b>contribute to open source projects</b> on a weekly basis</div>
                                
                            </div>                
                </div>
                
                 
          </div>
          
          <div class="s12_gray_content_wrapper_main">
          		<div class="gray_box_small_outer">
                	
                        	<div class="image_name1">33%</div>
                            <div class="white_box_outer">
                            	<div class="top_text_outer">have worked or are currently <b>working at a startup</b> </div>
                                
                            </div>                
                </div>
                
                <div class="gray_box_small_outer">
                 <div class="image_name1">45%</div>
                            <div class="white_box_outer">
                            	<div class="top_text_outer"> started programming in <b>high school or middle school</b></div>
                                
                            </div>                
                </div>
                
                <div class="gray_box_small_outer">
                	
                        	<div class="image_name1">11%</div>
                            <div class="white_box_outer">
                            	<div class="top_text_outer">have <b>authored or co-authored a book </b> on programming</div>
                                
                            </div>                
                </div>
                
                 
          </div>
		
		
		</div>

	</div>
    <div class="section s16">
		<div class="inner">
        	<div class="s15_gray_head">Some companies <br/> that embrace remote work  </div>
			<div class="s15_main_two">
                   		<div class="s15_img_main_outer wr_margin">
                        	<div class="s15_img_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic1.png" alt="" /></div>
                            <div class="s15_text">
                            	<div class="s15_head">Basho</div>
                                <div class="s15_small_text">Employees: 115</div>
                                <div class="s15_small_text">% Remote: >50%</div>
                               
                            </div>
                        </div>	
                        
                        <div class="s15_img_main_outer wr_margin">
                        	<div class="s15_img_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic2.png" alt="" /></div>
                            <div class="s15_text">
                            	<div class="s15_head">Github</div>
                                <div class="s15_small_text">Employees: 100</div>
                                <div class="s15_small_text">% Remote: >60%</div>
                                
                          </div>
                        </div>
                        
                        <div class="s15_img_main_outer wr_margin">
                        	<div class="s15_img_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic4.png" alt="" /></div>
                            <div class="s15_text">
                            	<div class="s15_head">StackOverflow</div>
                                <div class="s15_small_text">Employees: 70</div>
                                <div class="s15_small_text">% Remote: >50%</div>
                              
                            </div>
                        </div>
                        
                        <div class="s15_img_main_outer">
                        	<div class="s15_img_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic3.png" alt="" /></div>
                            <div class="s15_text">
                            	<div class="s15_head">Automattic</div>
                                <div class="s15_small_text">Employees: 160</div>
                                <div class="s15_small_text">% Remote: >90%</div>
                               
                            </div>
                        </div>
                        
          </div>
        
		
		</div>

	</div>
    <div class="section s13">
		<div class="inner hire_2">
		
		<a href="javascript:void(0);" class="popup"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/hire_butt.jpg" alt="" boarder="0" /></a>
      
		
		</div>

	</div>
    
      <div class="section comp_s13_1" >
		<div class="inner">
       	  <div class="s13_1_main">
            	<div class="img_logo1"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic11.png" alt="" /></div>
                <div class="img_logo2"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic12.png" alt="" /></div>
                <div class="img_logo3"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic13.png" alt="" /></div>
            
          </div>
        
        </div>
       

	</div>
    
    
</div>
<div class="popup_container">
<div id="popup_box"> 
	<div class="area_set">  
		
        <div class="popup_head">Hire on VenturePact!</div>
<?php $form=$this->beginWidget('CActiveForm', array('id'=>'hire-form')); ?>
	<div>
		<?php echo $form->textField($model,'name',array('placeholder'=>"Name",'class'=>"textarea required")); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
	<div>		
		<?php echo $form->textField($model,'company_name',array('placeholder'=>"Company Name",'class'=>"textarea")); ?>
		<?php echo $form->error($model,'company_name'); ?>
	</div>
	<div>		
		<?php echo $form->textField($model,'email',array('placeholder'=>"Email",'class'=>"textarea required email")); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
    <div>		
		<?php echo $form->textField($model,'phone',array('placeholder'=>"Phone",'class'=>"textarea")); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>
     <div>		
		<?php echo $form->textField($model,'your_stack',array('placeholder'=>"Your Stack",'class'=>"textarea")); ?>
		<?php echo $form->error($model,'your_stack'); ?>
	</div>
	<div>
		<?php echo $form->textField($model,'website',array('placeholder'=>"Website",'class'=>"textarea url")); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>
        
    <div>
<?php echo $form->textField($model,'angellist_link',array('placeholder'=>"AngelList Profile",'class'=>"textarea url")); ?>
<?php echo $form->error($model,'angellist_link'); ?>
	</div>

	<div>
		<?php echo $form->textField($model,'when_can_talk',array('placeholder'=>"When can we talk? e.g. Weekdays evening after 5 PM",'class'=>"textarea")); ?>
		<?php echo $form->error($model,'when_can_talk'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::button('Call me',array('class'=>'red_butt button hire_btn')); ?>
	</div>

<?php $this->endWidget(); ?>
	</div>
    <a id="popupBoxClose"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/profile_cancel.png" alt="" /></a>   

</div>
</div>

<div class="popup_container1">
<div id="popup_box1"> 
	<div class="area_set">  
		<div class="popup_head">Hire on VenturePact!</div>
	</div>
    <a id="popupBoxClose1"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/profile_cancel.png" alt="" /></a>   
</div>
</div>

<script type='text/javascript' src="<?php echo Yii::app()->theme->baseUrl.'/js/confirm.js';?>"></script>
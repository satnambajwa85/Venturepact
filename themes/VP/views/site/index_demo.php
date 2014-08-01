<div class="wrap">

	<div class="test">
	  <div id="fadeIn" class="subMenu">
      	
       	<div style=" margin:0 auto; width:998px; position:relative;">
        	
	 		<div class="inner">
                <a href="#" id="s3" class="subNavBtn">The Pact</a>
                <a href="#" id="s9" class="subNavBtn">How it works?</a>
                <a href="#" id="s10" class="subNavBtn">The Community</a>
                <!--<a href="#" id="s10" class="subNavBtn">| </a>-->
			</div>
            <!--<div class="inner2">
				<?php //echo CHtml::link('Opportunities',array('/user/jobs'),array('class'=>"subNavBtn_right"));?>
				<a href="#" class="subNavBtn_right">|</a>
				
			</div>-->
			<div class="logo">
                <a href="" ><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/footer_project_active.png" border="0" /></a>
            </div>
            <div class="nav_right">
            	
            	
            	<?php if(!Yii::app()->user->isGuest)
					 		echo CHtml::link('Login',array('/user'),array('class'=>"button login_icon"));
					 else
					 	echo CHtml::link('Login',array('/site/login'),array('class'=>"button login_icon",'id'=>'request_invite'));?>
               <?php echo CHtml::link('For Companies',array('/site/companies'),array('class'=>"subNavBtn_right"));?>
                
            </div>
        </div>
				
	</div>
	</div>
	<div class="section sTop" data-speed="5" data-type="background">
		<div class="inner">
          <div class="mid_outer" id="fadeoutt">
            <div class="mid_text"> 
            	Make a difference at your dream startup, <br/>
                no matter where you are (Hey There)
            </div>
            <div class="text_bar">
                <em style="color:#fff;">V</em>enture<em>Pact</em>  enables top developers to get discovered by exciting startups around the world for <br> <b>remote & full-time </b> employment.

            </div>
            <div class="request_button">
                <a href="<?php echo $this->createUrl('site/login');?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/request_button.jpg" alt="" boarder="0" /></a>
               <!-- <span class="down_arrow">
                	<a href="s_arrow" id="s_arrow" class="subNavBtn"><img src="<?php //echo Yii::app()->theme->baseUrl; ?>/images/down_arrow1.png" alt="" boarder="0" /></a>
            	</span>-->
            </div>
		  </div>	
		</div>       
        
		<br class="clear">
        
        
        
        
	</div>





	<div class="section s1">
		
		<div class="inner">
        
       

			<div class="white_wrapper" >Startups hiring on VenturePact</div>

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
                    <div class="c_option">Salary : <span> $40K - $60K + Stock</span></div>
                    <div class="c_option">Hiring for : <span>Ruby on Rails</span></div>
                   
                    
                </div>
                
                <div class="comp_box">
                	<div class="c_logo_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/pic1.png" alt="" /></div>
                    <div class="c_name">Seratis </div> 
                    <div class="c_discr">Transparency platform enabling care coordination for healthcare providers.</div>
                    <div class="c_option">Team : <span>Harvard, UC Berkeley</span></div>
                    <div class="c_option">Investors : <span> DreamIt Ventures</span></div>
                    <div class="c_option">Salary : <span>$40K - $60K + Stock</span></div>
                    <div class="c_option">Hiring for : <span>iOS</span></div>
                   
                    
                </div>
                
                
                <div class="comp_box">
                	<div class="c_logo_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/pic3.png" alt="" /></div>
                    <div class="c_name">EquityZen </div> 
                    <div class="c_discr">EquityZen is a unique marketplace for private company shares.</div>
                    <div class="c_option">Team : <span> Wharton, Barclays</span></div>
                    <div class="c_option">Investors : <span>500 Startups</span></div>
                    <div class="c_option">Salary : <span> $40K - $60K + Stock</span></div>
                    <div class="c_option">Hiring for : <span>JS, jQuery, Django</span></div>
                   
                    
                </div>
            
            </div>

		</div>

	</div>

	<div class="section s3">
		<div class="inner">
          <div class="mid_outer">
        
			<div class="mid_text_dark">The Pact</div>
            <div class="text_bar1">Join the Pact and change the world from the comfort of your home.</div>
		
	</div>
		</div>

	</div>

	<div class="section s4">
		<div class="inner">
<div class="white_content_wrapper_main">
            	<div class="white_col_left">
                    <h1 class="title">Full Time Job</h1>
                    <div class="title_info">
                        Work full time and earn highly competitive salaries. You enjoy similar benefits and growth prospects as anyone else working onsite.
                    </div>
                </div>
                <div class="white_col_right">
                	<div class="icon_img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icon_time.png"></div>
                </div>
            </div>
		</div>

	</div>

	<div class="section s7">
		<div class="inner">
				<div class="grey_content_wrapper_main">
            	<div class="grey_col_left">
                	<div class="icon_img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icon_flexi.png"></div>
                </div>
                <div class="grey_col_right">
                	<h1 class="title">Work Anywhere</h1>
                    <div class="title_info">
                        Work from the comfort of your home, at one of our partner co-working spaces or VenturePact's awesome officespaces near you.
                    </div>
                </div>
            </div>
		
     
		</div>

	</div>
    
    <div class="section s6">
		<div class="inner">
		  <div class="white_content_wrapper_main">
            	<div class="white_col_left">
                    <h1 class="title">Culturally Integrated</h1>
                    <div class="title_info">
                        Unlike in freelancing, you become an integral part of a startup's core team. You will travel often to visit the rest of the team.
                    </div>
                </div>
                <div class="white_col_right">
                	<div class="icon_img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icon_travel.png"></div>
                </div>
            </div>
      
		
		</div>

	</div>
    
    
    <div class="section s8">
		<div class="inner">
		  <div class="grey_content_wrapper_main">
            	<div class="grey_col_right">
                    <h1 class="title">Secure payments</h1>
                    <div class="title_info">
                       	VenturePact manages and guarantees monthly payments and benefits to all developers working full time with companies on the marketplace. 
                    </div>
                </div>
                <div class="grey_col_left">
                	<div class="icon_img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icon_guarantee1.png"></div>
                </div>
            </div>
		</div>

	</div>
    <a class="btn-red" href="<?php echo $this->createUrl('site/login');?>" ><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/request_button.jpg"></a>
    <div id="s_arrow" class="section s9">
		<div class="inner">
			<div class="mid_text_dark_s10"> How the Pact works?</div>
            <div class="mid_text_dark_s10_small">Its simple! Just one application for all of your preferred startups</div>
		</div>
        

	</div>
    
    <div class="section s9_1">
		<div class="inner">
			<div class="s9_1_white_content_wrapper_main">
                  <div class="s15_main_outer">
                    <div class="gray_box_small_s15">
                      <div class="wr_icon_outer padding"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/b_icon.png" /></div>
                      <div class="name_head">Request an invite</div>
                      <div class="plane_box_outer">
                        <div class="graytop_text_outer">It takes 10 minutes! Tell us about yourself and your preferred startups.</div>
                        <div class="arrow_blue"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow_blue.png" /></div>
                      </div>
                    </div>
                    <div class="gray_box_small_s15">
                      <div class="wr_icon_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/b_icon1.png" /></div>
                      <div class="name_head">Get invited</div>
                      <div class="plane_box_outer">
                        <div class="graytop_text_outer">After rigorous screening, we'll invite those who would fit the startup and remote work environment.</div>
                        <div class="arrow_blue"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow_blue.png" /></div>
                      </div>
                    </div>
                    <div class="gray_box_small_s15">
                      <div class="wr_icon_outer"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/b_icon2.png" /></div>
                      <div class="name_head">Meet your company</div>
                      <div class="plane_box_outer">
                        <div class="graytop_text_outer">You meet with your preferred startups for a final screening. If all goes well, you can start right away! </div>
                      </div>
                    </div>
                  </div>
                </div>
		
     
		
		</div>

	</div>
    
    <div class="section s10">
		<div class="inner">
			<div class="mid_text_dark_s10">The VenturePact Community</div>
            <div class="mid_text_dark_s10_small">Our engineers include  top hackers and startup enthusiasts. </div>
		</div>

	</div>
   
    <div class="section s12">
		<div class="inner">
        	<div class="s12_grey_text">Overview of our community</div>
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
                            	<div class="top_text_outer">studied subjects other than Computer Science and <b>taught themselves programming</b></div>
                                
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
                            	<div class="top_text_outer">have <b>worked at startups</b> before</div>
                                
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
        	<div class="s15_gray_head">Some startups <br/> that embrace remote work  </div>
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
		<div class="inner">
		
		<a class="btn-red" href="<?php echo $this->createUrl('site/login');?>" ><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/request_button.jpg"></a>
      
		
		</div>

	</div>
    
    <div class="section s13_1">
		<div class="inner">
       	  <div class="s13_1_main">
            	<div class="img_logo1"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic11.png" alt="" /></div>
                <div class="img_logo2"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic12.png" alt="" /></div>
                <div class="img_logo3"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ic13.png" alt="" /></div>
            
          </div>
        
        </div>
       

	</div>
    
    
</div>
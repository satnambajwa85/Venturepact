<script type='text/javascript' src="<?php echo Yii::app()->theme->baseUrl.'/js/jquery-ui-1.10.3.custom.js';?>"></script> 
<script>
$(".description").hide();
function show(el){
    if($(el).hasClass('arrowUp'))
       $(el).removeClass('arrowUp');
    else
        $(el).addClass('arrowUp')
        
    $(el).next().slideToggle('slow');}
</script>
<style type="text/css">
    .dashpro_left{
        position:fixed;
    }
</style>
<div class="popup_container1">
	<div id="popup_box1"> 

        <div class="area_set">  
           <div class="popup_head1">&nbsp;Please submit your profile</div> 
            <div class="eg_text1">To apply for this position, you first need to submit your profile.</div>
		</div>
        <a id="popupBoxClose"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/profile_cancel.png" alt="" /></a>
	</div>
</div>
<!-- content outer  -->
<div class="dashprofile_content">
    <div class="dashprofile_content_inner">
        <div class="dashprofile_content_inner_main">
            <!-- dashpro left start-->
            <div class="dashpro_left">
                <div class="dashpro_left_box ">
                    <div class="dashpro_left_box_main">
                        <div class="dashpro_img">
                            <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/a2.png" alt="edit profile" border="0" />',array('/user')); ?>                            
                        </div>
                        <div class="dashpro_title">Profile</div>
                    </div>
                    <div class="dashpro_edit">
                    <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/icon_dashprofile-edit.png" alt="edit profile" border="0" />',array('/user/changePassword')); ?>
                    </div>
                </div>
                <div class="dashpro_left_box active">
                    <div class="dashpro_left_box_main ">
                        <div class="dashpro_img">
                            <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/dashboard_jobs.png" alt="jobs" border="0" />',array('/user/jobs')); ?>
                        </div>
                        <div class="dashpro_title">Browse jobs</div>
                    </div>
                </div>
                 <div class="dashpro_left_box">
                    <div class="dashpro_left_box_main">
                        <div class="dashpro_img">
                            <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/a3.png" alt="jobs" border="0" />',array('/user/status')); ?>
                        </div>
                        <div class="dashpro_title">Track status</div>
                    </div>
                </div>
            </div>
<!-- dashpro left end -->

<!-- dashpro right start -->
<div class="dashjobs_right">
    
<div class="jobs_box">
    <div class="jobs_box_inner">
        
        <div class="jobs_box_inner_main">
            
            <div id="accordion">
            	
                <?php $cCount=0;
				if(count($company)>0){
				foreach($company as $company_detail){
				$cCount++;?> 
                
                <div class="head" onclick='show(this)'>
    	<div class="company_img">
         <img src="<?php echo Yii::app()->baseUrl; ?>/images/<?php echo $company_detail->logo;?>" alt="">
        </div>
        <div class="company_info">
<div class="company_title"><?php echo $company_detail->name;?></div>
<div class="company_detail"><?php echo $company_detail->description;?></div>
<div class="company_skills"><?php
						$count	=	1;
						foreach($company_detail->companyHasKeywords as $keyword) {
							if($count<6)
								echo  $keyword->keywords->name.'&nbsp; &nbsp';
							else
								break;	
							$count++;
						}?></div>
                       
</div>

        
    </div>
                <div class="data_box" style='display:none'>
    		   <div class="jobs_row_section2">
                   
                            <div class="jobs_btn">
                              <?php if(!empty($profile->status) && $profile->status > 0){?>
                            
<a href="javascript:void(0);" class="mr10 <?php if(!empty($profile->companyHasDevelopers) && count($profile->companyHasDevelopers)==0){
												echo 'jobs_blue_btn';
											}else{
												$satClass	=	0;
                                                foreach($profile->companyHasDevelopers as $compId){
                                                    if($compId->company_id==$company_detail->id && $compId->developer_id==Yii::app()->user->developerId){
                                                       $satClass	=	1;
													   break;
													}
                                                    else{
                                                        $satClass	=	0;
													}
                                                }
												echo ($satClass)?'jobs_grey_btn':'jobs_blue_btn';												
											}?>" onclick="interests(this.rel,this.id);" id="interested-<?php echo $cCount;?>" rel="<?php echo  $this->createUrl("user/interested",array('company_id'=>$company_detail->id,'status'=>'1' )); ?>">Apply</a>
                                            
                                            
<a href="javascript:void(0);" class="mr10 <?php if(!empty($profile->companyHasDevelopers) && count($profile->companyHasDevelopers)==0){
												echo 'jobs_grey_btn';
											}else{
												$satClass	=	0;
                                                foreach($profile->companyHasDevelopers as $compId){
                                                    if($compId->company_id==$company_detail->id && $compId->developer_id==Yii::app()->user->developerId){
                                                       $satClass	=	1;
													   break;
													}
                                                    else{
                                                        $satClass	=	0;
													}
                                                }
												echo ($satClass)?'jobs_blue_btn':' jobs_grey_btn';
												
							}?>" onclick="interests(this.rel,this.id);" id="not-interested-<?php echo $cCount;?>" rel="<?php echo  $this->createUrl("user/interested",array('company_id'=>$company_detail->id,'status'=>'0' )); ?>">Archive</a>
                            
                            <?php }else{ ?>
                              
                                
<a href="javascript:void(0);" class="mr10 jobs_blue_btn popup" id="interested-<?php echo $cCount;?>" rel="<?php echo  $this->createUrl("user/interested",array('company_id'=>$company_detail->id,'status'=>'1' )); ?>">Apply</a>
                                            
                                            
<a href="javascript:void(0);" class="jobs_blue_btn popup"  id="not-interested-<?php echo $cCount;?>" rel="<?php echo  $this->createUrl("user/interested",array('company_id'=>$company_detail->id,'status'=>'0' )); ?>">Archive</a>
                            <?php } ?>
                                
                            <a class="c_link" href="<?php echo $company_detail->turnover;?>" target="_black"><?php echo $company_detail->turnover;?></a>
                            </div>
                   
                   <?php if(count($company_detail->companyHasJobs)>0){?>
                            <div class="jobs_row_section2_inner">
                                <div class="jobs_row_section2_inner_left">
                                    <div class="jobs_row_section2_title_blue">Jobs</div>
                                </div>
                                <div class="jobs_row_section2_inner_right">
                        
								    <?php foreach($company_detail->companyHasJobs as $jobs)
									{
									
									?>
									<div class="jobs_row_section2_inner_right_main">
                                        <div class="job_profile"><?php echo $jobs->jobs->name;?></div>
                                        <div class="job_salary">$<?php echo $jobs->jobs->salary_start.''.$jobs->jobs->unit;?> - $<?php echo $jobs->jobs->salary_end.''.$jobs->jobs->unit;?>  &nbsp; <?php echo $jobs->jobs->share_start;?> - <?php echo $jobs->jobs->share_end;?> %</div>
                                        <div class="job_info">
                                       	<?php echo $jobs->jobs->description;?>
									    </div>
                                        </div>
                                     <?php }?>
                                    </div>
                                </div>
                   <?php } ?>         
                   <?php if(count($company_detail->teams)>0){?>
                            <div class="jobs_row_section2_inner">
                                <div class="jobs_row_section2_inner_left">
                                    <div class="jobs_row_section2_title">Team</div>
                                </div>
                                <div class="jobs_row_section2_inner_right">
                                  <?php foreach($company_detail->teams as $team)
								  {?>
								  
									<div class="jobs_row_section2_inner_right_main">
                                        <?php if(!empty($team->image)){?>
                                        <div class="jobs_row_section2_inner_right1">
                                            <img class="dashjobs_img" src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/<?php echo $team->image;?>"/>
                                        </div>
                                        <?php  } ?>
                                        <div class="jobs_row_section2_inner_right2">
                                            <div class="jobs_row_section2_inner_right2_title">
                                                <?php echo $team->name;?> - <span class="founder_text"><?php echo $team->role;?></span>
                                            </div>
                                            <div class="jobs_row_section2_info">
                                              <?php echo $team->description;?>
                                            </div>
                                        </div>
                                    </div>
								<?php }?>
                                </div>
                            </div>
                            <?php } ?>
                   
                   
                   
                            <?php if(count($company_detail->products)>0){
                            foreach($company_detail->products as $product){
                   
                   ?>
                            <div class="jobs_row_section2_inner">
                                <div class="jobs_row_section2_inner_left">
                                    <div class="jobs_row_section2_title"><?php echo isset($product->name)?$product->name:'';?></div>
                                </div>
                               
                                <div class="jobs_row_section2_inner_right">
                                    <div class="jobs_row_section2_info">
                                        
                                        <?php if(isset($product->description)){
                       echo $product->description;
                       /*
                       $middle = 10;
                       $leng = strlen(strip_tags($product->description));
                       echo substr(strip_tags($product->description), 0, $middle);?>
                       <?php echo ($leng > $middle)?'<span class="readmore">Read More...</span><div class="description">'.substr(strip_tags($product->description), $middle).'</div>':'';
                       */
                                        }?>
                                    </div>
                                    <?php if(!empty($product->logo)){?>
                                    <div class="jobs_row_section2_img">
                                        <img class="dashjobs_img" src="<?php echo Yii::app()->baseUrl.'/images/'.$product->logo;?>"/>
                                    </div>
                                    <?php  } ?>
                                </div>
                            </div>
                   <?php } } ?>
                   
                            
                            </div>
    </div>
	<?php }
				}else{?>
					<div class="no_record">No Recode found </div>
				<?php }?>
             </div>
		  </div>
         
        </div>
    </div>
</div>
</div>
<!-- dashpro right end -->
</div> 
</div>
<!-- content outer end -->
<script type="text/javascript">
function interests(Url,contid){
	contid=contid.substring(contid.lastIndexOf("-"));
	$.ajax({
		type:'POST',
		url:Url, 
		success:function(response){
			if(response==1){
				$('#interested'+contid).removeClass("jobs_blue_btn");
				$("#interested"+contid).attr("onClick",' ');
				$("#interested"+contid).addClass("jobs_grey_btn");
				$("#interested"+contid).addClass("jobs_grey_btn");
				$("#not-interested"+contid).attr("onClick","interests(this.rel,this.id)");
				$("#not-interested"+contid).removeClass("jobs_grey_btn");
				$("#not-interested"+contid).addClass("jobs_blue_btn");
				$('.popup_head1').html(' Please submit your profile');
				$('.eg_text1').html('To apply for this position, you first need to submit your profile.');
			}
			else if(response==5){
				$('.popup_head1').html('Sorry!');
				$('.eg_text1').html('You have reached your limit of 5 preferred companies.');
				$('#popup_box1').fadeIn("slow");
				$(".popup_container1").css({"z-index": "9999999","position": "fixed" });
			}else{
				$("#not-interested"+contid).removeClass("jobs_blue_btn");
				$("#not-interested"+contid).addClass("jobs_grey_btn");
				$("#not-interested"+contid).attr("onClick",' ');
				$("#interested"+contid).removeClass("jobs_grey_btn");
				$("#interested"+contid).addClass("jobs_blue_btn");
				$("#interested"+contid).attr("onClick","interests(this.rel,this.id)");
				$('.popup_head1').html(' Please submit your profile');
				$('.eg_text1').html('To apply for this position, you first need to submit your profile.');
			}
		}
	});
}
</script>

<script type="text/javascript">
 $(document).ready( function() {
   
     $('.popup').click(function(){ loadPopupBox();});
     $('#popupBoxClose').click( function() {           
        unloadPopupBox(); 
     });
     function unloadPopupBox() {
        $('#popup_box1').fadeOut("slow");
        $(".popup_container1").css({"z-index": "-1","position": "relative"});
     }
     function loadPopupBox() {
        $('#popup_box1').fadeIn("slow");
        $(".popup_container1").css({"z-index": "9999999","position": "fixed" });
     }
});</script>

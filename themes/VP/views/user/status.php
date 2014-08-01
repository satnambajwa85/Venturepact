<style type="text/css">
    .dashpro_left{
        position:fixed;
    }
</style>
<div class="dashprofile_content">
                <div class="dashprofile_content_inner">
                    <div class="dashprofile_content_inner_main">
                    	<!-- dashpro left start-->
                        <div class="dashpro_left_status">
                <div class="dashpro_left_box border_b">
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
                <div class="dashpro_left_box ">
                    <div class="dashpro_left_box_main  ">
                        <div class="dashpro_img">
                            <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/a1.png" alt="jobs" border="0" />',array('/user/jobs')); ?>
                        </div>
                        <div class="dashpro_title">Browse jobs</div>
                    </div>
                </div>
                 <div class="dashpro_left_box active">
                    <div class="dashpro_left_box_main">
                        <div class="dashpro_img">
                            <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/dashboard_status.png" alt="jobs" border="0" />',array('/user/status')); ?>
                        </div>
                        <div class="dashpro_title">Track status</div>
                    </div>
                </div>
            </div>
                        <!-- dashpro left end -->
                        
                        <!-- dashpro right start -->
                        <div class="dashpro_right">
                        	<div class="dashpro_right_text">
                                <div class="dashpro_info <?php echo ($profile->status==2)?'green_text':'';?>"><?php echo ($profile->status==2)?'Invitation Extended':'Awaiting Invite';?></div>
                                <div class="border_bottom"></div>
                            </div>
                            <!-- dashpro right-form start -->
                            <div class="dashpro_right_status  <?php echo ($profile->status==1)?'status_outrrr_main':'';?>">
                                <div class="status_outrrr">
                                    <?php echo ($profile->status==0)?'<div class="awaiting_opacity">Awaiting Invite</div>':'';?>
                                	<div class="status_inner">
                                    	<div class="status_table">
                                        	<b>Company Name</b>
                                            <b class="table_width">In Review</b>
                                            <b class="table_width">Interview Requested</b>
                                            <b class="table_width">Offered Position</b>
                                        </div>
                                    <?php 
										foreach($companyHasDeveloper as $company)
										{
										?>
                                        <div class="status_table">
                                        	<p class="table_width_first"><?php echo $company->company->name;?></p>
                                          <p class="table_width"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/<?php echo ($company->status_id==2)?'grren_radio.png':'grey_radio.png'; ?>" /></p>
                                          <p class="table_width"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/<?php echo ($company->status_id==3)?'grren_radio.png':'grey_radio.png'; ?>" /></p>
                                          <p class="table_width"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/<?php echo ($company->status_id==4)?'grren_radio.png':'grey_radio.png'; ?>" /></p>
                                           
										   
                                        </div>
										<?php }?>
                                    </div>
                                </div>
                            </div>
                    	</div>
                            <!-- dashpro right-form end -->
                	</div>
                        <!-- dashpro right end -->
                </div> 
            </div>

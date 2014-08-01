<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/logo.png" class="span2" />',array('/admin/users'),array('class'=>"brand" )); ?>
         
          
          <div class="nav-collapse">
			<?php 
			if(!empty(Yii::app()->user->role)){
				$menuList	=	array(
					    array('label'=>'User Mgmt', 'url'=>array('/admin/users/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
			     		array('label'=>'Developer<span class="caret"></span>', 'url'=>'#','visible'=>(Yii::app()->user->role=='admin')?'1':'0','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'Manage Developers', 'url'=>array('/admin/developer/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
							 array('label'=>'Previous Expirence', 'url'=>array('/admin/DeveloperHasPreviousCompany/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
							array('label'=>'Recommendations', 'url'=>array('/admin/recommendations/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
							array('label'=>'OpenSource', 'url'=>array('/admin/developerhasopensource/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
							array('label'=>'References', 'url'=>array('/admin/references/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
							array('label'=>'Account', 'url'=>array('/admin/accounts/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
					 
                        )),
                    array('label'=>'Company<span class="caret"></span>', 'url'=>'#','visible'=>(Yii::app()->user->role=='admin')?'1':'0','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                    array('label'=>'Manage Company', 'url'=>array('/admin/company/admin/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
					array('label'=>'Post Job', 'url'=>array('/admin/companyhasjobs')),
					array('label'=>'Team', 'url'=>array('/admin/team/admin')),
					array('label'=>'Product', 'url'=>array('/admin/product/admin')),
					array('label'=>'Investor', 'url'=>array('/admin/investor/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
					array('label'=>'Keywords', 'url'=>array('/admin/companyhaskeywords/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
					array('label'=>'Applicant Status', 'url'=>array('/admin/companyhasdeveloper/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
					array('label'=>'Company Worked', 'url'=>array('/admin/previouscompany/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
					
					        array('label'=>'Day Slot', 'url'=>array('/admin/dayslot/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
							array('label'=>'Time Slot', 'url'=>array('/admin/timeslot/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
					array('label'=>'Status', 'url'=>array('/admin/status/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
							                       )),
			 array('label'=>'Location<span class="caret"></span>', 'url'=>'#','visible'=>(Yii::app()->user->role=='admin')?'1':'0','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                    array('label'=>'Manage Schools', 'url'=>array('/admin/schools/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
					array('label'=>'Manage Country', 'url'=>array('/admin/country/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
					        array('label'=>'Manage State', 'url'=>array('/admin/state/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
							array('label'=>'Manage Timezone', 'url'=>array('/admin/timezone/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
					
							                       )),
			            array('label'=>'Filters <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'Cateogry', 'url'=>array('/admin/category/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
							array('label'=>'Job Mode', 'url'=>array('/admin/jobmode/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
							array('label'=>'Job', 'url'=>array('/admin/jobs/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
							array('label'=>'Keyword', 'url'=>array('/admin/keywords/admin', 'visible'=>(Yii::app()->user->role=='admin')?'1':'0')),
				        )),
					  /*array('label'=>'Gii generated', 'url'=>array('customer/index')),*/
                        array('label'=>'Skills <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'Skill Cateogry', 'url'=>array('/admin/skillcategory/admin')),
							array('label'=>'Skills', 'url'=>array('/admin/skills/admin')),
							array('label'=>'Framework', 'url'=>array('/admin/frameworks/admin')),
							array('label'=>'OpenSource', 'url'=>array('/admin/opensource/admin')),
				        )),
         	 array('label'=>'Qualification <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'School', 'url'=>array('/admin/schools/admin')),
							array('label'=>'Degree', 'url'=>array('/admin/degree/admin')),
							array('label'=>'Subject', 'url'=>array('/admin/subject/admin')),
							array('label'=>'Project', 'url'=>array('/admin/projects/admin')),
							
				        )),
			array('label'=>'Other <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'Language', 'url'=>array('/admin/language/admin')),
							array('label'=>'Questions', 'url'=>array('/admin/questions/admin')),
							array('label'=>'Settings', 'url'=>array('/admin/setting/admin')),
							 
				        )),         
		                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
         
		                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    );
			}
			else{
				$menuList = array();
			}
			
			
			
			$this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>$menuList,
                )); ?>
    	</div>
    </div>
	</div>
</div>

<!--<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
        
        	<div class="style-switcher pull-left">
                <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
          	</div>
           <form class="navbar-search pull-right" action="">
           	 
           <input type="text" class="search-query span2" placeholder="Search">
           
           </form>
    	</div>
    </div>
</div>--><!-- subnav -->
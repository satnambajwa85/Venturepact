<style>	
.grey{
	background-color:#999;
}
.mail_set{
	padding:30px 30px 50px 30px;
	width:635px;
	background:#ccc;
	border:1px solid #ebebeb;
	font-size:24px;
	font-weight:normal;
	color:#000;
	font-family: 'MyriadProRegular';
	margin-top:45px; 
}
.mail_logo{
	background:#ccc;	
}
.mail_logo img{
	width:100px;
	height:42px;
}
.mail_set span{
	color:#656565;
	font-style:italic;
}
</style>
<div class="grey">
    <table cellpadding="0" cellspacing="0" border="0" class="mail_set" style="background:#dfdfdf; color:#333; padding:8px;">
	<tr>
        <td >
			<a href="#" class="mail_logo" style="margin-bottom:10px;">
			<img src="<?php echo "http://".Yii::app()->request->getServerName().Yii::app()->theme->baseUrl; ?>/images/vp-logo.png"/>
			</a>
		</td>	
	</tr>
	<tr style="background-color:#fff;">
		<td  style="padding:10px">
			Dear <?php echo $name; ?>,<br /><br />
		</td>	
	</tr>
	<tr style="background-color:#fff;">
		<td  style="padding:10px">
			Thanks for registering with VenturePact. We are excited to review your application. <br /><br />
            To complete your account registration please click the link below to confirm your email address.<br />
		</td>	
	</tr>
	<tr style="background-color:#fff;">
		<td  style="padding:10px">
			<a href="<?php echo Yii::app()->createAbsoluteUrl('site/activation', array('link' => $link,'log'=>$password));?>" style="background: none repeat scroll 0 0 #48a53d;color: #FFFFFF;font-size: 18px; padding: 10px 15px;text-decoration: none;transition: all 600ms ease-in-out 0s; font-weight:bold; font-family:Arial, Helvetica, sans-serif; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;">
                Verify Email Address
            </a>
		</td>	
	</tr>
	<tr style="background-color:#fff;">
		<td  style="padding:10px">
            All the best! <br />
VenturePact Team
		</td>	
	</tr>
</table>
</div>                            
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
			Hey <?php echo $name; ?>,<br /><br />
		</td>	
	</tr>
	<tr style="background-color:#fff;">
		<td  style="padding:10px">
            Thank you for requesting an invitation to the VenturePact marketplace. We will review your application and you can monitor your progress on your profile page under the "Track Status" tab on <a href="http://www.VenturePact.com">VenturePact.com</a>.<br /><br />
		</td>	
	</tr>
	
	<tr style="background-color:#fff;">
		<td  style="padding:10px">
            Regards,<br />VenturePact team

		</td>	
	</tr>
</table>
</div>                           
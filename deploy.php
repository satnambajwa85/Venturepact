<?php

$repo_dir = 'C:\www\platform.venturepact.com';

$payload=$_REQUEST['payload'];
$payloadArray=json_decode(stripslashes($payload),true);


if($payloadArray['ref']=='refs/heads/staging'){
	$repo_dir = 'C:\www\platform.venturepact.com';
	exec('cd ' . $repo_dir);
	exec('git checkout staging');
	exec('git pull');
	file_put_contents('deploy.log','staging pull requested'.date('Y-m-d H:i:s'));
}elseif($payloadArray['ref']=='refs/heads/development'){
	$repo_dir = 'C:\www\test.venturepact.com';
	exec('cd ' . $repo_dir);
	exec('git checkout development');
	exec('git pull');
	file_put_contents('deploy.log','development pull requested'.date('Y-m-d H:i:s')." =>". $payload);
}

if($payloadArray['ref']=='refs/heads/master'){
	$repo_dir = 'C:\www\venturepact.com';
	exec('cd ' . $repo_dir);
	exec('git checkout master');
	exec('git pull');	
	file_put_contents('deploy.log','master pull requested'.date('Y-m-d H:i:s'));
}
die('done');
?>
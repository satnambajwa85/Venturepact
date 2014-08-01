<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
echo 'satnam';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<script type='text/javascript' src='https://api.stackexchange.com/js/2.0/all.js'></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script type='text/javascript'>

    $.get('https://api.stackexchange.com/2.1/users/681856?site=stackoverflow', '', function success(data) { alert(data); }, 'json');

    SE.init({
    clientId: 1,
    key: '123456',
    channelUrl: 'http://test.venturepact.com/index-test.php',
    complete: function (data) { alert(data.version); authenticate();}
});

function authenticate() {
    SE.authenticate({
        success: function (data) {
            alert(
                'User Authorized with account id = ' +
                data.networkUsers[0].account_id + ', got access token = ' +
                data.accessToken
            );

            $.get('https://api.stackexchange.com/2.1/users/' + data.networkUsers[0].account_id + '?site=stackoverflow', '', function success(data) { alert(data); }, 'json');

        },
        error: function (data) {
            alert('An error occurred:\n' + data.errorName + '\n' + data.errorMessage);
        },
        networkUsers: true
    });
}

</script>

</body>
</html>

  


<?php
require_once('src/facebook/autoload.php');

$fb = new Facebook\Facebook([
    'app_id' => '340973003310364', // Replace {app-id} with your app id
    'app_secret' => '9afde026c2bb6a3e86d08620d05e6b64',
    'default_graph_version' => 'v3.1',
    ]);

    $helper = $fb->getRedirectLoginHelper();
   
    $permissions = ['public_profile', 'email']; // Optional permissions
    $loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
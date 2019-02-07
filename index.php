<?php
    session_start();
    require_once "initialize.php";
    include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in with LinkedIn</title>
</head>
<body style="margin-top: 100px; text-align: center;">
    <h1><a href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>">Sign in using LinkedIn</a></h1>
    
</body>
</html>

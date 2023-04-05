<?php
session_start();
include("connections.php");
include("function.php");
$user_data = check_login($con);


?>
<DOCTYPE! HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        </head>
    <body>
        <h1>Welcome doctor you've logged in!!</h1>
        <a href="logout.php">logout</a>
    </body>
</html> 
<?php

session_start();
include("connections.php");
include("function.php");

if($_SERVER['REQUEST_METHOD']=="POST"){

    $username = $_POST['user-name'];
    $password = $_POST['pass-word'];

    if (!empty($username) && !empty($password) && !is_numeric($username)){
        $query = "select * from users where username='$username' limit 1";
        $result = mysqli_query($con, $query);
        if ($result) {
            if ($result && mysqli_num_rows($result)>0) {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password']===$password){
                    $_SESSION['doctor_id'] = $user_data['doctor_id'];
                    header("Location: fresh.html");
                    die;
                }
            }
        }
        echo "wrong details";
    }
    else {
        echo "Enter valid details";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="loginpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login landing page</title>
</head>
<body>
    <section class="side">
        <img src="doctor.svg" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">hospital database</p>
            <div class="separator"></div>
            <p class="welcome-message">Please, provide login credential to proceed and have access to all our services</p>

            <form action="" method="post" class="login-form">
                <div class="form-control">
                    <input name="user-name" type="text" placeholder="username">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input name="pass-word" type="password" placeholder="password">
                    <i class="fas fa-lock"></i>
                </div>

                <input type="submit" name="Login" value="Login" id="button">
            </form>
        </div>
    </section>
    
</body>
</html>

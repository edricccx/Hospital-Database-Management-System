<?php
 
 function check_login($con){
    if(isset($_SESSION['doctor_id'])){
        $id = $_SESSION['doctor_id'];
        $query = "select * from users where doctor_id='$id' limit 1";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location: login.php");
    die;
 }
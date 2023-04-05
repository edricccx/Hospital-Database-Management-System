
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $patient_id = $_POST['patient_id'];
    $patient_name = $_POST['patient_name'];
    $patient_address = $_POST['patient_address'];

    //Database connection
    $conn = new mysqli('localhost','root','','test');

         
                $stmt =$conn->prepare("insert into patient(patient_id,patient_name,patient_address)
                 values(?,?,?)");
                $stmt->bind_param("iss",$patient_id,$patient_name,$patient_address); 
                $stmt->execute();
                echo "patient entered successfuly";
                $stmt->close();
                header("Location: patient2.html");
                die;
}
            
    ?>
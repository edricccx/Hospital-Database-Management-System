<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $patient_id = $_POST['patient_id'];
    $patient_name = $_POST['patient_name'];
    $doctor_id = $_POST['doctor_id'];
    $doctor_name = $_POST['doctor_name'];
    $disease = $_POST['disease'];
    $discharged= $_POST['discharged'];
    $admit_date=  $_POST['admit_date'];

    $conn = new mysqli('localhost','root','','test');
    

            
                $stmt =$conn->prepare("insert into patient_details(patient_id,patient_name,doctor_id,doctor_name,disease,discharged,admit_date)
                 values(?,?,?,?,?,?,?)");
                $stmt->bind_param("isisssi",$patient_id,$patient_name,$doctor_id,$doctor_name,$disease,$discharged,$admit_date); 
                $stmt->execute();
                echo "patient entered successfuly";
                $stmt->close();
                header("Location: patientdetails.html");
                die;
            
}
    ?>
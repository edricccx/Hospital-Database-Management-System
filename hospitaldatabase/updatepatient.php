<?php
    $conn = new mysqli('localhost','root','','test');
    $patient_id = $_POST['patient_id'];
    $patient_name = $_POST['patient_name'];
    $patient_address = $_POST['patient_address'];
	mysqli_query($conn,"update `patient` set patient_name='$patient_name',patient_address='$patient_address' where patient_id= '$patient_id' ");
	header('location:patient2update.html');
    ?>
    

    
<?php
	$patient_id=$_POST['patient_id'];
    $conn = new mysqli('localhost','root','','test');
	mysqli_query($conn,"delete from `patient` where patient_id='$patient_id'");
	header('location:patientdel.html');
?>
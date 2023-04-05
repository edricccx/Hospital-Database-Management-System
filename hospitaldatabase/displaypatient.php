<?php
    echo "button clicked";
    $conn = new mysqli('localhost','root','','test');
    $query="select patient_id,patient_name,patient_address from patient";
    $result=$conn->query($query);
    while($row=$result->fetch_assoc()){
        echo "<tr><td>" . $row["patient_id"]. "</td><td>" . $row["patient_name"] . "</td><td>" . $row["patient_address"]. "</td></tr>";
    }
	mysqli_query($conn,$query);
    
	header('location:home.html');
    ?>
    

    
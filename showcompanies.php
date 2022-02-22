<?php
    $id = $_POST['id'];

     $conn = new mysqli("localhost", "root", "root", "drozdyclub");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
  
     $query = "SELECT * FROM `workers` WHERE id = ". $id;

     if ($stmt = $conn->query($query)) {
        while ($row = $stmt->fetch_assoc()) {
            echo $row['Name'];
         
       
     }
?>
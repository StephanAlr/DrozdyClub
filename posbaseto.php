<?php
$Name=$_POST['Name'];


echo $Name;
$conn = new mysqli("localhost", "root", "root", "drozdyclub");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "INSERT INTO fromwhere (Name) VALUES ('$Name')";

$conn->query($sql1);
if($conn->query($sql)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}

$conn->close();
?>
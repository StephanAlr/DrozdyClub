<?php
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Company=$_POST['Company'];
$PNumber=$_POST['PNumber'];
$Reason=$_POST['Reason'];


$conn = new mysqli("localhost", "root", "root", "drozdyclub");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "INSERT INTO clients (Name,Email,Company,PNumber,Reason,Date) VALUES ('$Name','$Email','$Company','$PNumber','$Reason',NOW())";
$sql1 = "INSERT INTO company (Name) VALUES ('$Company')";
$conn->query($sql1);
if($conn->query($sql)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}

$conn->close();
?>
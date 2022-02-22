<?php
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Vakancy=$_POST['Vakancy'];
echo $Vakancy;
$PNumber=$_POST['PNumber'];
$AboutMe=$_POST['AboutMe'];


$conn = new mysqli("localhost", "root", "root", "drozdyclub");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "INSERT INTO workers (Name,Email,Vakancy,PNumber,AboutMe,Date) VALUES ('$Name','$Email','$Vakancy','$PNumber','$AboutMe',NOW())";

if($conn->query($sql)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}

$conn->close();
?>
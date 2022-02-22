<?php
if(isset($_POST["id"]))
{
    $conn = mysqli_connect("localhost", "root", "root", "drozdyclub");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }
    $clientid = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "DELETE FROM workers WHERE ID = '$clientid'";
    if(mysqli_query($conn, $sql)){
         
        header("Location: admin.php");
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);    
}
?>
<?php
    $id = $_POST['id'];

     $conn = new mysqli("localhost", "root", "root", "drozdyclub");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
  
     $query = "SELECT * FROM `Clients` WHERE id = ". $id;

     if ($stmt = $conn->query($query)) {
        while ($row = $stmt->fetch_assoc()) {
            echo 'Имя: '. $row['Name'];
            echo '<br>';
            echo '<br>';
            echo 'Email: '.$row['Email'];
            echo '<br>';
            echo '<br>';
            echo 'Компания: '.$row['Company'];
            echo '<br>';
            echo '<br>';
            echo'Телефон: '. $row['PNumber'];
            echo '<br>';
            echo '<br>';
            echo 'Причина связи: '.$row['Reason'];
            echo '<br>';
            echo '<br>';
            echo 'Дата: '.$row['Date'];
            echo '<br>';
            echo '<br>';
            echo '<br>';
        }
        echo "<form action='delete.php' method='post'>
                        <input type='hidden' name='id' value='" . $id . "' />
                        <input type='submit' value='Удалить'>
                   </form>";
     }
?>
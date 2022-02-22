<html>
<head>
<meta charset="utf-8"> 
  <link rel="stylesheet" href="cssadmin.css">
</head>

<body>
<a href="index.html"><button class="mainn">на главную</button></a>
 <div class='container'>
   <h1>Административная панель</h1>
  <div class="but">
   <button class='cl'>Заявки клиентов</button>
   <button class='cl'>Компании</button>
    <button class='cl'>Вакансии</button>
    <button class='cl'>Посещения</button>
</div>
  <div class='clients hide block'>
    <h2>Заявки на услуги</h2>
    <div class="al">
  <?php
$conn = new mysqli("localhost", "root", "root", "drozdyclub");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM clients";
if($result = $conn->query($sql)){
   
    
    foreach($result as $row){
    
            
      echo '<button type="button" id="';
      echo $row['ID'];
      echo '" onClick="func(';
      echo "'";
      echo $row['ID'];
      echo "'";
      echo '); return false;">';
      echo $row['Reason'];
      echo '</button>';
      echo '<br>';
      echo '<br>';
      
       
    }
 
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</div>
</div>
<div class='vakancy hide block'>
    <h2>Компании, обратившиеся к нам</h2>
    <div class="al">
  <?php
$conn = new mysqli("localhost", "root", "root", "drozdyclub");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM Company";
if($result = $conn->query($sql)){
   
    
    foreach($result as $row){
    
            
      echo '<button type="button" id="';
      echo $row['ID'];
      echo '" onClick="func2sa(';
      echo "'";
      echo $row['ID'];
      echo "'";
      echo '); return false;">';
      echo $row['Name'];
      echo '</button>';
      echo '<br>';
      echo '<br>';
      
       
    }
 
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</div>
</div>
<div class='clients hide block'>
    <h2>Заявки на вакансии</h2>
    <div class="al">
  <?php
$conn = new mysqli("localhost", "root", "root", "drozdyclub");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM workers";
if($result = $conn->query($sql)){
   
    
    foreach($result as $row){
    
            
      echo '<button type="button" id="';
      echo $row['ID'];
      echo '" onClick="func2(';
      echo "'";
      echo $row['ID'];
      echo "'";
      echo '); return false;">';
      echo $row['Vakancy'];
      echo '</button>';
      echo '<br>';
      echo '<br>';
      
       
    }
 
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</div>
</div>



<div class='clients hide block'>
    <h2>Статистика посещений</h2>
    <?php
$count1=0;
$count2=0;
$count3=0;
$conn = new mysqli("localhost", "root", "root", "drozdyclub");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
  
     $query = "SELECT * FROM `fromwhere` ";

     if ($stmt = $conn->query($query)) {
        while ($row = $stmt->fetch_assoc()) {
            $hah=$row ['Name']; 
            if($row['Name']=="Рассказали друзья"){
                
                $count1++;
                
            }

            elseif($row['Name']=="Увидел рекламу в интернете"){
                
                $count2++;
            }
            elseif($row['Name']=="Сайт первый в списке поиска"){
                
                $count3++;
            }
           
           
        }
    }
    

?>
    <div class="al">
    <div id="air" style="width: 500px; height: 500px;"></div>

</div>
</div>
</div>
<div class='info-block'>
  <h2>Информация о заявке</h2>
<div id='info'>

</div>
<button class="back cl">Назад</button>
</div>
<script src="jquery-3.6.0.min.js"></script>

<script>
function func(id) {
    $.ajax({
        type: "POST",
        url: "show.php",
        data: { id : id },
        success: function(data) {
             $('#info').html('<div>'+data+'</div>'); 
        },
        error: function(request, status, errorT) {
             alert('error');
        }
    });
    let info=document.querySelector('.info-block');
    let back=document.querySelector('.back');
    info.style.display='block';
    let cont=document.querySelector('.container');
    cont.style.webkitFilter = "blur(10px)";
    back.addEventListener('click',function(){
      info.style.display='none';
    
    cont.style.webkitFilter = "blur(0)";
    });
 }
 function func2(id) {
    $.ajax({
        type: "POST",
        url: "vakshow.php",
        data: { id : id },
        success: function(data) {
             $('#info').html('<div>'+data+'</div>'); 
        },
        error: function(request, status, errorT) {
             alert('error');
        }
    });
    let info=document.querySelector('.info-block');
    let back=document.querySelector('.back');
    info.style.display='block';
    let cont=document.querySelector('.container');
    cont.style.webkitFilter = "blur(10px)";
    back.addEventListener('click',function(){
      info.style.display='none';
    
    cont.style.webkitFilter = "blur(0)";
    });
 }


</script>
<script src="scriptadmin.js"></script>
<script src="https://www.google.com/jsapi"></script>
<script>


   google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(drawChart);
   function drawChart() {
    var data = google.visualization.arrayToDataTable([
     ['Газ', 'Объём'],
     ['Рассказали друзья',     <?php echo $count1?>],
     ['Увидел рекламу в интернете',  <?php echo $count2?>],
     ['Сайт первый в списке поиска', <?php echo $count3?>],
    
    ]);
    var options = {
  width: 500,
  height: 500,
  
  colors: ['#e0440e', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6'],
  is3D:true
};
    var chart = new google.visualization.PieChart(document.getElementById('air'));
     chart.draw(data, options);
   }

   
  </script>
  
</body>

</html>



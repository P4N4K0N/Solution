<!DOCTYPE html>
<html>    
<head>
    <meta charset="UTF-8">
    <title>Четвертое задание</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>

<body>
<script>
$(function(){
    $('.list-toggle').click(function(){
      $('.u-list').toggleClass('open');
    });
});
</script>
<style>    
.u-list li:nth-child(n) {
    display: list-item;
  }
  
  .u-list.open li:nth-child(n) {
    display: none;
  }
</style>
<form method="post" action="">
<ul><a href="index.php">Все товары</a>
    <li> 
        <ul><a href="index2.php">Телевизоры</a>
        </ul>
    </li>
    <li>
        <ul><a href="index5.php"> Мультимедия</a>
            <li><a href="#">DVD-плееры</a></li>
            <li><a href="index7.php">Blu-Ray плееры</a></li>
        </ul>
    </li>
</ul>
</form>
<form style="text-align:center;margin-top:100px">
<?php
require "serverconfig.php";



$sql = "SELECT * FROM products WHERE id_group=9";
if($result = $conn->query($sql)){
    foreach($result as $row){
        printf('<br>' . $row['name']);
    }
}
?>
</form>




</body>
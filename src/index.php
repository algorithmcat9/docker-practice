<?php
// phpinfo();

$conn = mysqli_connect('mysql', 'root', 'root');

// Создание БД и проверка подключения 
$sql = "CREATE DATABASE testdb2";
if($conn->query($sql)){
    echo "База данных успешно создана";
} else{
    echo "Ошибка: " . $conn->error;
}
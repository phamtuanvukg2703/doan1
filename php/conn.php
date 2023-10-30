<?php
 function connectDB() {
    $host = 'localhost';
    $db = 'doan';
    $user = 'root';
    $pass = '';
    $conn = new mysqli($host,$user,$pass,$db);
    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    };
    return $conn;
 }
?>
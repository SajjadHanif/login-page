<?php
   ini_set('display_errors', '0');
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'sajhan_mydb');
   define('DB_PASSWORD', 'sajhan_mydb');
   define('DB_DATABASE', 'sajhan_mydb');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
<?php
$host ="localhost";
$dbname ="Bookstore";
$user ="root";
$pass="";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if($conn){
//     echo "db connected successfully";
// }else{
//     echo "error in db connection";
// }


/*So, if you have to switch your project to use another database,
 PDO makes the process easy. You only have to change the connection
 string and a few queries. 
 With MySQLi,you will need to rewrite the entire code - queries included.*/
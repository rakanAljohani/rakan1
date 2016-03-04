<?php
 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    require "db_config.php";
    createDoctor();
 }
 
 function createDoctor(){
    
    
    global $connect;
    
    $name = $_POST["name"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    
    $query = "insert into registeration(name, number, password) values ('$name', '$number', '$password');";
    mysqli_query($connect, $query) or die (mysqli_errno($connect));
    mysqli_close($connect);
    
 }
     

?>
<?php


require "db_config.php";
$user_id = $_POST["number"];
$user_pass = $_POST["password"];

$sql_query = "select * FROM registeration where number like'$user_id' and password like'$user_pass'";
$connect = mysqli_connect(hostname, username,password,databaseName);
$result = mysqli_query($connect, $sql_query);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
$response["id"] = $row["id"];
echo json_encode($response);    
    
}

else{

$response["id"] = 0;
   echo json_encode($response);  
}



?>
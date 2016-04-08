<?php

require "db_config.php";
$connect = mysqli_connect(hostname, username,password,databaseName);



// array for JSON response
$response = array();
if( isset($_GET['id'] ) ) {

    $id=$_GET['id'];

$sql_query ="delete from course_info where id='$id'";
$result = mysqli_query($connect, $sql_query);
   
  
 
   if ($result == "true") {
        $response["success"] = 1;
        $response["message"] = "Deleted Sucessfully.";
       }
    else{
        $response["success"] = 0;
        $response["message"] = "Failed To Delete"; 
     } 
  // echoing JSON response
  echo json_encode($response);

 }

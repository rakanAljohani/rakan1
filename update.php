<?php

require "db_config.php";
$connect = mysqli_connect(hostname, username,password,databaseName);


// array for JSON response
$response = array();
if( isset($_GET['id'])) {

    $id=$_GET['id'];
    $name = $_GET['name'];
    $lab = $_GET['lab'];
    $time = $_GET['time'];
    $state = $_GET['state'];
    $days = $_GET['days'];
    
    

    
  $sql_query ="update course_info set course_name='$name', course_time = '$time', course_state = '$state', course_lab='$lab', course_days='$days'  where id='$id'";
$result = mysqli_query($connect, $sql_query);
   
  
 
   if ($result == "true") {
        $response["success"] = 1;
        $response["message"] = "Updated Sucessfully.";
       }
    else{
        $response["success"] = 0;
        $response["message"] = "Failed To Update"; 
     } 
  // echoing JSON response
  echo json_encode($response);

 }
?>














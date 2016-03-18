

<?php

require "db_config.php";
$connect = mysqli_connect(hostname, username,password,databaseName);



// array for JSON response
$response = array();
if( isset($_GET['id'])  && isset($_GET['name']) &&isset($_GET['time'])&&isset($_GET['lab']) &&isset($_GET['state']) ) {

    $id=$_GET['id'];
    $name=$_GET['name'];
    $time=$_GET['time'];
    $lab=$_GET['lab'];
    $state=$_GET['state'];
    
  $sql_query ="update course_info set name='$name',time='$time',lab='$lab',state='$state' where id='$id'";
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







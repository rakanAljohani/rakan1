<?php
include("db_config.php");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
$query = "SELECT id, course_name, course_lab, course_state, course_days, course_time FROM course_info";
$connect = mysqli_connect(hostname, username,password,databaseName);
$result = mysqli_query($connect, $query);


echo "<table><tr><th>Course Name</th><th>Lab</th><th>State</th><th>Day</th><th>Time</th></tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
   
        echo "<tr><td>" . $row["course_name"]. "</td><td>" . $row["course_lab"]. "</td><td>" . $row["course_state"]. "</td><td>" . $row["course_days"]. "</td><td>" . $row["course_time"]. "</td></tr>";
    }
} else {
    echo "0 results";
}

echo"</table>";

?>
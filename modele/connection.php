<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Fit_analysor";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

<<<<<<< HEAD
?> 
=======
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
*/
?>
>>>>>>> 1c02dc5f4a9d333b7c659f569caa3821e39880c5

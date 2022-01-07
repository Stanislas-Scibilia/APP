<?php

<<<<<<< HEAD
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'fit_analysor';
=======
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fit_analysor";
>>>>>>> 0eecb3f13168e9b70ec73e599a9cfbd77db71461
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
/*
    $sql = "SELECT Nom FROM utilisateur";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Nom : " . $row["Nom"]. "<br>";
  }
} else {
  echo "0 results";
}
*/
$conn->close();
?> 

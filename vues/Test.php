<?php

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "musique";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id_Concert, nomConcert FROM concert";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id : " . $row["id_Concert"]. " - Nom : " . $row["nomConcert"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 
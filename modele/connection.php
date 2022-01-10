<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fit_analysor";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Nom, Prénom FROM utilisateurs";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
            echo "Nom : " . $row["Nom"]. " ; Prénom : " . $row["Prénom"]. "<br>";
          }
        } else {
          echo "0 results";
        }
        $conn->close();
?> 

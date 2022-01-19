<?php
//établie la connexion avec la base de données
    $servername = "localhost";
    $username = "root";
<<<<<<< Updated upstream
    $password = "";
=======
    $password = "root";
>>>>>>> Stashed changes
    $dbname = "fit_analysor";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?> 

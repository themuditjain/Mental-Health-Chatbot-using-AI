<?php 
        $servername = "localhost";
        $username = "root";
        
        // Create connection
        $con = new mysqli('localhost', 'root', '','chatbot');
        
        // Check connection
        if ($con->connect_error) {
          die("Connection failed: " . $con->connect_error);
        }
?>
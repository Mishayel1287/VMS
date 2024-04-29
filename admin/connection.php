<?php 
    
    //create the connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "volunteer2";  
    
    //create the connection
    $conn = new mysqli($servername, $username, $password, $db_name,);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
    
    ?>
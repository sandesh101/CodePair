<?php 
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "codepair";

    session_start();

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die(mysqli_connect_error());
    }
    else{
        echo "Connection Successfull";
    }


?>
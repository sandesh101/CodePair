<?php 
    $title = "Edit Post";
    require('../header.php');

    $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "codepair";  

     
    session_start();
     $conn = mysqli_connect($servername, $username, $password, $dbname);
     mysqli_select_db($conn, $dbname);

     $pt = $_GET['title'];
     $pd = $_GET['description'];

    if($_GET['update']){
        $title = $_GET['title'];
        $description = $_GET['description'];

        $query = "UPDATE post SET PostTitle = '$title', PostDesc = '$description'";

        $result = mysqli_query($conn, $query);
         
        if($result){
            echo "<script>alert('Record Updated Successfully')</script>";
            header("location: ../index.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }
    // session_destroy();

?>

<?php 
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "codepair";
     $dbtable = "post";   

     $conn = mysqli_connect($servername, $username, $password, $dbname);
     mysqli_select_db($conn, $dbname);

     if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty(trim($_POST['title'])) || empty(trim($_POST['description']))){
            $err = "Please enter title and descirption";
        }

        if(empty($err)){
            $title = $_POST['title'];
            $desription = $_POST['description'];
            $query = "INSERT INTO $dbtable(PostTitle, PostDesc)VALUES('$title','$desription')";
            $create = mysqli_query($conn, $query);
            if(!$create){
                die(mysqli_error($conn));
            }
            else{
                header("location: ../index.php");
            }
        }
    }



?>
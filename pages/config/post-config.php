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
            $desription = $_POST['descriptio'];
            $query = "INSERT INTO $dbtable(FullName, Email, Username, Pass, Languages)VALUES('$name','$email','$username','$password','$language')";
            $create = mysqli_query($conn, $query);
            if(!$create){
                die(mysqli_error($conn));
            }
            else{
                echo "Post Created Successfully";
            }
        }
    }



?>
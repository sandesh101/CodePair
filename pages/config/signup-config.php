<?php 
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "codepair";
    $dbtable = "userregister";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die(mysqli_connect_error());
    }
    
    mysqli_select_db($conn, $dbname);

    if(isset($_POST['submit'])){
        // echo "User Submited";
        if(!empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['language'])){
            $name = $_POST['fname'];   
            $email = $_POST['email'];   
            $username = $_POST['username'];   
            $password = $_POST['password'];   
            $language = $_POST['language'];   
        }

        $query = "INSERT INTO $dbtable(FullName, Email, Username, Pass, Languages)VALUES('$name','$email','$username','$password','$language')";
        $insert = mysqli_query($conn, $query);
        if(!$insert){
            die(mysqli_error($conn));
        }
        else{
            header("location: ../index.php");
        }
       
    
    }


?>
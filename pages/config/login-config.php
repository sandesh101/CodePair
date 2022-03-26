<?php 
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "codepair";
     $dbtable = "userregister";   



    session_start();
    if(isset($_SESSION['username'])){
        header("location: index.php");
        exit;
    }

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_select_db($conn, $dbname);

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty(trim($_POST['username'])) || empty(trim($_POST['password']))){
            $err = "Please enter username and password";
        }

        if(empty($err)){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT id, Username, Pass FROM userregister WHERE Username = '$username' and Pass = '$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            if($row['Username'] == $username && $row['Pass'] == $password){
               header("location: ../index.php");
            }
            else{
                die(mysqli_error($conn));
            }
        }
    }






    


    // $conn = mysqli_connect($servername, $username, $password, $dbname);
    // if(!$conn){
    //     die(mysqli_connect_error());
    // }
    
    // mysqli_select_db($conn, $dbname);

    // if(isset($_POST['login'])){
    //     // echo "User Submited";
    //         $username = $_POST['username'];   
    //         $password = $_POST['password'];   
    //         $query = "SELECT $Username, $Pass FROM $dbtable";
    //         $result = mysqli_query($conn, $query);
       
    //     }


?>
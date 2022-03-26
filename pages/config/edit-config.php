<?php 

    include('display-config.php');
    $id = $_GET['id']; 
    $query = "DELETE FROM post WHERE pid = '$id'";

    $del = mysqli_query($conn, $query);

    if($del){
        header('location: ../index.php');
    }
    else{
        echo 'Failed to delete data';
    }

?>
<?php 
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "codepair";  
     

     session_start();
     $conn = mysqli_connect($servername, $username, $password, $dbname);
     mysqli_select_db($conn, $dbname);

     echo "Welcome" . $_SESSION['username'];
     

     $query = "SELECT * FROM post";
    //  $uquery = "SELECT Username FROM userregister";
     $result = mysqli_query($conn, $query);
    //  $userresult = mysqli_query($conn,$uquery);
     $data = mysqli_num_rows($result);
    //  echo $data;
    //  $row = mysqli_fetch_assoc($result);
    //  echo var_dump($row);
    $date = date('d/m/Y');
    // $urow = mysqli_fetch_assoc($userresult);
    // $username = $_SESSION['username'];
    // echo $username;
     
    if($data>0){
        while($row = mysqli_fetch_assoc($result)){
            echo "
            <div class='main_post'>
            <div class='ptitle'>
            <h2>" .$row['PostTitle'] . "</h2>
            <div class='action'>
            <a href='./edit.php?id=$row[pid] & pt=$row[PostTitle] & pd=$row[PostDesc]' class='edit'>Edit</a>
            &nbsp;
            <a href='./config/delete-config.php?id=$row[pid]' class='delete'>Delete</a>
            </div>
            </div>
            <p>" .$row['PostDesc']. "</p>
            <small><strong>Posted on: " . $date . "</strong></small>
            <small>Posted by: " . $date . "</small>
            

         </div>
            ";
        }

        mysqli_free_result($result);
    }
    else{
        echo "
        <div class='show'>
   <h2>
      User Don't Have Any Post!! Create One To Show
   </h2>
</div>  ";
    }

    // mysqli_close($conn);

?>
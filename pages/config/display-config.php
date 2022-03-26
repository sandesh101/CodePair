<?php 
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "codepair";  
     
     $conn = mysqli_connect($servername, $username, $password, $dbname);
     mysqli_select_db($conn, $dbname);

     $query = "SELECT PostTitle, PostDesc FROM post";
     $result = mysqli_query($conn, $query);
     $data = mysqli_num_rows($result);
    //  echo $data;

    if($data!=0){
        while($row = mysqli_fetch_assoc($result)){
            echo "
            <div class='main_post'>
            <div class='ptitle'>
            <h2>" .$row['PostTitle'] . "</h2>
            <div class='action'>
            <input type='submit' value='Edit' class='edit' name='edit'>
            &nbsp;
            <input type='submit' value='Delete' class='delete' name='delete'>
            </div>
            </div>
            <p>" .$row['PostDesc']. "</p>
            <small>Posted by: sandesh1</small>
      
         </div>
            ";
        }
    }


?>
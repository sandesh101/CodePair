<?php 
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "codepair";  

     $conn = mysqli_connect($servername, $username, $password, $dbname);
     mysqli_select_db($conn, $dbname);

     $query = "SELECT * FROM post";
     $result = mysqli_query($conn, $query);
     $data = mysqli_num_rows($result);
    $date = date('d/m/Y');
    echo "<div class='main_post'><h1>Welocome " . $_SESSION['username'] . "</h1></div>";
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
            <br>
            <input type='text' placeholder='Add a comment' class='comment' name='comment'>
            

         </div>
            ";
        }

        mysqli_free_result($result);
    }
    else{
        echo "
        <div class='show'>
   <h2>
      No Any Post!! Create One To Show
   </h2>
</div>  ";
    }

?>
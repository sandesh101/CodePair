<?php
    $title = "Create a Post";
    include('header.php');
    $pt = $_GET['pt'];
     $pd = $_GET['pd'];
?>

<div class="post_container">
    <div class="post_box">  
    <h2>Update Post</h2> 
    <hr color="black"> 
    <br>
    <form action="./config/edit-config.php" method="get">
        <div class="post_title">
            <label for="Post Title">Post Title</label>
            <br>
            <input type="text" name="title" value="<?php echo $pt ?>">
        </div>
        <div class="post_desc">
            <label for="Post Title">Post Description</label>
            <br>
            <input type="text" name="description" value="<?php echo $pd ?>">
        </div>
        <div class="button">
            <input type="submit" value="Update" name="update">
        </div>
    </form>
    </div>
</div>
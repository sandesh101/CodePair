<?php
    $title = "Create a Post";
    include('header.php');
?>

<div class="post_container">
    <div class="post_box">  
    <h2>Create a Post</h2> 
    <hr color="black"> 
    <br>
    <form action="./config/post-config.php" method="post">
        <div class="post_title">
            <label for="Post Title">Post Title</label>
            <br>
            <input type="text" name="title">
        </div>
        <div class="post_desc">
            <label for="Post Title">Post Description</label>
            <br>
            <input type="text" name="description">
        </div>
        <div class="button">
            <input type="submit" value="Create" name="create">
        </div>
    </form>
    </div>
</div>
<?php
    $title = "Login";
    include('header.php');
    session_start();
?>

<div class="container">
    <div class="form_field">
        <h1>Login</h1>
        <form action="./config/login-config.php" method="post">
            <div class="username">
                <label for="username">Username:</label><br>
                <input type="text" name="username" placeholder="Username">
            </div>
            
            <div class="password">
                <label for="password">Password:</label><br>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="button">
                <input type="submit" value="Login" id="button" name="login">
            </div>
            <div class="register">
                <h4>Don't have an account?</h4>
                <br>
                <a href="./signup.php">Sign Up</a>
            </div>
        </form>
    </div>
</div>
    

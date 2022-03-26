<?php
    $title = "Sign Up";
    include('header.php');
?>

<div class="container">
    <div class="form_field">
        <h1>Sign Up</h1>
        <form action="../pages/config/signup-config.php" method="post" target="../index.php">
            <div class="fname">
                <label for="fname">Full name:</label><br>
                <input type="text" name="fname" placeholder="Full Name">
            </div>
            <div class="email">
                <label for="email">Email:</label><br>
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="username">
                <label for="username">Username:</label><br>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="password">
                <label for="password">Password:</label><br>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="language">
                <label for="language">Language:</label><br>
                <input type="text" name="language" placeholder="Language to learn">
            </div>
            <div class="button">
                <input type="submit" value="Register" id="button" name="submit">
            </div>
            <div class="login">
            <h4>Already have an account? </h4>
            <br>
            <a href="./login.php">Login</a>
            </div>
        </form>
    </div>
</div>
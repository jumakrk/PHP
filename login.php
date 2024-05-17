<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include 'navbar.php'?>
    <header>
            <!-- Sign up form -->
    <form action="login.php" method="post">
        <h2>Login</h2>
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" id="username" name="username" required placeholder="Enter your username">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter your password">
        </div>

        <div class="btn">
            <button name="login"> Log In</button>
        </div>
    </form>
    </header>
<!-- login page, and good user interface (home, about, services and contacts) -->
</body>
</html>

<?php
if(isset($_POST['login'])){

    // get user input
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // connect to the database
    include 'connection.php';

    // query
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    // execute the query
    $result = $db_connect->query($sql);
    if($result->num_rows > 0){
        $_SESSION['username'] = $username;
        // echo "<alert>('Logged in sucessfully')</alert>";
        header('Location: dashboard.php');
    }else{
        echo "User does not exit";
    }
}
?>
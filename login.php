<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include 'navbar.php'?>
<h1>Login Page</h1>
<!-- login page, and good user interface (home, about, services and contacts) -->

    <!-- Sign up form -->
    <form action="processform.php" method="post">
        <h2>Login</h2>
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>

        <div class="btn">
            <button name="submit">Login</button>
        </div>
    </form>
</body>
</html>
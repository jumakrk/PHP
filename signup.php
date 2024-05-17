<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>SignUp</title>
</head>
<body>
    <?php include 'navbar.php'?>

    <header>
            <form action="processform.php" method="post">
                <h2>Sign up</h2>
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" id="username" name="username" require placeholder="Enter your username">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" require placeholder="Enter your email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" require placeholder="Enter your password">
                    </div>

                    <div class="btn">
                        <button type="submit" name="submit">Sign up</button>
                    </div>
            </form>
    </header>
</body>
</html>

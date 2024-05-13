<?php

//function addNumbers($num1, $num2) {
    //return $num1 + $num2;
//}

// input
//$num1 = 10;
//$num2 = 10;

// sum of numbers
//$sum = addNumbers($num1, $num2);

// result
//echo "The sum is: $sum";

//<?php

//$deposit = 40000;
//$withdrawal = 5000;
//$balance = $deposit - $withdrawal;
//echo $balance;

//example 1
//function complete_balance(){
    //$deposit = 40000;
    //$withdrawal = 5000;

    //$balance = $deposit - $withdrawal;
    //echo $balance;
//}
//calling the function
//complete_balance()

//example 2
//function complete_balance($deposit,$withdrawal){
    //echo ($deposit-$withdrawal)
    //}
    //complete_balance(40000,5000);

//example 3
    //$msg = "PHP is the simplest language I have come across"
//var_dump($msg)

//$username = "john";

//if(isset($username)){
    //echo "username is set";
//}else {
    //echo "username not set";
//}

//Connection to database using try catch method

// Database connection settings
// $host = 'localhost'; // or your database host
// $dbname = 'phpd'; // your database name
// $username = 'root'; // your database username
// $password = ''; // your database password

// try {
//     // Create a PDO instance
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//     // Set PDO to throw exceptions on error
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//     echo "Connected successfully";
// } catch (PDOException $e) {
//     die("Connection failed: " . $e->getMessage());
// }

//connection to server using if else conditional statements

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpdb";

    //create connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    if(mysqli_connect_errno()){
        echo "Failed to connect!";
        exit();
}
echo "Connection sucessfull"

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sign up</title>
</head>
<body> -->
    <!-- sign up form -->
    <!-- <form action="processing_signup.php" method="post">
    <div>

    <div class="username">
            <label>User Name</label>
            <input type="text" name="username" placeholder="username">
        </div>

        <div class="email">
            <label>Email</label>
            <input type="email" name="email" placeholder="email">
        </div>

        <div class="Password">
            <label>Password</label>
            <input type="Password" name="password" placeholder="password">
        </div>

        <div class="btn">
            <button action="submit">Sign up</button>
        </div>

    </div>
    </form>
</body>
</html> -->
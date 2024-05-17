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


//     echo "Connected successfully using the try catch method";
// } catch (PDOException $e) {
//     die("Connection failed using the try catch method: " . $e->getMessage());
//}

//connection to server using if else conditional statement

//     $host = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "phpdb";

//     //create connection using mysqli which can be functional or Object Oriented
//     $con = mysqli_connect($host, $username, $password, $dbname);

//     if(mysqli_connect_errno()){
//         echo "Failed to connect using conditional statements if else";
//         exit();
// }
// echo "Connection sucessfull using conditional statements if else"

//Index Array
// $counties = array ("Nairobi", "Mombasa", "Nakuru");
// // echo $counties [1]

// foreach ($counties as $county) {
//     echo $county;
// }

//Associative array
// $user_input = array(
//     'username' => "John",
//     'email' => "john@gmail.com",
//     'password' => "1234"
// );

// echo $user_input['username'];
// session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php include 'navbar.php'?>
    <header>
        <h1>HOMEPAGE</h1>
    </header>
</body>
</html>
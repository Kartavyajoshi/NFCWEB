<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $database = "userinfo";

    //Connecting to server
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        echo "Not connected to the server";
    }
    else{}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>

    <?php 

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $uname = $_POST['uname'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            
            $sql = "INSERT INTO `information` (`Sr. No`, `Username`, `Password`, `Email`, `Time`) VALUES ('', '$uname', '$pass', '$email', '')";
            mysqli_query($conn, $sql);
        }

    ?>

    <form action="/zoro/signup.php" method="post">
        <label for="uname">UserName</label>
        <br>
        <input type="text" name="uname" placeholder="Enter your username" id="uname" required>
        <br>
        <label for="email">Enter your E-mail address</label>
        <br>
        <input type="email" name="email" placeholder="Enter your e-mail" id="email" required>
        <br>
        <label for="pcode">Enter the password</label>
        <br>
        <input type="password" name="pass" placeholder="Enter the password" id="pcode" required>
        <br>
        <input type="checkbox" required>
        <label for="cbox">I agree to all the <a href="#" >Terms and Conditions</a></label>
        <br>
        <input type="submit">
    </form>

</body>
</html>

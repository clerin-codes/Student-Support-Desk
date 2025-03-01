<?php
session_start();
include("connect.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    if(!empty($email) && !empty($password) && !is_numeric($email)) {
        $query = "SELECT * FROM register WHERE email='$email'"; 
        $result = mysqli_query($conn, $query);

        if($result && mysqli_num_rows($result) > 0) {
            while($user_data = mysqli_fetch_assoc($result)) {
               
                if($user_data['password'] == $password) {
                    
                    header("location: home.php");
                    exit;
                }
            }
            
            echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
        } else {
            
            echo "<script type='text/javascript'> alert('User not found')</script>";
        }
    } else {
        
        echo "<script type='text/javascript'> alert('Invalid email or password')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="content">
        <div class="navbar">
            <h1>WE SUPPORT</h1>
            <nav>
                <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#">Inquiry</a></li>
                </ul>
            </nav>
            <div class="btn">
                
                <button class="up">Register</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>LOGIN</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Est non temporibus error iusto cum culpa atque, 
                    ab labore, sequi magnam repudiandae nam quas. 
                    Perferendis pariatur rem aperiam optio praesentium! Natus.</p>
            </div>
            <div class="formreg">
                <h1>LOGIN HERE</h1>
                <form class="reg" action="" method="POST">
                    <p id="result"></p>
                        <label for="email">Email: </label>
                        <input id="username" class="inputbox" type="email" name="email"> <br>
                        
                        <label for="pwd">Password: </label>
                        <input id="password" class="inputbox" type="password" name="pwd"> <br>
                       
                    <a href="forgotpwd.php">Forgot password?</a>
                    <button class="signupbutton" type="submit" name="signin">Sign IN</button>
                    <hr>
                    <p class="or">OR</p>
                    <p>Don't you have an account? <a href="register.php">Sign UP</a></p>
                </form>
        
            </div>
        </div>
        
    </div>
</body>
</html>
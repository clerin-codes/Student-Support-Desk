<?php
    session_start();
    include("connect.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $uni = $_POST['uni'];
        $email= $_POST['email'];
        $phonenum = $_POST['phonenum'];
        $password = $_POST['pwd'];

        
    // Assuming $con is your database connection object
    if(!empty($email) && !empty($password) && !empty($email) && !is_numeric($email))
    {
       
        
        // Assuming $con is your database connection object
        $query = "INSERT INTO register (firstname, lastname, University, email, phonenum, password) VALUES ('$firstname', '$lastname', '$uni', '$email', '$phonenum', '$password')";
        
        
        if(mysqli_query($conn, $query)) {
            echo "<script type='text/javascript'> alert('Successfully Registered'); window.location.href = 'login.php';</script>";
        } else {
            echo "<script type='text/javascript'> alert('Error: " . mysqli_error($con) . "')</script>";
        }
    }
    else {
       // echo "<script type='text/javascript'> alert('Please enter valid information')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="script.js"></script>
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
                <button class="log">Log in</button>
                
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>REGISTER</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Est non temporibus error iusto cum culpa atque, 
                    ab labore, sequi magnam repudiandae nam quas. 
                    Perferendis pariatur rem aperiam optio praesentium! Natus.</p>
            </div>
            <div class="formreg">
                <h1>Sign up Now</h1>
                <form class="reg" action="" method="POST" name="formfill" id="myForm"onsubmit="return validation()">
                    <div class="txt">
                        <p id="result"></p> <br>
                        <label for="fname">First Name: </label>
                        <input class="inputbox" type="text" name="fname" id="fname"> <br>
                        <label for="lname">Last Name: </label>
                        <input class="inputbox" type="text" name="lname" id="lname"> <br>
                        <label for="uni">University: </label>
                        <input class="inputbox" type="text" name="uni" id="uni"> <br>
                        <label for="email">Email: </label>
                        <input class="inputbox" type="email" name="email"> <br>
                        <label for="phonenum">Phone Number: </label>
                        <input class="inputbox" type="tel" name="phonenum"> <br>
                        <label for="pwd">Password: </label>
                        <input class="inputbox" type="password" name="pwd" id="pw"> <br>
                        <label for="repwd">Confirm Password: </label>
                        <input class="inputbox" type="password" name="repwd" id="rpw"> <br>
                    </div>
                    
                    
                    <p><span><input type="checkbox" name="checkbox" id="checkbox">I agree to the Terms & Conditions</span></p>
                    <button class="signupbutton" type="submit" name="signup">Sign UP</button>
                    <hr>
                    <p class="or">OR</p>
                    <button class="googlebutton" type="submit">SignUP with Google</button>
                    <p>Do you have an account? <a href="login.php">Sign in</a></p>
                </form>
        </div>
        
    </div>
</body>
</html>
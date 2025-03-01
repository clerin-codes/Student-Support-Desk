<?php
    session_start();
    include("connect.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message= $_POST['message'];
       

        
    // Assuming $con is your database connection object
    if(!empty($name) && !empty($subject) && !empty($email) && !is_numeric($email))
    {
       
        
        // Assuming $con is your database connection object
        $query = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
        
        
        if(mysqli_query($conn, $query)) {
            echo "<script type='text/javascript'> alert('SENT!')</script>";
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
    <title>Contact us</title>
    <link rel="stylesheet" href="contact.css">
    <script src="contactscript.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="content">
        <div class="navbar">
            <h1>WE SUPPORT</h1>
            <nav>
                <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="home.php">About</a></li>
                <li><a href="#Contact">Contact</a></li>
                <li><a href="Inquiry/src/inquiry.php">Inquiry</a></li>
                </ul>
            </nav>
            <div class="btn">
                
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>Contact US</h1>
                <div class="details">
                    <div>
                        <h2>Contact detail</h2>
                    <p>Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                    <div>
                        
                        <h2>PHONE :</h2>
                        <p>+12457836913 </p>
                    </div>
                    <div>
                        
                        <h2>EMAIL :</h2>
                        <p>wesupport@yahoo.com</p>
                    </div>
                    <div>
                        
                        <h2>ADDRESS :</h2>
                        <p>6743 last street , Abcd, Xyz</p>
                    </div>
                </div>
                
                
            </div>
            <div class="formreg">
                <h1>Contact US</h1>
                <form class="reg" name="form" action="" method="POST" onsubmit="return validation()">
                    <div class="txt">
                        <p id="para"></p>
                        <label for="name"></label>
                        <input class="inputbox" type="text" name="name" id="name" placeholder="Name"><br>
                        <label for="email"></label>
                        <input class="inputbox" type="text" name="email" id="email" placeholder="Email"> <br>
                        <label for="subject"></label>
                        <input class="inputbox" type="text" name="subject" id="subject" placeholder="Subject"> <br>
                        <label for="msg"></label>
                        <textarea class="inputbox" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea> <br>
                        
                    </div>
                    <button class="change" type="submit" name="confirm">Send</button>
                    
                    
                </form>
        </div>
        
    </div>
</body>
</html>
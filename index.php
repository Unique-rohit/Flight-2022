<?php include("connect.php"); ?>
<html>
    <head>
        <title>Login Page</title>
        <script src="https://kit.fontawesome.com/b9c48ea07e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@800&display=swap" rel="stylesheet">
    </head>
    <body>
        <form action="#" method="POST">
        <div class="container">
        <h1>Log In</h1>
        <div class="box">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Enter your Email">
         </div>
        <div class="box">
            <i class="fa-solid fa-key"></i>
        <input type="password" name="password" id="password" placeholder="Enter Your Password">
        </div>
        <input type="submit" value="Submit" name="submit" id="btn">
    </div>
        </form>

    </body>
</html>
<?php
if($_POST['submit'])
{
    $email=$_POST['email'];
    $password=$_POST['password'];
}
$query = "INSERT INTO login(email,password) VALUES('$email','$password')";
$data= mysqli_query($conn,$query);


if($data)
{
    echo "you are connected";
}
else{
    echo "not connected";
}
?>
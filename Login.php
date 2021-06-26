<?php
session_start(); 
include 'connection.php';
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
    <script src="../Project/bootstrap-5.0.0-beta1-dist/fontawesome-free-5.15.1-web/js/all.js"></script>
    <style>
    </style>
    </head>
    <body>
    <div id="main"><br><br><br><br>
          <div id="page" class="mform"><br>
          &nbsp;&nbsp;<a href="Home.html" style="color:black;"><i style="font-size:20px" class="fa fa-arrow-left"></i></a>
            <div class="button">
                <div id="btn"></div>
                <button type="button" class="toggle-button" onclick="login()">Login</button>
                <button type="button" class="toggle-button" onclick="register()">Register</button>
            </div>
    <form id="login" class="inputg" action="<?php ?>" method="POST">
        <input type="text" class="inputfield" placeholder="Email or Phone No." name="uid" value="<?php if(isset($_POST['login'])){echo $_POST['uid'];} ?>" required>
        <input type="password" class="inputfield" placeholder="Password" name="upass" required><br><br>
        <button type="Submit" class="submitbtn" name="login" onclick="ver()">Login</button>
    </form>
    <form id="register" action="registration.php" class="inputg" method="POST">
        <input type="text" class="inputfield" placeholder="First Name" name="fname" required>
        <input type="text" class="inputfield" placeholder="Last Name"  name="lname" required>
        <input type="email" class="inputfield" placeholder="E-mail" name="email" required>
        <input type="text" class="inputfield" placeholder="Phone Number" name="phno" required>
        <input type="Password" class="inputfield" placeholder="Password" name="pass" required>
        <input type="Password" class="inputfield" placeholder="Conform Password" name="cpass" required><br><br>
        <button type="Submit" class="submitbtn" name="submit" onclick="sub()">Submit</button>
    </form>
    </div>
    </div>
    <script>
        var a=document.getElementById("login");
        var b=document.getElementById("register");
        var d=document.getElementById("page");
        var c=document.getElementById("btn");
        function register() {
            a.style.left= "-400px";
            b.style.left= "50px";
            c.style.left="110px"
            d.style.height= "580px"
        }
        function login() {
            a.style.left= "50px";
            b.style.left= "450px";
            c.style.left="0px";
            d.style.height= "480px"
        }
    </script>
    </body>
</html>

<?php 
if(isset($_POST['login']))
{
$uid=$_POST['uid'];
$upass=$_POST['upass'];
$name="";
if(is_numeric($uid))
{
    $q=mysqli_query($a,"select * from user where phno='$uid' and upass='$upass'");
    if($z=mysqli_fetch_assoc($q))
    {
        $_SESSION['uname']=$z['uname'];
        $_SESSION['email']=$z['email'];
        $_SESSION['uno']=$z['uno'];
    echo '<script>alert("Login Successful")
    window.location="User.php";
    </script>';
    }
    else
    {
        echo '<script>
        alert("Login Failed");
        window.location="Login.php";
        </script>';
    }
}else
if(strpos($uid,'@')){
    $q=mysqli_query($a,"select * from user where email='$uid' and upass='$upass'");
    if($z=mysqli_fetch_assoc($q))
    {
        $_SESSION['uname']=$z['uname'];
        $_SESSION['email']=$z['email'];
        $_SESSION['uno']=$z['uno'];
        echo '<script>alert("Login Successful")
        window.location="User.php";
        </script>';
    }
    else
    {
        echo '<script>
        alert("Login Failed");
        window.location="Login.php";
        </script>';
    }  
}

}
?>
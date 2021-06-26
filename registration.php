<?php
include 'connection.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$name=$fname." ".$lname;
$email=$_POST['email'];
$phone=$_POST['phno'];
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];
$exist="SELECT * from user";
$result=mysqli_query($a,$exist);
$z=mysqli_fetch_assoc($result);
$cnt=strlen($phone);
if($cnt!=10||!(is_numeric($phone))){
    echo "<script>alert('Invalid Phone Number');
    window.location='Login.php';</script>";
}
else if($z['email']==$email || $z['phno']==$phone)
{
echo '<script>alert("You Are Alredy Registered With This E-mail or Phone No.");
        window.location="Login.php";
        </script>';
}
else if($password==$cpassword)
{
    $sql="insert into user(uname,phno,email,upass,fhid,f_aid) values ('$name','$phone','$email','$cpassword','1','1001');";
    $q=mysqli_query($a,$sql);
    echo "<script>alert('Registration Successful');
    window.location='Login.php';    
    </script>";
}
else{
    echo "<script>alert('Registration Failed. Please Check Your Password.');
    window.location='Login.php';
    </script>";
}
?>
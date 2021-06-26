<?php
session_start();
include 'connection.php';
if(isset($_SESSION['aname']))
{
}
else{
    header("Location: {$hostname}/Project/Home.html");
}
?>
<?php 
if(isset($_POST['alogin']))
{
$aid=$_POST['aid'];
$apass=$_POST['apass'];
$name="";
$q=mysqli_query($a,"select * from admins where aid='$aid' and apass='$apass'");
    if($z=mysqli_fetch_assoc($q))
    {
    echo '<script>alert("Login Successful")</script>';
    $_SESSION['aname']=$z['aname'];
    header("Location: {$hostname}/Project/admin.php");
    }
    else
    {
    echo '<script>alert("Login Fail")</script>';
    header("Location: {$hostname}/Project/Home.html");
    }
}
?>

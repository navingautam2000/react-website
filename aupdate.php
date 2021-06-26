<?php 
if(isset($_POST['update']))
{
$bid=$_POST['bid'];
$cin=$_POST['cin'];
$cout=$_POST['cout'];
include 'connection.php';
$sql=mysqli_query($a,"update booking SET bid='$bid',cin_date='$cin',cout_date='$cout'");
$result=mysqli_query($a,$sql);
header("Location: {$hostname}/Project/admin.php");
}
?>
<?php
session_start();
include 'connection.php';
$cdate=date("y-m-d");
$uno=$_SESSION['email'];
$query=mysqli_query($a,"select * from user where email='$uno'");
$z=mysqli_fetch_assoc($query);
$uno=$z['uno'];
$query=mysqli_query($a,"select * from booking where f_uno='$uno' and cout_date='$cdate'");
$z=mysqli_fetch_assoc($query);
$bid=$z['bid'];
$bdate=$z['bdate'];
$cin=$z['cin_date'];
$cout=$z['cout_date'];
$idtype=$z['idtype'];
$idno=$z['idno'];
$adult=$z['adult_no'];
$child=$z['child_no'];
$amount=$z['total_amount'];
$rno=$z['f_rno'];
$uid=$z['f_uno'];
$query=mysqli_query($a,"update rooms set rstate='A' where rno='$rno'");
$query=mysqli_query($a,"insert into booking_history(bid,bdate,cindate,coutdate,idtype,idno,adultno,childno,totalamount,rno,uno) values ('$bid','$bdate','$cin','$cout','$idtype','$idno','$adult','$child','$amount','$rno','$uid')");
$query=mysqli_query($a,"delete from booking where f_uno='$uid' and cout_date='$cdate'");
?>
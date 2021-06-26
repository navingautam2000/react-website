<?php
  if(isset($_POST['CB'])){
    $bid=$_POST['bno'];
$query=mysqli_query($a,"select * from booking where bid='$bid'");
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
$query=mysqli_query($a,"insert into booking_history(bid,bdate,cindate,coutdate,idtype,idno,adultno,childno,totalamount,rno,uno,bstate) values ('$bid','$bdate','$cin','$cout','$idtype','$idno','$adult','$child','$amount','$rno','$uid','Canceled')");
$query=mysqli_query($a,"delete from booking where bid='$bid'");
echo "<script>alert('Booking Canceled');</script>";
echo "<script>window.location='mybooking.php';</script>";
  }
?>
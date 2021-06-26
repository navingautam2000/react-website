<?php include 'aheader.php'?><br>
<div class="container">
   <form action="abooking.php" method="POST">
  <center>
  <label><b>  Enter E-mail : </b></label>
    <input type="text" placeholder="E-mail" name="uid">
    <button class="btn btn-primary" name="submit"> Submit</button>
  </center>
</form>
</div>
<h2><b>User Booking</b></h2>
<?php 
if(isset($_POST['submit']))
{
  $uid=$_POST['uid'];
  include 'connection.php';
  $sql=mysqli_query($a,"select * from user where email='$uid'");
  $z=mysqli_fetch_assoc($sql);
  $uid=$z['uno'];
  $sql=mysqli_query($a,"select * from booking,user where user.uno=booking.f_uno and f_uno='$uid'");
  ?>
<table  class="table" cellpadding="7px">
<thead>
<th>Booking Id</th>
<th>User Name</th>
<th>Booking Date</th>
<th>Check In Date</th>
<th>Check Out Date</th>
<th></th>
<th></th>
</thead>
<tbody>
<?php 
while($row=mysqli_fetch_assoc($sql)){
?>
<form action="" method="POST">
<tr>    
    <td><input type="text" name="bno" value="<?php echo $row['bid'];?>" readonly style="background: transparent; outline:none; border: 0;"></td>
    <td><?php echo $row['uname']; ?></td>
    <td><?php echo $row['bdate']; ?></td>
    <td><input type="date"  name="cin" value="<?php echo $row['cin_date']; ?>"></td>
    <td><input type="date"  name="cout" value="<?php echo $row['cout_date']; ?>"></td>
    <td><button class="btn btn-primary" name="update">Update</button></td>
    <td><button class="btn btn-primary" name="cout">Check Out</button></td>
</tr>
</form>
<?php } ?>
</tbody>
</table>
<?php } ?>
<?php
include 'connection.php';
if(isset($_POST['update'])){
$cind=$_POST['cin'];
$coutd=$_POST['cout'];
$bid=$_POST['bno'];
$sql=mysqli_query($a,"update booking set cin_date='$cind', cout_date='$coutd' where bid='$bid'");  
}
else if(isset($_POST['cout'])){
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
$query=mysqli_query($a,"insert into booking_history(bid,bdate,cindate,coutdate,idtype,idno,adultno,childno,totalamount,rno,uno,bstate) values ('$bid','$bdate','$cin','$cout','$idtype','$idno','$adult','$child','$amount','$rno','$uid','Checkouted')");
$query=mysqli_query($a,"delete from booking where bid='$bid'");
echo "<script>alert('Sucessfully Checkouted');</script>";
}
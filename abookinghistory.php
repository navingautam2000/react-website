<?php include 'aheader.php'; ?>
<br>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/user.css">
<style>
table {
  border-collapse: collapse;
  width: 80%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<form action="" method="POST">
<b>Enter Email : </b><input type="email" name="email" placeholder="E-mail">
<button name="search">Search</button>
</form><br>
<h2 style="margin-left: 20px;">Booking History</h2><br>
<center>
<table>
  <tr>
  <th>Booking No.</th>
    <th>Booking Date</th>
    <th>Check In</th>
    <th>Check Out</th>
    <th>Room No.</th>
    <th>Room Type</th>
    <th>Total Persons</th>
    <th>Total Bill Amt.</th>
    <th></th>
  </tr>
  <?php
  include 'connection.php';
  if(isset($_POST['search'])){
  $email=$_POST['email'];
  $result=mysqli_query($a,"select bdate,cindate,coutdate,rno,adultno,childno,totalamount,bstate from booking_history,user where booking_history.uno=user.uno and email='$email'");
  while($z=mysqli_fetch_assoc($result))
  { $cnt=1;
    $rno=$z['rno'];
    $result1=mysqli_query($a,"select rtype from rooms where rno='$rno';");
    $z1=mysqli_fetch_assoc($result1)
  ?> 
  <tr>
    <td><?php echo $cnt; ?></td>
    <td><?php echo $z['bdate'] ?></td>
    <td><?php echo $z['cindate']; ?></td>
    <td><?php echo $z['coutdate']; ?></td>
    <td><?php echo $z['rno']; ?></td>
    <td><?php echo $z1['rtype']; ?></td>
    <td><?php echo $z['adultno']+$z['childno']; ?></td>
    <td><?php echo $z['totalamount']; ?></td>
    <td><?php echo $z['bstate'] ?></td>
  </tr>
  <?php $cnt=$cnt+1; }}?>
</table>
</body>
</html>
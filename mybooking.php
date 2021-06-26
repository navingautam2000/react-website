  <?php
session_start();
include 'connection.php';
if(isset($_SESSION['uname']))
{
}
else{
    header("Location: {$hostname}/Project/Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/user.css">
<style>
*{   margin: 0;
     padding: 0;
  }
#slide-bar{
 width: 0;
  height: 100%;
  background-color: #F5DEB4;
   transition: 0.5s;
   position: fixed;  
  overflow-x: hidden;
 }
  #nav-slide{
    display: flex;
   flex-direction: column;
   height: 100%;
}
.hbar{
  width: 100%;
   height: 70px;
   background-color: #F5DEB3;
 padding: 5px;
 position: fixed;
 }
 .nav-btn{
            width: 50px;
            height: 50px;
            background-color: #F5DEB4;
            border: 0;
            outline: none;
            padding: 10px;
            cursor: pointer;
            font-size: 25px;
            margin-top: 10px;
            margin-left: 10px;
            position: fixed;
            display: block;
 }
  #close-btn{
 font-weight: bold;
  width: 30px;
 height: 40px;
 font-size: 40px;
 cursor: pointer;
  text-align: center;
  margin-left: 90%;
    transform: rotate(45deg);
  }
#menu{
     list-style: none;
   }
  #menu li{
     padding: 15px;
     font-size: 20px;
     cursor: pointer;
    overflow-x: hidden;
 }
  #menu a{
     text-decoration: none;
     color: black;
 }
  #menu li:hover{
    background-color: red;
    padding: 30px;
      font-size: 20px;
      cursor: pointer;
     text-align: center;
     transition: 0.5s;
 }
#ccontactus{
    background-image: url(../images/view3.jpg);
    background-size: cover;
}
.footer{
    color: white;
    background-color: black;
}


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
<div class="hbar" style="position: fixed; z-index: 1;">
    <div id="unm" style="margin-left: 70px; font-size: 50px; transition:0.5s">
    <?php 
    echo "<h5>Hello ".ucwords($_SESSION['uname'])."</h5>";
    ?>
    </div>
    </div>
    <button class="nav-btn" onclick="nav()" style="z-index: 2;">&#9776;</button>
    
    <div id="slide-bar" style="z-index: 3;">
    <div id="close-btn" onclick="cclose()">+</div>
        <ul id="menu">
            <a href="User.php"><li>Home</li></a>
            <a href="gallery.php"><li>Gallary</li></a>
            <a href="rooms.php"><li>Rooms</li></a>
            <a href="mybooking.php"><li>My Bookings</li></a>
            <a href="Logout.php"><li>Log Out</li></a>
        </ul>
    </div><br><br><br><br><br><br>
<h2 style="margin-left: 20px;">Current Booking</h2><br>
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
  $email=$_SESSION['email'];
  $q=mysqli_query($a,"select * from user where email='$email'");
  $z=mysqli_fetch_assoc($q);
  $uno=$z['uno'];
  $result=mysqli_query($a,"select bid,bdate,cin_date,cout_date,f_rno,rtype,adult_no,child_no,total_amount from booking,rooms where rooms.rno=booking.f_rno and f_uno='$uno'");
  $check=mysqli_num_rows($result);
  
  while($z=mysqli_fetch_assoc($result)){
  ?> 
  <form action="" method="POST" >
  <tr>
    <td><input type="text" name="bno" value="<?php echo $z['bid']; ?>" readonly style="background: transparent; outline:none; border: 0;"></td>
    <td><?php echo $z['bdate'] ?></td>
    <td><?php echo $z['cin_date']; ?></td>
    <td><?php echo $z['cout_date']; ?></td>
    <td><?php echo $z['f_rno']; ?></td>
    <td><?php echo $z['rtype']; ?></td>
    <td><?php echo $z['adult_no']+$z['child_no']; ?></td>
    <td><?php echo $z['total_amount']; ?></td>
    <td><button name="CB" style="height: 30px; width: 100px; background-color: #4CAF50; cursor: pointer; outline: none; color: white; border: 0; border-radius: 5px;">Cancel Booking</button></td>
  </tr>
  </form>
  <?php }?>
</table></center>
<?php
if($check==0){
      echo "<center>Currently Your Are Not Book Any Room</center>";   
    } ?>
    <br>
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
  $result=mysqli_query($a,"select bdate,cindate,coutdate,rno,adultno,childno,totalamount,bstate from booking_history where uno='$uno'");
  $count=mysqli_num_rows($result);
  while($z=mysqli_fetch_assoc($result))
  { static $cnt=1;
    $rno=$z['rno'];
    $result1=mysqli_query($a,"select rtype from rooms where rno='$rno';");
    $z1=mysqli_fetch_assoc($result1)
  ?> 
  <tr>
    <td><?php echo $cnt?></td>
    <td><?php echo $z['bdate'] ?></td>
    <td><?php echo $z['cindate']; ?></td>
    <td><?php echo $z['coutdate']; ?></td>
    <td><?php echo $z['rno']; ?></td>
    <td><?php echo $z1['rtype']; ?></td>
    <td><?php echo $z['adultno']+$z['childno']; ?></td>
    <td><?php echo $z['totalamount']; ?></td>
    <td><?php echo $z['bstate']; ?></td>
  </tr>
  <?php $cnt=$cnt+1; }?>
</table>
<?php
if($count==0)
  {
    echo "<center>Previously you are not book any rooms</center>";
  }?>
</center>

<script>
        function cclose(){
            document.getElementById('slide-bar').style.width="0";
            document.getElementById('unm').style.marginLeft="70px";
            document.getElementById('slide-bar').style.boxShadow="0 0 0 0";
        }
        function nav(){
            document.getElementById('slide-bar').style.width="280px";
            document.getElementById('unm').style.marginLeft="290px";
            document.getElementById('slide-bar').style.boxShadow="0 0 3px 3px gray";
        }
    </script>
</body>
</html>
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
  }
?>
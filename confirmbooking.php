<?php include 'connection.php'; 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Confirm booking</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="./bootstrap-5.0.0-beta1-dist/css/bootstrap.css" rel="stylesheet">
    <script src="./bootstrap-5.0.0-beta1-dist/js/bootstrap.js"></script>
    <style>
      #content{
          text-align:;
          border:2px solid black;
          line-height:55px;
          padding-top:40px;
          padding-bottom:40px;
          background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/gal14.jpg); 
          background-size:cover; 
          color:cornsilk; 
      text-align:center;
      font-size:30px;

      }
      h1{
          color:#dc3545;
          font-weight: bolder;
          text-shadow: white 2px;
      }
     
    </style>
</head>
<body>
  <div class="container" id="content">
  <?php 
$uno=$_SESSION['uno'];
$query="select * from user where uno='$uno';";
$result=mysqli_query($a,$query);
$z=mysqli_fetch_assoc($result);
?>
<h1>  Hotel Green Park </h1>
<form action="" method="POST">
    <?php
    $cdate=date("Y-m-d");
    $cin=$_SESSION['cin'];
    $cout=$_SESSION['cout'];
    $idtype=$_SESSION['idtype'];
    $idno=$_SESSION['idno'];
    $rno=$_SESSION['found'];
    $rtype=$_SESSION['rtype'];
    $adult=$_SESSION['adult'];
    $child=$_SESSION['child'];
    $amount=$_SESSION['amount'];
    $uno=$_SESSION['uno'];
    ?>
<label for=""><b>Name : </b><?php echo $z['uname']; ?><br>
        <label for=""><b>Checkin Date :</b><?php echo $cin; ?><br>
        <label for=""><b>Checkout Date :</b></label><?php echo $cout; ?><br>
         <?php echo $idtype .":"; ?>
        <?php echo $idno; ?><br>
        <label for=""><b>Room NO :</b></label><?php echo $rno; ?><br>
        <label for=""><b>Room Type :</b></label><?php echo $rtype; ?><br>
        <label for=""><b>No of adults :</b></label><?php echo $adult; ?><br>
        <label for=""><b>No of childs :</b></label><?php echo $child;?><br>
        <label for=""><b>Total Amount :</b></label><?php echo $amount; ?><br>
         <button name="cbook" class="btn btn-danger">Confirm Booking</button>
        <button class="btn btn-danger" name="cancel">Cancel</button>
        <?php
        if(isset($_POST['cancel'])){
            header("Location: {$hostname}/Project/rooms.php");
        }
        ?>
</form>
        </div>
</body>
</html>
<?php  
if(isset($_POST['cbook'])){
    $cdate=date("Y-m-d");
    $cin=$_SESSION['cin'];
    $cout=$_SESSION['cout'];
    $idtype=$_SESSION['idtype'];
    $idno=$_SESSION['idno'];
    $rno=$_SESSION['found'];
    $rtype=$_SESSION['rtype'];
    $adult=$_SESSION['adult'];
    $child=$_SESSION['child'];
    $amount=$_SESSION['amount'];
    $uno=$_SESSION['uno'];
    $sql="insert into booking(bdate,cin_date,cout_date,idtype,idno,adult_no,child_no,total_amount,f_rno,f_uno) values ('$cdate','$cin','$cout','$idtype','$idno','$adult','$child','$amount','$rno','$uno');";
    $result=mysqli_query($a,$sql);
    $sql="update rooms set rstate='B' where rno=$rno;";
    $result=mysqli_query($a,$sql);
   echo "<script>alert('Booking Conform');
        window.location='payment.php'</script>";
}
 ?>
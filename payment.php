<?php   include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>payment </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="./bootstrap-5.0.0-beta1-dist/css/bootstrap.css">
    <script src="./bootstrap-5.0.0-beta1-dist/js/bootstrap.js"></script>
    <style>
        *{
            margin: opx;
            padding: opx;
            
        }
        .session{
            margin: 20px;
            padding: 50px;
        }
        h1{
            color: red;
        }
        h2{
            font-size: 80px;

        }
       #name{
           position: absolute;
        margin-left: 900px;

       }
       .cd{
           margin-top: 30px;
           margin-bottom: 30px;
       } 
       #bg{
           background-color:lightblue;
           padding: 30px;
       }
  #button{
     float:right;
     
  }
       </style>
 </head>
<body>
    <div class="container" id="bg">
     <div class="row">
        <div class="col-md-4">
            <h2>Invoice</h2>
        </div>
        <div class="col-md-8" id="name">
            <h1><b style="margin-left:-120px;">Hotel Green Park</b></h1>
            <b>Mg.Road Gangapur Road,<br>
            Nashik, 422001.</b><br>
          <b>  Phno. (1542-2541-2541)</b>
        </div>
     </div>
    </div>
    <div class="container">
<div class="cd">
    <div class="row">
        <div class="col-md-6" id="hd">
            <?php
            $uno=$_SESSION['uno'];
            $rno=$_SESSION['found'];
            $query="select * from rooms where rno='$rno'";
            $result=mysqli_query($a,$query);
            $r=mysqli_fetch_assoc($result);
            $rtype=$r['rtype'];
             $query="select * from user where uno='$uno' ";
             $result=mysqli_query($a,$query);
             $z=mysqli_fetch_assoc($result); 
             $cin=$_SESSION['cin'];
             $cout=$_SESSION['cout'];
             $idno=$_SESSION['idno'];
             $adult=$_SESSION['adult'];
             $child=$_SESSION['child'];
             $amount=$_SESSION['amount'];
             ?>
         <b> Customer  Name  :</b><?php echo $z['uname']; ?><br>
            <b>Mobile NO : </b><?php echo $z['phno']; ?><br>
           <b> Email : </b> <?php echo $z['email']; ?><br>
          </div>
          <div class="col-md-6" >
           <b>   Date </b>:<?php echo date("Y-m-d"); ?><br>
              <b>Recept No:</b><?php echo rand(1000,9999); ?> <br>
          </div>
    </div>
</div>
    </div>
    
    <div class="container">
        <table class="table table-info" >
            <tr>
                <th>Room No </th>
                <th>Room Type </th>
                <th>Checkin Date </th>
                <th>Checkout Date  </th>
                <th>Adult </th>
                <th>child </th>
                <th>Amount </th>
            </tr>
            <tr>
                 <td><?php echo $rno; ?></td>
                  <td><?php echo $r['rtype']; ?></td>
                <td><?php echo $cin; ?></td>
                <td><?php echo $cout ; ?></td>
                <td><?php echo $adult ; ?></td>
                <td><?php echo $child ; ?></td>
                <td><?php echo $amount; ?></td>
    </tr>
    <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
</tr>
<tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
</tr>
<tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
</tr>
<tr>
        <th>Total</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $amount; ?></td>
</tr>
 
        </table>
        
       <a href="rooms.php"> <button class="btn btn-primary"  name="done">Done</button></a>
        <button class="btn btn-primary " onclick="window.print()" id="button">Print</button>
    </div>
    <?php
        if(isset($_POST['done'])){
            header("Location: {$hostname}/Project/rooms.php");
        }
        ?>
</body>
</html>
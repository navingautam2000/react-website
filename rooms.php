<?php 
include 'connection.php';
session_start();
if(isset($_SESSION['uname']))
{
}
else{
    header("Location: {$hostname}/Project/Login.php");
}
?>
<html>
    <head>
    <title>Welcome</title>
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


    *{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
        .nav-btn{
            z-index: 3;
        }
        #slide-bar{
            z-index: 4;
        }
        .cards{
            margin: 50px;
            background-color: white;
            width: 20%;
            border-radius: 5px;
            transition: 0.5s;
        }
        .cards:hover{
            box-shadow: 2px 2px 10px black;
            transition:0.5s
        }
        .image img{
            width: 100%;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .title{
            margin-top: 5px;
            text-align: center;
        }
        .des{
            text-align: center;
        }
        button{
            margin-top: 20px;
            margin-bottom: 10px;
            width: 100px;
            height: 40px;
            background-color: white;
            border:1px solid black;
            border-radius: 5px;
            cursor: pointer;
        }
        .pop-model{
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,0.7);
    position:absolute;
    top:0;
    justify-content:center;
    display:none;
}
.model-content{
    width:500px;
    height:600px;
    background-color:white;
    opacity:1;
    top:15%;
    border-radius: 5px;
    text-align:center;
    position:fixed;
}
.model-ip{
        width: 50%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 0;
        outline:none;
        background: transparent;
}
.model-log{
        width: 50%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin: auto;
        background: linear-gradient(to right,#00FFC6,#00FF85);
        border: 0;
        outline: none;
        border-radius: 30px;
}
.model-log:hover{
        width: 50%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin: auto;
        background:white;
        border: solid #00FFC6;
        outline: none;
        border-radius: 30px;
}
.close{
    margin-left: -450;
    font-size:42px;
    transform: rotate(45deg);
    cursor:pointer;
}
.userl{
        cursor: pointer;
        margin: auto;
        background:transparent;
        border: 0;
        outline: none;
}

    </style>
    </head>
    <body>
    <div class="hbar" style="position: fixed; z-index: 2;">
    <div id="unm" style="text-align: center;">
    <h1>Book Your Room Here</h1>
    </div>
    </div>
    <button class="nav-btn" onclick="nav()">&#9776;</button>
    
    <div id="slide-bar">
    <div id="close-btn" onclick="cclose()">+</div>
        <ul id="menu">
            <a href="User.php"><li>Home</li></a>
            <a href="gallery.php"><li>Gallary</li></a>
            <a href="rooms.php"><li>Rooms</li></a>
            <a href="mybooking.php"><li>My Bookings</li></a>
            <a href="Logout.php"><li>Log Out</li></a>
        </ul>
    </div><br><br><br><br>
    <div style="display:flex; flex-direction: row;">
        <div class="cards">
        <div class="image">
        <img src="images\bedroom.jpg">
        </div>
        <div class="title">
            <h1>Double Room</h1>
        </div>
        <div class="des"><br>
        Sleeps 2 | 1 Queen | 312 ft²
        252 Sq. Ft. Queen/Twin Bed, Pool/Mountain View, stay up to 3 adults, free Breakfast & WiFi<br>
            <form action="" method="POST"><button name="one">Book Now</button></form>
        </div>
            <div style="color:#8E8E8E; font-size:10; margin-left:150px;">
               <?php
               $query="select * from rooms where rtype='double' and rstate='A'";
               $result=mysqli_query($a,$query);
               $z=mysqli_num_rows($result);
               echo $z." Rooms are Available"
               ?>
            </div>
        </div>

        <div class="cards">
        <div class="image">
        <img src="images\bedroom1.jpg">
        </div>
        <div class="title">
            <h1>King Room</h1>
        </div>
        <div class="des"><br>
        Sleeps 2 | 1 King | 1800 ft²
    1800 Sq. ft. luxurious room, living area with dining & private bar, 
    attached Secretarial Room, 
    State of the art Furniture, Pool View, free Breakfast & WiFi
        <br>
        <form action="" method="POST"><button name="two">Book Now</button></form>
        </div>
        <div style="color:#8E8E8E; font-size:10; margin-left:150px;">
               <?php
               include 'connection.php';
               $query="select * from rooms where rtype='king' and rstate='A'";
               $result=mysqli_query($a,$query);
               $z=mysqli_num_rows($result);
               echo $z." Rooms are Available"
               ?>
            </div>
        </div>

        <div class="cards">
        <div class="image">
        <img src="images\bedroom3.jpg" style="height:190px;">
        </div>
        <div class="title">
            <h1>Family Room</h1>
        </div>
        <div class="des"><br>
Sleeps 2 | 1 King | 675 ft²
675 Sq. ft. Suite on top floor with Lavish interiors, 
spacious living area with Minibar, King size bed, pool/mountain view,
 free Breakfast & WiFi
<br>
<form action="" method="POST"><button name="three">Book Now</button></form>
        </div>
        <div style="color:#8E8E8E; font-size:10; margin-left:150px;">
               <?php
               include 'connection.php';
               $query="select * from rooms where rtype='family' and rstate='A'";
               $result=mysqli_query($a,$query);
               $z=mysqli_num_rows($result);
               echo $z." Rooms are Available"
               ?>
            </div>
        </div>

        <div class="cards">
        <div class="image">
        <img src="images\bedroom4.jpg">
        </div>
        <div class="title">
            <h1>Standard Room</h1>
        </div>
        <div class="des"><br>
Sleeps 2 | 1 King | 675 ft²
252 Sq. Ft.,Queen/Twin Bed, Pool/Mountain View, stay up to 3 adults, free Breakfast & WiFi
        <br>
        <form action="" method="POST"><button name="four">Book Now</button></form>
        </div>
        <div style="color:#8E8E8E; font-size:10; margin-left:150px;">
               <?php
               include 'connection.php';
               $query="select * from rooms where rtype='standard' and rstate='A'";
               $result=mysqli_query($a,$query);
               $z=mysqli_num_rows($result);
               echo $z." Rooms are Available"
               ?>
            </div>
        </div>
    </div>
    <div class="pop-model">
        <div class="model-content">
            <div class="close" onclick="closel()">+</div>
            <form action="" method="POST">
            <center style="padding-bottom: 20px;"><h1>Register Here</h1></center>
            <input type="date" class="model-ip" name="cin" required><br>
            <input type="date" class="model-ip" name="cout" required>
            <select class="model-ip" name="idtype" required> 
            <option>Adhar Card</option>
            <option>Driving Licence</option>
            <option>Pan Card</option>
            </select>
            <input type="text" class="model-ip" name="idno" placeholder="ID Number" required>
            <input type="number" min="1" max="5" name="adult" class="model-ip" placeholder="No. Adults" required>
            <input type="number" min="0" max="3" name="child" class="model-ip" placeholder="No. of Childrens" required>
            <div style="margin-left: 0px;"><input type="checkbox" required><label style="font-size: 10;"> Accept All T&C</label></div><br><br>
           <button type="submit" class="model-log" name="cont">Continue</button>
            </form>
        </div>
    </div>
    <script>
    function closel() {
        document.querySelector('.pop-model').style.display='none';
    }
    </script>
    <script>
        function cclose(){
            document.getElementById('slide-bar').style.width="0";
            document.getElementById('slide-bar').style.boxShadow="0 0 0 0";
        }
        function nav(){
            document.getElementById('slide-bar').style.width="280px";
            document.getElementById('slide-bar').style.boxShadow="0 0 3px 3px gray";
        }
    </script>
    </body>
</html>
<?php
include 'connection.php';
if(isset($_POST['one'])){
    $query="select * from rooms where rtype='double' and rstate='A'";
    $result=mysqli_query($a,$query);
    $z=mysqli_num_rows($result);
    $i=101;
    if($z>0){
        echo "<script>document.querySelector('.pop-model').style.display='flex';</script>";
            while($i<=110){
                $sroom=mysqli_query($a,"select * from rooms where rno='$i' and rstate='A'");
                if($p=mysqli_fetch_assoc($sroom)){
                    $_SESSION['found']=$p['rno'];
                }
                $i++;
        }
    }
    if($z==0)
    {
        echo "<script>alert('These Rooms Are Not Available');</script>";
    }
}
else
if(isset($_POST['two'])){
    $query="select * from rooms where rtype='king' and rstate='A'";
    $result=mysqli_query($a,$query);
    $z=mysqli_num_rows($result);
    $i=111;
    if($z>0){
        echo "<script>document.querySelector('.pop-model').style.display='flex';</script>";
            while($i<=120){
                $sroom=mysqli_query($a,"select * from rooms where rno='$i' and rstate='A'");
                if($p=mysqli_fetch_assoc($sroom)){
                    $_SESSION['found']=$p['rno'];
                }
                $i++;
        }
    }
    if($z==0)
    {
        echo "<script>alert('These Rooms Are Not Available');</script>";
    }
}else
if(isset($_POST['three'])){
    $query="select * from rooms where rtype='family' and rstate='A'";
    $result=mysqli_query($a,$query);
    $z=mysqli_num_rows($result);
    $i=121;
    if($z>0){
        echo "<script>document.querySelector('.pop-model').style.display='flex';</script>";
            while($i<=130){
                $sroom=mysqli_query($a,"select * from rooms where rno='$i' and rstate='A'");
                if($p=mysqli_fetch_assoc($sroom)){
                    $_SESSION['found']=$p['rno'];
                }
                $i++;
        }
    }
    if($z==0)
    {
        echo "<script>alert('These Rooms Are Not Available');</script>";
    }
}else
if(isset($_POST['four'])){
    $query="select * from rooms where rtype='standard' and rstate='A'";
    $result=mysqli_query($a,$query);
    $z=mysqli_num_rows($result);
    $i=101;
    if($z>0){
        echo "<script>document.querySelector('.pop-model').style.display='flex';</script>";
            while($i<=110){
                $sroom=mysqli_query($a,"select * from rooms where rno='$i' and rstate='A'");
                if($p=mysqli_fetch_assoc($sroom)){
                    $_SESSION['found']=$p['rno'];
                }
                $i++;
        }
    }
    if($z==0)
    {
        echo "<script>alert('These Rooms Are Not Available');</script>";
    }
}
?>
<?php
if(isset($_POST['cont'])){
    $cdate=date("Y-m-d");
    $cin=$_POST['cin'];
    $cout=$_POST['cout'];
    $idtype=$_POST['idtype'];
    $idno=$_POST['idno'];
    $adult=$_POST['adult'];
    $child=$_POST['child'];
    $rno=$_SESSION['found'];
    $email=$_SESSION['email'];
    $result=mysqli_query($a,"select * from rooms where rno='$rno'");
    $rname=mysqli_fetch_assoc($result);
    $rtype=$rname['rtype'];
    $date1=date_create($cin);
    $date2=date_create($cout);
    $date3=date_create($cdate);
    $diff=date_diff($date1,$date2);
    $differ=(int)$diff->format("%R%a");
    static $check=0;
    if($date1<$date3 || $date2<$date3){
        echo "<script>alert('Dates are Invalid');
            window.location='rooms.php';</script>";
    }
    else if($differ<0)
    {
        echo "<script>alert('Dates Are Invalid');
        window.location='rooms.php'</script>";
    }
    else if($idtype=='Adhar Card'&&strlen($idno)!=12){
        echo "<script>alert('Invalid Adhar Number');
        window.location='rooms.php';</script>";
    }
    else if($idtype=='Driving Licence'&&strlen($idno)!=15){
        echo "<script>alert('Invalid Driving Licence Number');
        window.location='rooms.php';</script>";
    }
    else if($idtype=='Pan Card'&&strlen($idno)!=10){
        echo "<script>alert('Invalid Pan Number');
        window.location='rooms.php';</script>";
    }
    else if($rtype=='double')
    {  
        if($differ<=1){
            $extra=($adult+$child)-2;
            $amount=$extra*1000;
            $amount=$amount+2000;
            $check=1;
        }
        else{
            $extra=($adult+$child)-2;
            $days=1000*$differ;
            $amount=$extra*1000;
            $amount=$amount+$days+2000;
            $check=1;
        }
    }
    else if($rtype=='king')
    {
        if($differ<=1){
            $extra=($adult+$child)-1;
            $amount=$extra*3000;
            $amount=$amount+3000;
            $check=1;
        }
        else{
            $extra=($adult+$child)-1;
            $days=1500*$differ;
            $amount=$extra*3000;
            $amount=$amount+$days+3000;
            $check=1;
        }
    }
    else if($rtype=='family')
    {
        if($differ<=1){
            $extra=($adults+$childs)-5;
            $amount=$extra*3000;
            $amount=$amount+15000;
            $check=1;
        }
        else{
            $extra=($adults+$childs)-5;
            $days=7500*$differ;
            $amount=$extra*3000;
            $amount=$amount+$days+15000;
            $check=1;
        }
    }
    else if($rtype=='standard')
    {
        if($differ<=1){
            $extra=($adults+$childs)-2;
            $amount=$extra*2000;
            $amount=$amount+4000;
            $check=1;
        }
        else{
            $extra=($adults+$childs)-2;
            $days=2000*$differ;
            $amount=$extra*2000;
            $amount=$amount+$days+4000;
            $check=1;
        }
    }
$_SESSION['idno']=$idno;
$_SESSION['cin']=$cin;
$_SESSION['cout']=$cout;
$_SESSION['adult']=$adult;
$_SESSION['child']=$child;
$_SESSION['amount']=$amount;
$_SESSION['idtype']=$idtype;
$_SESSION['rtype']=$rtype;
echo "<script>window.location='confirmbooking.php';</script>";
}
?>
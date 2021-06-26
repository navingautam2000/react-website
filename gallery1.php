<?php 
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
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="bootstrap-5.0.0-beta1-dist/css/bootstrap.css" rel="stylesheet">
    <script src='main.js'></script>
    <link rel='stylesheet' type='text/css' href='../project/CSS/home.css'>
    <link href="../bootstrap-5.0.0-beta1-dist/js/bootstrap.js">
    <script src="../Project/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/user.css">
        <style>
                   .nav-btn{
            z-index: 3;
        }
        #slide-bar{
            z-index: 4;
        }
        *{   margin: 0;
     padding: 0;
  }
#slide-bar{
 width: 0;
  height: 100%;
  background-color: creamson;
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
   height: 90px;
 padding: 5px;
 position: fixed;
 }
 #unm{
     background:transparent;
 }
 .nav-btn{
            width: 50px;
            height: 50px;
            border: 0;
            outline: none;
            background:transparent;
            color:black;
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
    background-color:rgba(244, 190, 97,0.9);
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
    </style>
 
        </style>
</head>
    <body>
    <div class="hbar">
    <div id="unm" style="margin-left: 70px; font-size: 50px; transition:0.5s; font-family:serif;">
    <?php 
    echo "<h3>Hello ".$_SESSION['uname']."</h3>";
    ?>
    </div>
    </div>
    <button class="nav-btn" onclick="nav()">&#9776;</button>
    <div id="slide-bar">
    <div id="close-btn" onclick="cclose()">+</div>
        <ul id="menu" style="margin-left:-30px">
            <a href="User.php"><li>Home</li></a>
            <a href="gallery.php"><li>Gallary</li></a>
            <a href="rooms.php"><li>Rooms</li></a>
            <a href="mybooking.php"><li>My Bookings</li></a>
            <a href="Login.php"><li>Log Out</li></a>
        </ul>
    </div>
    <br> <br><br>
    <div class="container ">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img class="img-fluid img-thumbnail" src="../Project/images/gal1.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img class="img-fluid img-thumbnail" src="../Project/images/gal4.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img class="img-fluid img-thumbnail" src="../Project/images/gal7.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img class="img-fluid img-thumbnail" src="../Project/images/gal2.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img class="img-fluid img-thumbnail" src="../Project/images/gal3.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img class="img-fluid img-thumbnail" src="../Project/images/gal5.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img class="img-fluid img-thumbnail" src="../Project/images/gal6.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img class="img-fluid img-thumbnail" src="../Project/images/gal10.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img class="img-fluid img-thumbnail" src="../Project/images/gal11.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img class="img-fluid img-thumbnail" src="../Project/images/gal8.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img class="img-fluid img-thumbnail" src="../Project/images/gal9.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img class="img-fluid img-thumbnail" src="../Project/images/gal13.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="foot" >
       <div class="row">
           <p class="text-center" style="color:black; padding: 5px;">
            <b>@copyright Hotel Green Park | Developed By: NASA</b></p>
        </div>
    </div>
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
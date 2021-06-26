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
  background-color: rgba(245, 222, 180,0.1);
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
            color:white;
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
    background-color: rgba(255, 255, 255,0.1);
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
    </head>
    <body>
    <div class="nav-btn" id="nav" onclick="nav()">&#9776;</div>
    <div class="name" style="font-family:serif; margin-left:600px; color:white; padding:15px; z-index:5; position:absolute;">
    <?php 
    echo "<h1>Hello ".ucwords($_SESSION['uname'])."</h1>";
    ?>
    
    </div>
    
    <div id="slide-bar">
    <div id="close-btn" onclick="cclose()">+</div>
        <ul id="menu" style="margin-left: -30px;">
            <a href="User.php"><li>Home</li></a>
            <a href="gallery.php"><li>Gallary</li></a>
            <a href="rooms.php"><li>Rooms</li></a>
            <a href="mybooking.php"><li>My Bookings</li></a>
            <a href="Logout.php"><li>Log Out</li></a>
        </ul>
    </div>
    <div class="home" style="flex-direction: column;"><?php include 'LoginHome.php' ?></div>
    <script>
        function cclose(){
            document.getElementById('slide-bar').style.width="0";
            document.getElementById('unm').style.marginLeft="70px";
            document.getElementById('slide-bar').style.boxShadow="0 0 0 0";
            document.getElementById('nav').style.display="block";
        }
        function nav(){
            document.getElementById('slide-bar').style.width="280px";
            document.getElementById('unm').style.marginLeft="290px";
            document.getElementById("nav").style.display="none";
            document.getElementById('slide-bar').style.boxShadow="0 0 3px 3px gray";
        }
    </script>
    </body>
</html>
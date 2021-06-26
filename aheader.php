<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="../Project/bootstrap-5.0.0-beta1-dist/css/bootstrap.css" rel="stylesheet">
    <script src="../Project/bootstrap-5.0.0-beta1-dist/fontawesome-free-5.15.1-web/js/all.js"></script>
    <script src="../bootstrap-5.0.0-beta1-dist/js/bootstrap.js"></script>
    <script src="../Project/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js "></script>
<style>
.menu{
  background-color: black;
  padding:5px;
  margin: 0px;
}
.menu li{
 display: inline-block;
}
.menu li a{
text-decoration: none;
color: white;
margin-right: 10px;
padding:10px;
} 
#logo{
text-align: center;
background-color: lightseagreen;
color: white;
padding: 5px;
 }
 a{
     text-decoration:none;
     color: black;
 }
a{
     color:red;
 }
</style>
</head>
<body>
<div class="header">
 <div class="row" id="logo">
     <h2>Hotel Green Park</h2>
 </div>

<div class="header">
    <div class="row">
        <ul class="menu">
             <li><a href="admin.php">Home</a></li>
             <li><a href="auser.php">User</a></li>
            <li><a href="abooking.php">Booking</a></li>
            <li><a href="abookinghistory.php">Booking History</li>
            <li><a href="aLogout.php">Log out</a></li>
        </ul>
      </div>
</div>
</body>
</html>
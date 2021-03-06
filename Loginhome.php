<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="bootstrap-5.0.0-beta1-dist/css/bootstrap.css" rel="stylesheet">
    <script src='main.js'></script>
    <script src="../Project/bootstrap-5.0.0-beta1-dist/fontawesome-free-5.15.1-web/js/all.js"></script>
    <link href="../bootstrap-5.0.0-beta1-dist/js/bootstrap.js">
    <script src="../Project/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>

 <style>
     *{
    margin:0;
    padding:0;
}
.menu{
    width:100%;
    height: 60px;
    display: block;
    box-align: right;
    z-index: 9;
    text-align: justify;
    margin-left: 220px;
}
#mb{
    margin-top: 10px;
}
.menu ul li{
    box-align:center;
    position: relative;
    cursor: pointer;
    float: left;
    width: 100px;
    height: 60px;
    line-height:60px;
    color:white;
    
}
.menu ul li a{
    color:white;

}
.lbutton{
    cursor: pointer;
    background: transparent;
        border: 0;
        outline: none;
        position: relative;
}
.menu li a:hover{
   color:rgb(24, 24, 24);
}
.menu > ul{
     list-style:none;
     padding:0;
     margin:0;
    display: inline-block;

}
.dropdown{
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    padding:0;   
}
#log:hover{
color: black;
}
.dropdown li{
    display: none;
    color: white;
    text-align: center;
    
}
.dropdown li:hover{
    color:rgb(24, 24, 24);
    display: none;
}
#log:hover .dropdown > li{
    display: block;
}
.session{
padding-top: 70px;
padding-bottom: 70px;    
}
#banner{
    background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/back.jpg);
    background-size: cover;
    background-repeat: no-repeat;
            width:100%;
            height: 740px;
}
#bheading{
color:white;
font-size: 60px;
}
#b-c-height{
    padding-top: 280px;
    font-family:serif;
}

h2{
  
    display: inline-block;
    padding: 10px;
    margin: 0px;
    font-family:serif;
}
#rooms{
    background: #0a0d14;
    height: 600px;

}
#bglight{
    background-color: #0e111a;
    color: white;
    transition-duration: 0.3s;
    font-family:serif;
}
#bglight:hover{
    margin-top: -20px;
    
}
#rooms-heading{
    text-align: center;
    margin-bottom: 20px;
    background-color: #0a0d14;
    color: white;
    font-family:serif;
}

.service-heading{
    text-align: center;
    margin-bottom: 20px;
}
#wcu{
    
}
#WH{
    text-align: center;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 20px;

}
.footer-sidebar
{
    color: black;
    background-color:wheat;
}
ul {
    list-style: none;
}
ul li a{
text-decoration: none;
color: black;
padding-left: 10px;
}
#footer{
    color:black;
background-color:lightsalmon;
}
.pop-model{
    width:100%;
    height:2370px;
    background-color:rgba(0,0,0,0.7);
    position:absolute;
    top:0;
    justify-content:center;
    display:none;
}
.model-content{
    width:500px;
    height:300px;
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
        border-bottom: 1px solid #9999;
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
    position:absolute;
    top:-20px;
    right:0px;
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
#icon{
    text-align: center;
    font-size: 40px;
    transition-property:width ;
    transition-duration: 2s;
    font-family: serif;
}


#contactus{
    background-image: url(../Project/images/camera.jpg);
    background-size:cover;
    background-repeat: no-repeat;
    height: 300px;
    width: 100%;
    font-family:serif;
}
.footer{
    background-color: #0E111A;
    color:white;
}
#lbutton{
   border: 2px solid white;
   color: white;
padding:12px;
background-color: transparent;
border:1px solid white;
}
#lbutton:hover{
    background-color: #E1982B;
    transition: 1s;
    position: relative;
    outline: none;

}
#lbutton::before{
    position: absolute;
    content: "";
    height: 0;
    width: 0;
    border: 1px solid blue;
    bottom:0;
    left:0;
    box-sizing: border-box;
}
#lbutton::after{
    position: absolute;
    content: "";
    height: 0;
    width: 0;
    border: 1px solid blue;
    top:0;
    right:0;
    box-sizing: border-box;
}
#lbutton:hover::before{
    height: 100%;
    width: 118px;
    border: 2px solid white;
    border-right: none;
    border-radius: none;
    border-bottom: none;
    transition: height 0.5s linear, width 0.5s linear;
}
#lbutton:hover::after{
    height: 100%;
    width: 118px;
    border: 2px solid white;
    border-top: none;
    border-left: none;
    transition: height 0.5s linear, width 0.5s linear;
}
 </style>
</head>
<body data-spy="scroll" data-target="#scoll-spy">
  
    <div id="banner" >
        <div class="container ">
            
            <div class="row" X>
                <div class="col-md-6" id="b-c-height">
                    <h1 id="bheading">Hotel Green Park</h1>
                    <h2 class="lead" style="color:white; font-size: 50px;" >We Know Your Comfort.</h2>
                </div>
            </div>
            <button id="lbutton">LEARN MORE</button>
        </div>
    </div>
    
<div class="container session" >
    <center>
    <div class="row"  id="ser">
        <h2 class="text-center mb-5" > Services</h2>
    </div>
  <div class="col-lg-8">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
          </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/bar.jpg.crdownload" class="d-block w-100" height="400px" alt="...">
           <div class="carousel-caption">
            <p style="font-size: 30px; font-family: serif; font-style: italic; color:whitesmoke; "><b>Bar Lounge</b></p>
           </div>
          </div>
          <div class="carousel-item">
            <img src="images/dining.jpg" class="d-block w-100 " height="400px"  alt="...">
           <div class="carousel-caption">
            <p style="font-size: 30px; font-family: serif; font-style: italic; color:whitesmoke; "><b>Dining</b></p>
           </div>
          </div>
          <div class="carousel-item">
            <img src="images/spa.jpg" class="d-block w-100" height="400px"  alt="...">
            <div class="carousel-caption">
                <p  style="font-size: 30px; font-family: serif; font-style: italic; color:white;"><b>Wellness & Spa</b></p>
               </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
   </div>
</center> 
</div>

    <div class="Rooms" id="rooms">    
        <div class="container session">
            <div class="row">
                <h2 id="rooms-heading"><b>Rooms</b></h2>
            <div class="col-lg-3 col-md-6 col-sm-6" id="bglight">
                    <img src="images/bedroom.jpg" 
                    height="150px" width="260px">
                    <h3> Double Room </h3>
            <b>Sleeps 2 | 1 Queen  |  312 ft??</b>
                      <p>  252 Sq. Ft. Queen/Twin Bed, Pool/Mountain View,
                         stay up to 3 adults, <b>free Breakfast & WiFi </b></p>
                 <a href="rooms.php"><button type="button" class="btn btn-danger">
                    Book Now</button> </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="bglight">
                    <img src="images/bedroom1.jpg"
                     height="150px" width="260px">
                    <h3>King Room</h3>
                    <b>Sleeps 2 | 1 King | 1800 ft??</b>
                    <p>1800 Sq. ft. luxurious room, living area with dining & private bar,
                      attached Secretarial Room, State of the art Furniture, Pool View, 
                         <b>free Breakfast & WiFi</b></p>
                         <a href="rooms.php"><button type="button" class="btn btn-danger">
                            Book Now</button> </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="bglight">
                    <img src="images/bedroom4.jpg" height="150px" width="220px">
                    <h3>Family Room</h3>
                    <b>Sleeps 2 | 1 King | 675 ft??</b>
                    <p> 675 Sq. ft. Suite on top floor with Lavish interiors,
                     spacious living area with Minibar, King size bed, pool/ mountain view, 
                     <b>free Breakfast & WiFi</b></p>
                     <a href="rooms.php"><button type="button" class="btn btn-danger">
                        Book Now</button> </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="bglight">
                <img src="images/bedroom3.jpg"
                 height="150px" width="220px">
                <h3>Standard Room</h3>
                <b>Sleeps 2 | 1 King | 675 ft??</b>
                <p>252 Sq. Ft.,Queen/Twin Bed, Pool/Mountain View, stay up to 3 adults,
                    <b>free Breakfast & WiFi</b></p>
                    <a href="rooms.php"><button type="button" class="btn btn-danger">
                        Book Now</button> </a>
        </div>
            </div>
        </div>
    </div>

    <div class="container-fluid session"   >
        <div class="row">
            <h2 class="service-heading"><b>Why Choose Us</b></h2>
            <p id="WH">Our aim isn't only to reach the top, but to redefine our pinnacle. The road is long, 
                but we will make sure to leave no stone unturned to give our guests 
                nothing but the best.</p>
        </div>
    <div class="row" id="wcu" >
        <div class="col-lg-3 col-md-3 col-sm-6" id="icon"> 
            <i class="fa fa-coffee" id="service-box-ico"></i>
            <h3>Free-Breakfast</h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6" id="icon">
            <i  class="fa fa-rss" ></i>
            <h3>Free Hi-speed wifi</h3>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-6" id="icon">
            <i class="fa fa-check-circle" ></i>
            <h3>Lifestyle predered</h3>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-6" id="icon">
            <i class="fas fa-search-location"></i>
            <h3>Central Locatins</h3>
    </div>
    </div>
    </div>
    <div class="container-fluid session" id="contactus">
        <div class="row" id="con">
            <div class="col-lg-4">
               <h2>Hotel Green Park</h2>
               <h4>We know your comfort.</h4>
             </div>
             <div class="col-lg-4">
                 <h2>Newsletter</h2><br>
                 <input type="text" placeholder=" example@gmail.com"> <button type="button" class="btn btn-danger">Subscribe</button>
             </div>
             <div class="col-lg-4">
                 <h1>Contact us </h1>
                 <h5>Phone: +9181547856</h5>
                 <h5>Palolem Down St,Goa</h5>
                 <h5>Mail: hotelgreenpark@gmail.com</h5>
             </div>
        </div>
    </div>

    <div class="footer" >
       <div class="row">
           <p class="text-center" style="font-family:sans-serif;"> @copyright Hotel Green Park | Developed By: NASA</p>
        </div>
    </div>

    <div class="pop-model">
        <div class="model-content">
            <div class="close" onclick="closel()">+</div>
            <br><br><br>
            <form action="adminlogin.php" method="POST">
            <input type="text" class="model-ip" name="aid" placeholder="Admin ID">
            <input type="password" class="model-ip" name="apass" placeholder="Password"><br><br>
            <button type="submit" name="alogin" class="model-log">Login</button>
            </form>
        </div>
    </div>
    <script>
    function userlog() {
        document.querySelector('.pop-model').style.display='flex';
    }
    function closel() {
        document.querySelector('.pop-model').style.display='none';
    }
    </script>
  </body>
</html>
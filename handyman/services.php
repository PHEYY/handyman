<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.log {
  float: left;
  overflow: hidden;
}

.log .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .log:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.log:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .log .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .log {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .log .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
#pot{
      width:100%;
      background:#5F9EA0;

    }

.no{
      float: right;
      margin-right: 2px;
      font-size: 2em;
      padding-top: 40px;

}
a .topnav{
  font-size: 2em;
}
.ft{
background-color: black;

}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: black;
  font-size: 3em;
  padding: 8px 12px;
  position: absolute;
  bottom: 50%;
  width: 100%;
  text-align: center;
  font-weight: bolder;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
..ft{
background-color: black;
clear: both;

}
.foot{
  background-color: black;
  

}
.color-21{
  color: white;
  font-size: 1.2em;


}
.color-20{
  color: white;
  font-size: 1.15em; 
}
.fot .color-20{
  float: right;
  margin-right: 25%;
}

</style>
</head>
<body>

<div id="pot">
             
                    <img src="images/logo1n.jpg" alt="" height="150px">
           
                     <p class="no"><b>+254 706-713-590</b></p> 
                
</div>
<div class="topnav" id="myTopnav">
  <a href="index.php" >Home</a>
  <a href="Services.php" class="active">Services</a>
  <a href="aboutus.php">About Us</a>
  <div class="log">
    <button class="dropbtn">Login 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="customerlogin.php">As Customer</a>
      <a href="fundilogin.php">As Fundi</a>
      </div>
  </div> 
  <div class="log">
    <button class="dropbtn">Register 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="customersignup.php">As Customer</a>
      <a href="fundisignup.php">As Fundi</a>
      </div>
  </div> 
  <a href="application.php">Fundi Application</a>
  <a href="contactus.php">Contact Us</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<div class="row">
 <div class="col-md-7 figure">
<h3>Our Services</h3>
<figure ><img class="fig" src="images/page2-img1.jpg" alt=""></figure>
              <div class="fig">
                Fundi Oncall is a market leader when it comes to providing handy services such as general repairs, installation, rennovation, construction and other handy services be it at homes or commercial buildings. We offer fast and quality services to clients within Nairobi County Fundi Oncall is a market leader when it comes to providing handy services such as general repairs, installation, rennovation, construction and other handy services be it at homes or commercial buildings. We offer fast and quality services to clients within Nairobi County </div>
</div>
<div class="col-md-5 service">
  <h3>Services Offered</h3>
          <ul style="list-style-type:square" class="list">
            <li><a href="customerlogin.php">plumbing</a></li>
            <li><a href="customerlogin.php">carpentry</a></li>
            <li><a href="customerlogin.php"> home and office cleaning</a></li>
            <li><a href="customerlogin.php">electrical wiring,appliance repair and installation</a></li>
            <li><a href="customerlogin.php">painting</a></li>
            <li><a href="customerlogin.php">welding</a></li>
            <li><a href="customerlogin.php">car repair and maintenance</a></li>
            <li><a href="customerlogin.php">construction</a></li>
            <li><a href="customerlogin.php">cooking</a></li>
            <li><a href="customerlogin.php">lawncare</a></li>
            <li><a href="customerlogin.php">glass works</a></li>
          </ul>
</div> 
</div>
<div class="row">
  <div class="col-md-3">
    <div class="box">
    <div class="aligncenter">
        <h4><b>Repairs and Rennovation</b></h4>
    </div>
    <div class="padding">
      <figure class="p2"><img src="images/page2-img2.jpg" alt=""></figure>
      <p class="word"> Our team arrive at your locality with all the tools they need to fix your repairs.If something is beyond repair, we will help you find and install a replacement that fits your specifications and style.</p>
    </div>
  </div>
  </div>
  <div class="col-md-3">
    <div class="box">
    <div class="aligncenter">
        <h4><b>Rennovation</b></h4>
    </div>
    <div class="padding">
      <figure class="p2"><img src="images/page2-img2.jpg" alt=""></figure>
      <p class="word">  We improve damamaged and outdated structures.We can renovate the structure for it to look new and increase its value. From repainting to major alterations to remodeling. We leave your place fresh and looking new</p>
    </div>
  </div>
</div>
  <div class="col-md-3">
   <div class="box">
    <div class="aligncenter">
              <h4><b>General Construction</b></h4>
    </div>
    <div class="padding">
        <figure class="p2"><img src="images/page2-img3.jpg" alt=""></figure>
        <p class="word">  We combine efficient management with expert craftsmanship on every residential construction project. Our finish carpentry crews are recognized for the quality of their work and their attention to detail—ensuring a fine outcome on every project.</p>
    </div>
  </div>
</div>
  <div class="col-md-3">
    <div class="box">
    <div class="aligncenter">
        <h4><b>Installation</b></h4>
    </div>
    <div class="padding">
                <figure class="p2"><img src="images/page2-img4.jpg" alt=""></figure>
                <p class="word" >we install new equipments efficiently for both new construction and remodelling projects.</p>
    </div>
  </div>
</div>
</div>




    
<footer>
  <div class="ft" >
    <div class="foot">
       <div class="fot" >
             <a class="color-21" href="index.php">Home Page</a>|<a class="color-21" href="services.php">Services</a>|<a class="color-21" href="aboutus.php">About Us</a>|<a class="color-21" href="index.php">login</a>|<a class="color-21" href="application.php">Apply for fundi</a>|<a class="color-21" href="contactus.php">Contact Us</a></div>
      <p  class="color-20">Copyright &copy; <a href="#">Fundi Oncall</a> All Rights Reserved. </p>
    </div>
  </div>
</footer>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>
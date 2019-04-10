



<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
             <script src="jquery-3.2.1.min.js"></script>
             <script src="validate.js"></script>
             <script src="validater.js"></script>
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
  .topnav.responsive .log{float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .log .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
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

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
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

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
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
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
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
.about{
  font-size: 1.75em;
  font-family: Arial, Helvetica, sans-serif;
}
.input-group{
  padding: 10px;
  font-size: 1.25em;
}
label{
  padding-right: 5px;

}
#error{
  color: red;
}
.error{
  color: red;
  font-weight: normal;
  font-size: 0.8em;
}
#roow input{
border-radius 4px;
display: block; 
margin-left: 0%;
width: 150%;
height: 5vh;
}


</style>
</head>
<body>
      <script >
                $(document).ready(function(){
             
                $("#register").validate({
                rules:{
                     id:{
                      required:true,
                      minlength:6,
                      maxlength:8,
                      digits:true
                
                    },
                    first_name:{
                      required:true,
                      minlength:1,
                      maxlength:10
                      
                      
                      
                    },
                    last_name:{
                      required:true,
                      minlength:1,
                      maxlength:10
                      
                    },
                   
                      phone:{
                      required:true,
                      minlength:10,
                      maxlength:10 ,
                      digits:true
                    },

                     email:{
                      required:true,
                      email:true
                
                    },
                     uname:{
                      required:true,
                      
                
                    },
                    
                      password:{
                      required:true,
                      minlength:8
                      
                
                    },
                      loc:{
                      required:true,
                      
                    },

                      cpassword:{
                      required:true,
                      minlength:8,
                      equalTo:pass1
                
                    },
                  
                },
                messages:{
                     cpassword:{
                       equalTo:"password Mismatch!"
                       },
                       
                       email:{
                           email:"Enter valid Email"
                         },
                        

                                                             
                }
              });
               
            });
  
   </script>

    
        <div>
            <div id="pot">
                <img src="images/logo1n.jpg" alt="" height="150px">
                <p class="no"><b>+254 706-713-590</b></p> 
            </div>
        <div class="topnav" id="myTopnav">
  <a href="index.php" >Home</a>
  <a href="Services.php">Services</a>
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
      <a href="application.php">As Fundi</a>
      </div>
  </div> 
  <a href="application.php">Fundi Application</a>
  <a href="contactus.php">Contact Us</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>
<div class="hed">
    <h2>Sign up as a customer</h2>
  </div>
  
<form method="post" action="customerlogin.php" id="register">
  <div class="row" id="roow">
    <div class="col-md-5">
  <div class="input-group">
    <label>ID</label>
    <input type="text" name="id" required>
  </div>
  <div class="input-group">
    <label>FIRSTNAME</label>
    <input type="text" name="first_name" required>
  </div>
  <div class="input-group">
    <label>LASTNAME</label>
    <input type="text" name="last_name" required>
  </div>
  <div class="input-group">
    <label>PHONE</label>
    <input type="tel" pattern="\d{4}\d{3}\d{3}" title="'Phone number (Format: 0712345678)'"  name="phone" required>
  </div>
<div class="input-group">
    <label>EMAIL</label>
    <input type="email" name="email" required>
  </div>
</div>

<div class="col-md-5">
  <div class="input-group">
    <label>USERNAME</label>
    <input type="text" name="uname"  required>
  </div>
  <div class="input-group">
    <label>PASSWORD</label>
    <input id="pass1" type="password" name="password" required>
  </div>
  <div class="input-group" >
    <label>CONFIRM PASSWORD</label>
    <input id="cpass" type="password" name="cpassword" required>
  </div>
    <div class="input-group">
    <label>Location:</label>
  <select name="loc">
      <option>Select your subcounty</option>
      <option>Dagoretti North</option>
      <option>Dagoretti South</option>
      <option>Embakasi Central</option>
      <option>Embakasi East</option>
      <option>Embasaki South</option>
      <option>Embakasi North</option>
      <option>Embakasi West</option>
      <option>Kamukunji</option>
      <option>Kasarani</option>
      <option>Kibra</option>
      <option>Langata</option>
      <option>Makadara</option>
      <option>Mathare</option>
      <option>Roysambu</option>
      <option>Ruaraka</option>
      <option>Starehe</option>
      <option>Westlands</option>
  </select>
  </div>
  <div class="input-group">
    <button type="submit" name="register" ><b>Register</b></button>
  </div>


  <div class="input-group">
  <p>
    Already a member? <a href="customerlogin.php">Sign In</a>
  </p>
</div>
</div>
</div>
</form>
<footer>
  <div class="ft" >
    <div class="foot">
       <div class="fot" >
             <a class="color-21" href="index.php">Home Page</a>|<a class="color-21" href="services.php">Services</a>|<a class="color-21" href="aboutus.php">About Us</a>|<a class="color-21" href="index.php">login</a>|<a class="color-21" href="application.php">Fundi Application</a>|<a class="color-21" href="contactus.php">Contact Us</a></div>
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
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
  font-size: 2em;


}
.color-20{
  color: white;
  font-size: 1.5em; 
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


</style>
</head>
<body>
    
        <div>
            <div id="pot">
                <img src="images/logo1n.jpg" alt="" height="150px">
                <p class="no"><b>+254 706-713-590</b></p> 
            </div>
            <div class="topnav" id="myTopnav">
                <a href="index.php" class="active">Home</a>
                <a href="Services.php">Services</a>
                <a href="aboutus.php">About Us</a>
                <div class="dropdown">
                  <button class="dropbtn">Login 
                   <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                  <a href="customerlogin.php">As Customer</a>
                  <a href="fundilogin.php">As Fundi</a>
      </div>
  </div> 
  <a href="aboutus.php">Register As Fundi</a>
  <a href="contacts.php">Contact Us</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>
<div class="hed">
    <h2>Register as a fundi</h2>
  </div>
<form method="post" action="application.php">
  <div class="row">
    <div  class="col-md-4">

  <div class="input-group">
    <label>ID</label>
    <input type="text" name="id">
  </div>
  <div class="input-group" >
    <label>GENDER</label>
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
  </div>
  <div class="input-group">
    <label>FIRSTNAME</label>
    <input type="text" name="fname">
  </div>
  <div class="input-group">
    <label>LASTNAME</label>
    <input type="text" name="lname">
  </div>
  <div class="input-group">
    <label>PHONE</label>
    <input type="tel" pattern="\d{4}\d{3}\d{3}" title="'Phone number (Format: 0712345678)'"  name="phone">
  </div>
<div class="input-group">
    <label>EMAIL</label>
    <input type="email" name="email">
  </div> 
</div>
<div class="col-md-4">
  <div class="input-group">
    <label>AGE</label>
    <input type="number" name="age" min="18" max="60">
</div>
  <div class="input-group">
    <label>LOCATION</label>
    <select name="location">
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
    <label>OCCUPATION</label>
    <input type="text" name="occupation">
  </div>
  <div class="input-group">
    <label>UPLOAD YOUR CV</label>
    <input type="file" name="cv">
  </div>
  <div class="input-group">
    <button type="submit" name="register"><b>Submit</b></button>
  </div>
</div>
</div>
</form>
<footer>
    <div class="ft" >
        <div class="foot">
            <div class="fot" >
                <a class="color-21" href="index.php">Home Page</a>|<a class="color-21" href="services.html">Services</a>|<a class="color-21" href="aboutus.html">About Us</a>|<a class="color-21" href="index.php">login</a>|<a class="color-21" href="application.php">Apply for fundi</a>|<a class="color-21" href="contacts.html">Contact Us</a>
            </div>
            <p class="color-20">Copyright &copy; <a href="#">Fundi Oncall</a> All Rights Reserved.</p>
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
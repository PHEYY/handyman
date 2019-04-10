<?php 
$conn = mysqli_connect('localhost', 'root','', 'project');
$max=date('Y-m-d', strtotime('-18 years'));
$min=date('Y-m-d', strtotime('-60 years'));









 ?>

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
.input{
  padding: 10px;
  font-size: 1.25em;
  display: none;
}
label{
  padding-right: 5px;

}
.hed{
  float: right;
  margin-right: 50%;
  font-size: 1.25em;
}
#response{
  padding-top: 10%;
}
#response, #ok{
  font-size: 1.25em;
  font-family: times new roman;
}
#ok{
  font-weight: bold;
}
footer{
  padding-top: 30%;
}
.input, select{
  display: block;
  width: 150%;
  border-radius: 5px;
  height:6vh;
}
#exp{
  margin-top: 10px;
}
.btn{
  display: none;
}
.error{
  color:red;
  font-weight: normal;
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
                    gender:{
                      required:true
                      
                      
                      
                    },
                    fname:{
                      required:true,
                      minlength:1,
                      maxlength:10
                      
                      
                      
                    },
                    lname:{
                      required:true,
                      minlength:1,
                      maxlength:10
                      
                    },
                   
                      phone:{
                      required:true,
                      minlength:10,
                      maxlength:10,
                      digits:true
                    },

                     email:{
                      required:true,
                      email:true
                
                    },
                     age:{
                      required:true
                      
                
                    },
                    
                      location:{
                      required:true
                    
                      
                
                    },
                      occupation:{
                      required:true
                      
                    },

                      cv:{
                      required:true
                      
                
                    },
                  
                },
                messages:{
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
      <?php include('fay.php');?>
</div>

 <div id="fm">
<div>
    <p><b>You want to become part of us?</b>Fill in the following application form.<p>
    
  </div>

  
<form method="POST" action="experience.php" id="register">
  <div class="row">
    <div class="col-md-1"></div>
    <div  class="col-md-5">
  <div class="input-group">
    <label>ID</label>
    <input class="input" type="text" name="id" required>
  </div>
  <div class="input-group" >
    <label>GENDER</label>
    <input type="radio" name="gender" value="male" required>Male
    <input type="radio" name="gender" value="female">Female
  </div>
  <div class="input-group">
    <label>FIRSTNAME</label>
    <input class="input" type="text" name="fname" required>
  </div>
  <div class="input-group">
    <label>LASTNAME</label>
    <input class="input" type="text" name="lname" required>
  </div>
  <div class="input-group">
    <label>PHONE</label>
    <input class="input" type="tel" pattern="\d{4}\d{3}\d{3}" title="'Phone number (Format: 0712345678)'"  name="phone" required>
  </div>
  <div class="input-group">
    <label>EMAIL</label>
    <input class="input" type="email" name="email" required>
  </div>

</div>
<div class="col-md-5">
   
  <div class="input-group">
    <label>DATE OF BIRTH</label>
    <input class="input" type="date" name="age" min="<?php echo$min;?>" max="<?php echo$max;?>" required>
</div>
  <div class="input-group">
    <label>LOCATION</label>
    <select name="location" required>
      <option></option>
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
    <label>OCCUPATION </label>
    <select name="occupation" required>
      <option></option>
      <option >Carpenter</option>
      <option >Chef</option>
      <option >Cleaner</option>
      <option >Electrician</option>
      <option >Gardener</option>
      <option>Glazier</option>
      <option >Mason</option>
      <option >Mechanic</option>
      <option >Painter</option>
      <option >Plumber</option>
      <option >Transporter</option>
      <option >Welder</option>
    </select> </div>
  
  <div class="input-group">
    <label>UPLOAD YOUR CV</label>
    <input class="input" type="file" name="cv">
  </div>
  <div class="input-group">
    <button class="input" type="submit" name="register"><b>NEXT</b></button>
  </div>
    </form>
</div>
</div>
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
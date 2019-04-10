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
label{
  padding-right: 5px;

}
.cus{
  float:right;
  margin-right: 25%;
}
.hed{
  float:right;
  margin-right: 50%;
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
             
                $("#reg").validate({
                rules:{
                     fname:{
                      required:true,
                      minlength:1
                    
                      
                
                    },
                     lname:{
                      required:true,
                      minlength:1
                     
                    },

                     email:{
                      required:true,
                      email:true
                
                    },
                    
                    
                      telephone:{
                      required:true,
                      minlength:10,
                      maxlength:10,
                      digits:true
                      
                
                    },

                      message:{
                      required:true,
                
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
     <?php include('fay.php'); ?>
</div>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-7">
      
            <h3 class="p1">Contact Form</h3>
            <form id="reg"  action="contactus.php" method="post" enctype="multipart/form-data">
              <fieldset>
                <div>
                <label><span class="text-form">First Name:</span>
                  <input type="text" pattern="[A-Za-z]{1,}" title="enter characters only" name="fname" required>
                </label>
              </div>
               <div>
                <label><span class="text-form">Last Name:</span>
                  <input type="text" pattern="[A-Za-z]{1,}" title="enter characters only" name="lname" required>
                </label>
              </div>
                <div>
                  
                <label><span class="text-form">E-mail:</span>
                  <input type="text" name="email" required>
                </label>
              </div>
              <div>
                <label><span class="text-form">Telephone:</span>
                  <input type="tel" pattern="\d{4}\d{3}\d{3}" title="'Phone number (Format: 0712345678)'" name="telephone" required>
                </label>
              </div>
                <div >
                   <label> Message:</label>
                    <textarea name="message" style="height: 200px; width: 90%"></textarea>
                  </div>
               
                <button type="reset" name="clear">CLEAR</button>
                <button type="submit" name="send">SEND</button>
              </fieldset>
            </form>
            <?php 
             $conn = mysqli_connect('localhost', 'root', '', 'project');
             $query6="select now() as now from dual";
             $result6=mysqli_query($conn, $query6);
             $row6=mysqli_fetch_array($result6);
             $time=$row6['now'];
             echo $time;
             if (isset($_POST['send'])) {
              $fname=$_POST['fname'];
              $lname=$_POST['lname'];
              $email=$_POST['email'];
              $telephone=$_POST['telephone'];
              $message=$_POST['message'];
          $insert="insert into contactus values('', '$time','$fname','$lname','$email',$telephone,'$message','unread')";
          $result=mysqli_query($conn,$insert);}
            ?>
          
    </div>
    <div class="col-md-4">
      
      <h3 class="p1">Our Contacts</h3>
      <span class="glyphicon glyphicon-home"></span><b> NAIROBI</b>
          <dl class="img-indent-bot">
            <dt>P.O BOX 438444-00100, Nairobi Kenya</dt>
            <dd><span class="glyphicon glyphicon-earphone"></span><strong>+254 706 713 590</strong></dd>
            <dd><span class="glyphicon glyphicon-envelope"></span><strong><a href="#" > fundioncallemail@gmail.com</a></strong></dd>
          </dl>
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
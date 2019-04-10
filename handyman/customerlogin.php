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
  font-size: 1.2em;


}
.color-20{
  color: white;
  font-size: 1.15em; 
}
.fot .color-20{
  float: right;
  
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
footer{
  margin-top: 5%;
  
}
.fa{
   color: white;
   font-size: 20px;
   padding:20px; 
}
#error{
  color: red;
  margin-left: 31%;
}

</style>
</head>
<body>
    <script >
                $(document).ready(function(){
             
                $("#reg").validate({
                rules:{
                     id:{
                      required:true,
                      minlength:6,
                      maxlength:8,
                      digits:true
                
                    },
                    first_name:{
                      required:true,
                      maxlength:10
                      
                      
                    },
                    last_name:{
                      required:true,
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
                     uname:{
                      required:true,
                      
                
                    },
                    
                      password:{
                      required:true,
                      minlength:8
                      
                
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
     <?php include('fay.php'); ?>
</div>
  <div>
    <?php 
$conn = mysqli_connect('localhost', 'root','', 'project');
if (isset($_POST['register'])) {
  $id = $_POST['id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $phone=$_POST['phone'];
  $email = $_POST['email'];
  $uname = $_POST['uname'];
  $loc=$_POST['loc'];
  $password= $_POST['password'];
  $cpassword = $_POST['cpassword'];

  if ($id=="" || $first_name==""|| $last_name=="" || $phone==""|| $email==""|| $uname==""|| $password==""|| $cpassword=="") {

    echo "<div id='all_fields> <p>All fields are required!!</p> </div>";
    
  }
  else{
    if($password==$cpassword){
      $query="select * from customer where email='$email' or id=$id";
      $result=mysqli_query($conn,$query);
      $rows= mysqli_num_rows($result);
      if ($rows<1) {
        $save1="select * from customer where user_name='$uname'";
        $res1=mysqli_query($conn,$save1);
        $row1= mysqli_num_rows($res1);
        if ($row1>0) {
         echo '
         <style> #register{
                                display: none;
                              }
                    #loginform{
                              display: none;
                            }
            </style>
       <div id="error">Username already exists!</div>
       <form method="post" action="customerlogin.php" id="reg">
  <div class="row">
    <div class="col-md-4">
  <div class="input-group">
    <label>ID</label>
    <input type="number" name="id" value="'.$id.'" required>
  </div>
  <div class="input-group">
    <label>FIRSTNAME</label>
    <input type="text" name="first_name" value="'.$first_name.'" required>
  </div>
  <div class="input-group">
    <label>LASTNAME</label>
    <input type="text" name="last_name" value="'.$last_name.'" required>
  </div>
  <div class="input-group">
    <label>PHONE</label>
    <input type="number" name="phone" value="'.$phone.'" required>
  </div>
<div class="input-group">
    <label>EMAIL</label>
    <input type="email" name="email" value="'.$email.'" required>
  </div>
</div>
<div class="col-md-4">
<div class="input-group">
    <label>USERNAME</label>
    <input type="text" name="uname" value="'.$uname.'" placeholder="enter your email" required>
  </div>
  <div class="input-group">
    <label>PASSWORD</label>
    <input type="password" name="password" required>
  </div>
  <div class="input-group">
    <label>CONFIRM PASSWORD</label>
    <input type="password" name="cpassword" required>
  </div>
   <div class="input-group">
    <label>Location:</label>
  <select name="loc" value='.$loc.'>
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
         ';
        }
        else{
         $password1 = md5($_POST['password']);    
    $save = "insert into customer values('$id', '$first_name', '$last_name', '$phone','$email', '$uname','$password1', NULL,'','$loc')";
    $res=mysqli_query($conn, $save);
    if($res){
      echo '<div style="color:green; text-align:center;">Registration is successful</div>';
    }
    else{
      echo '
            <style> #register{
                                display: none;
                              }
                    #loginform{
                              display: none;
                            }
            </style>
       <div id="error">An error occurred. Try again! </div>
       <form method="post" action="customerlogin.php" id="reg">
  <div class="row">
    <div class="col-md-4">
  <div class="input-group">
    <label>ID</label>
    <input type="number" name="id" value="'.$id.'" required>
  </div>
  <div class="input-group">
    <label>FIRSTNAME</label>
    <input type="text" name="first_name" value="'.$first_name.'" required>
  </div>
  <div class="input-group">
    <label>LASTNAME</label>
    <input type="text" name="last_name" value="'.$last_name.'" required>
  </div>
  <div class="input-group">
    <label>PHONE</label>
    <input type="number" name="phone" value="'.$phone.'" required>
  </div>
<div class="input-group">
    <label>EMAIL</label>
    <input type="email" name="email" value="'.$email.'" required>
  </div>
</div>
<div class="col-md-4">
<div class="input-group">
    <label>USERNAME</label>
    <input type="text" name="uname" value="'.$uname.'" placeholder="enter your email" required>
  </div>
  <div class="input-group">
    <label>PASSWORD</label>
    <input type="password" name="password" required>
  </div>
  <div class="input-group">
    <label>CONFIRM PASSWORD</label>
    <input type="password" name="cpassword" required>
  </div>
     <div class="input-group">
    <label>Location:</label>
  <select name="loc" value='.$loc.'>
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




      ';
    }
    }
    } 
  else{
    echo '<style> #register{
                                display: none;
                              }
                              #loginform{
                              display: none;
                            }
            </style>
    <div id="error">email /Id already exists!!</div>
       <form method="post" action="customerlogin.php" id="reg">
  <div class="row">
    <div class="col-md-4">
  <div class="input-group">
    <label>ID</label>
    <input type="number" name="id" value="'.$id.'" required>
  </div>
  <div class="input-group">
    <label>FIRSTNAME</label>
    <input type="text" name="first_name" value="'.$first_name.'" required>
  </div>
  <div class="input-group">
    <label>LASTNAME</label>
    <input type="text" name="last_name" value="'.$last_name.'" required>
  </div>
  <div class="input-group">
    <label>PHONE</label>
    <input type="number" name="phone" value="'.$phone.'" required>
  </div>
<div class="input-group">
    <label>EMAIL</label>
    <input type="email" name="email" value="'.$email.'" required>
  </div>
</div>
<div class="col-md-4">
<div class="input-group">
    <label>USERNAME</label>
    <input type="text" name="uname" value="'.$uname.'" placeholder="enter your email" required>
  </div>
  <div class="input-group">
    <label>PASSWORD</label>
    <input type="password" name="password" required>
  </div>
  <div class="input-group">
    <label>CONFIRM PASSWORD</label>
    <input type="password" name="cpassword" required>
  </div>
     <div class="input-group">
    <label>Location:</label>
  <select name="loc" value='.$loc.'>
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
</form>';
  }
}
  else{
    echo'<style> #register{
                                display: none;
                              }
                 #loginform{
                              display: none;
                            }
            </style>
    <div id="error"> <p>Password mismatch!!</p></div>
       <form method="post" action="customerlogin.php" id="reg">
  <div class="row">
    <div class="col-md-4">
  <div class="input-group">
    <label>ID</label>
    <input type="number" name="id" value="'.$id.'" required>
  </div>
  <div class="input-group">
    <label>FIRSTNAME</label>
    <input type="text" name="first_name" value="'.$first_name.'" required>
  </div>
  <div class="input-group">
    <label>LASTNAME</label>
    <input type="text" name="last_name" value="'.$last_name.'" required>
  </div>
  <div class="input-group">
    <label>PHONE</label>
    <input type="number" name="phone" value="'.$phone.'" required>
  </div>
<div class="input-group">
    <label>EMAIL</label>
    <input type="email" name="email" value="'.$email.'" required>
  </div>
</div>
<div class="col-md-4">
<div class="input-group">
    <label>USERNAME</label>
    <input type="text" name="uname" value="'.$uname.'" placeholder="enter your email" required>
  </div>
  <div class="input-group">
    <label>PASSWORD</label>
    <input type="password" name="password" required>
  </div>
  <div class="input-group">
    <label>CONFIRM PASSWORD</label>
    <input type="password" name="cpassword" required>
  </div>
     <div class="input-group">
    <label>Location:</label>
  <select name="loc" value='.$loc.'>
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
</form>';
  }

  
}
}
?>

<form method="post" action="custloginsession.php" id="register">
   <div class="hed">
    <h2>Sign In As A Customer</h2>
  </div>
    <div class="col-md-6 cus">
    <div class="input-group">
    <label>Username</label>
    <input type="text" name="username">
  </div>
    <div class="input-group">
    <label>Password</label>
    <input type="Password" name="password">
  </div>
  <div class="input-group">
    <button type="submit" name="login"><b>Login</b></button>
  </div>
</div>
</form>
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
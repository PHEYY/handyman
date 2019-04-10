<?php
     include('fundiloginsession.php');
     $fundiid=$_SESSION['username'];
     echo$fundiid;

     include('fundisession.php');

     

  ?>
  <!DOCTYPE html>
<html>
<head>
  <title>Edit profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
body {margin:0;font-family:Arial}
#error{
          color:red;
    }
    #success{
      color:green;
    }
    input{
      display:block;
    }

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
.cus{
  float:right;
  margin-right: 25%;
}
.hed{
  float:right;
  margin-right: 50%;
}
#pic{
height: 33vh;
width: 80%;
}
#profile{
      height: 75%;
      width: 70%;
      border-radius: 50%;
      margin-left: 15%;
}
#con{
  height: 90%;
  /*background: red;*/
  width: 100%;
}
 #con #displayprof{
  float: left; /* Commenting this out results in another weird result*/
width: 30%;
padding: 3%;
/*background: blue;*/
box-sizing: border-box;
}
 #con #picture{
  width:30%;
  padding: 3%;
    float:left;
    /*background: red;*/
    box-sizing: border-box;
}
 #con #pass{
   width: 30%;
    padding: 3%;
    box-sizing: border-box;
    /*background: green;*/
    float:left;
}
.lbl{
  /*margin-left: 20%;*/
  font-size: 1.5em;
  font-weight: bolder;
}
.fundi{
  font-size: 20px;

}


</style>
</head>
<body>
    <!--==============================header=================================-->
    <div>
            <div id="pot">
                <img src="images/logo1n.jpg" alt="" height="150px">
                <p class="no"><b>+254 706-713-590</b></p> 
            </div>
          <?php include('fundipage.php'); ?>
</div>
  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'project');
  $query0="select * from fundi where email='$fundiid'";
     $result0=mysqli_query($conn,$query0);
     $row0=mysqli_fetch_array($result0);
     $id=$row0['id'];

$query="select * from fundi where id= $id";
  $result1=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result1);
$first_name=$row["first_name"];
$last_name=$row["last_name"];
$phone=$row["phone"];
$age=$row["age"];
$location=$row["location"];
$image=$row['image'];


  echo '<div id="con">
          <div id="picture">
      <div>
  <label class="lbl">PROFILE PICTURE</label>
  </div>
       <div id="pic">';
  if ($image) {
    echo '<img id="profile" src="'.$image.'">';
  }
  else{
  echo '<img id="profile" src="prof.png">';
      }
  echo'<form method="POST" >
         <input type="file" name= "img" style="font-size:15px; font-weight:bold;" required>
         <input type="submit" name="image" value="change profile" style="font-size:15px; font-weight:bold;">
       </form></div></div>
       <div id="displayprof"><form method="POST" >
  
  <div class="fundi">
    <label>FIRST NAME</label>
    <input type="text" name="fname" value="'.$first_name.'">
  </div>
  <div>
    <label>LAST NAME</label>
    <input type="text" name="lname" value="'.$last_name.'">
  </div>
  <div class="fundi" >
    <label>PHONE</label>
    <input type="number" name="phone" value="'.$phone.'">
  </div>
  <div class="fundi">
    <label>AGE</label>
    <input type="number" name="age" min="18" max="60" value="'.$age.'">
</div>
    <div class="fundi">
    <label>LOCATION</label>
    <select name="location">
      <option>'.$location.'</option>
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

  <div class="fundi">
  <input type="submit" value="change password" name="change" style="font-size:20px; font-weight:bold;">
  <input type="submit" name="update" value="EDIT" class="btn" style="font-size:20px; font-weight:bold;">
  </div>
</form></div>';
       
 
if (isset($_POST['image'])) {
  $image=$_POST['img'];
  $qpic="update fundi set image='$image' where id='$id'";
  $respic=mysqli_query($conn,$qpic);
 echo'<meta http-equiv="refresh" content="0">';
}

  if (isset($_POST['update'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone=$_POST['phone'];
  $age = $_POST['age'];
  $location= $_POST['location'];
 


 if ($fname==""|| $lname=="" || $phone==""||$age=="" ||$location=="") {

    echo "<div id='all_fields> <p>All fields are required!!</p> </div>";
    # code...
  }
  else{
    $save ="update fundi set first_name='$fname', last_name='$lname', phone='$phone', age=$age, location='$location' where id=$id";
    if(mysqli_query($conn, $save)){
      echo '<div> inserted successfully</div>';
      // echo'<meta http-equiv="refresh" content="0">';
    } 
  else{
echo'<div id="all_fields"> <p>error!!</p></div>';
 // echo'<meta http-equiv="refresh" content="0">';
  }
  }
}
if(isset($_POST['change'])){
   echo'<div id="pass"><form method="POST" id="fpass" >
               <label class="fundi">Username</label><input type="text" name="username" required>
               <label class="fundi">Old Password</label><input type="password" name="opass" required>
               <label class="fundi">New Password</label><input type="password" name="newpass" required>
               <label class="fundi">Re-enter New Password</label><input type="password" name="newpass2" required>
               <input class="fundi" type="submit" name="changepass" style="font-size:20px; font-weight:bold;">
        </form> </div></div>';
}
if(isset($_POST['changepass'])){
  $uname=$_POST['username'];
  $opass1=$_POST['opass'];
  $opass=md5($opass1);
  $newpass=$_POST['newpass'];
  $newpass2=$_POST['newpass2'];

 $sql="select * from fundi where email='$fundiid'";
  $outcome=mysqli_query($conn,$sql);
  $rows=mysqli_fetch_array($outcome);
  $oldpass=$rows['password'];
  if($opass==$oldpass){
     if($newpass==$newpass2){
       $newpass3=md5($newpass);
          $query2="update fundi set password='$newpass3' where email='$fundiid'";
          $result2=mysqli_query($conn,$query2);
          if($result2){
                      echo'<div id="success">Password Changed Successfully</div>';
          }
          else{ 
               echo'<style> 
                           #fpass{
                                 display: none;
                           }
                    </style>
               <div id="error">something went wrong.Try again!</div>
               <div id="pass"><form method="POST" action="fundiedit.php">
               <label class="fundi">Username</label><input type="text" name="username" value="'.$uname.'" required>
               <label class="fundi">Old Password</label><input type="password" name="opass" required>
               <label class="fundi">New Password</label><input type="password" name="newpass" required>
               <label class="fundi">Re-enter New Password</label><input type="password" name="newpass2" required>
               <input class="fundi" type="submit" name="changepass" style="font-size:20px; font-weight:bold;">
        </form> </div></div>';
          }
     }
     else{
      echo'
                  <style> 
                           #fpass{
                                 display: none;
                           }
                    </style><div id="error">Password Mismatch! Make sure you enter matching passwords</div>
           <div id="pass"><form method="POST" action="fundiedit.php" >
               <label class="fundi">Username</label><input type="text" name="username"  value="'.$uname.'" required>
               <label class="fundi">Old Password</label><input type="password" name="opass" required>
               <label class="fundi">New Password</label><input type="password" name="newpass" required>
               <label class="fundi">Re-enter New Password</label><input type="password" name="newpass2" required>
               <input class="fundi" type="submit" name="changepass" style="font-size:20px; font-weight:bold;">
        </form> </div></div>';
     }
  }
  else{
    echo'<style> 
                           #fpass{
                                 display: none;
                           }
           </style>
    <div id="error">Hmmm... that is not the correct password</div>
    <div id="pass"><form method="POST" action="fundiedit.php">
               <label class="fundi">Username</label><input type="text" name="username" value="'.$uname.'" required>
               <label class="fundi">Old Password</label><input type="password" name="opass" required>
               <label class="fundi">New Password</label><input type="password" name="newpass" required>
               <label class="fundi">Re-enter New Password</label><input type="password" name="newpass2" required>
               <input class="fundi" type="submit" name="changepass" style="font-size:20px; font-weight:bold;">
        </form> </div></div>';
  }
}
?>

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
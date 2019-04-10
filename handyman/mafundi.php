<?php
     include('adminloginsession.php');
     $adminid=$_SESSION['username'];
     echo$adminid;

     
  include('adminsession.php');

     

  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Home Page</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <style type="text/css">
  body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
  width: 100%;
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
  .wrapper{
    width:100%;
      background:#5F9EA0;
      color: black;
      height: 150px;

  }
  .img{
    height: 150px;
    float: left;
    margin-left: 0px
  }
  .img img{
height: 150px;
width:150px;
  }
  #admin{
    color: black;
    font-family: times new roman;
    padding-top: 90px;
    font-weight: bolder;
    float: right;
    margin-right: 0%;

  }
  #log {
    
    padding-top: 90px;
    float: right;
    font-weight: bolder;
  }
  .log{
    color: black;
    font-family: times new roman;
    font-weight: bolder;
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
footer{
  padding-top: 30%;
}
td{
  color: black;
}


  </style>
</head>
<body>
  <div>
   <div class=" wrapper">
              <div class="img" >
               <img src="images/logo1n.jpg" alt="LOGO" >
              </div>
              <div class="admin ">
                <h1 id="admin">Admin</h1>
              </div>
  </div>
            
<div class="topnav" id="myTopnav">
  <a  href="adminpg1.php">home</a>
  <a  href="adminvieworders.php"> Active Orders</a>
  <a href="adminorderhistory.php">Orders</a>
  <a class="active" href="mafundi.php">Fundis</a>
  <a href="customers.php">Customers</a>
   <a href="addfundi.php">Applications</a>  
  <a href="income.php">welcome</a>  
  <a href="adminsession.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
        
  </div>
  <div class="parent">
    <form method="POST" id="date">

  <label>Fundi:</label>
    <select name="fundi">
      <option>select Fundi</option>';
      <option >Carpenter</option>';
      <option >Chef</option>';
      <option >Cleaner</option>';
      <option >Electrician</option>';
      <option >Gardener</option>';
      <option>Glazier</option>';
      <option >Mason</option>';
      <option >Mechanic</option>';
      <option >Painter</option>';
      <option >Plumber</option>';
      <option >Transporter</option>';
      <option >Welder</option>';
    </select>
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
<input type="submit" name="submit" value="VIEW">
</form>
  	 <?php  
$conn = mysqli_connect('localhost', 'root','', 'project');

$query6="select now() as now from dual";
  $result6=mysqli_query($conn, $query6);
  $row6=mysqli_fetch_array($result6);
  $time=$row6['now'];

  $queryd="delete from fundi where status='dormant'  and date_confirmed<=DATE_SUB(now(),INTERVAL 1 DAY_MINUTE);";
  $resultd=mysqli_query($conn,$queryd);

if (isset($_POST['submit'])) {
   $query1="select * from fundi";
  $result1=mysqli_query($conn,$query1);

  echo " <table>
<tr>
<th>ID</th>
<th>Gender</th>
<th> First Name</th>
<th>Last Name</th>
<th> Phone</th>
<th>Email</th>
<th>Age</th>
<th>Location</th>
<th>Speciality</th>
<th>Years of Expirience</th>
<th>Action</th>
</tr>";
while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
echo '<tr>';
echo '<td>'.$row["id"].'</td>';
echo '<td>'.$row["gender"].'</td>';
echo'<td>'.$row["first_name"].'</td>';
echo'<td>'.$row["last_name"].'</td>';
echo'<td>'.$row["phone"].'</td>';
echo'<td>'.$row["email"].'</td>';
echo '<td>'.$row["age"].'</td>';
echo'<td>'.$row["location"].'</td>';
echo'<td>'.$row["occupation"].'</td>';
echo'<td>'.$row["years"].'</td>';
echo '<td><form method="POST" ><input id="fundiid" type="text" name="fundiid" value="'.$row["id"].'">
<input type="submit" name="edit" value="edit"></form></td>';
echo '<td><form method="POST" ><input id="fundiid" type="text" name="fundiid" value="'.$row["id"].'">
<input type="submit" name="delete" value="delete"></form></td>';
echo'</tr>';  
}


  echo"</table>";

   if(isset($_POST['edit'])){
$fundi=$_POST['fundiid'];

 $query="select id, gender, first_name, last_name, phone, email, age, location, occupation, years from fundi where id= $fundi";
  $result1=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
 $id=$row["id"];
$gender=$row["gender"];
$first_name=$row["first_name"];
$last_name=$row["last_name"];
$phone=$row["phone"];
$email=$row["email"];
$age=$row["age"];
$location=$row["location"];
$occupation=$row["occupation"];
$years=$row["years"];
      echo '<form method="post">
  
  <div class="fundi">
    <label>ID</label>
    <input type="text" name="id" value="'.$id.'">
  </div>
  <div  >
    <label>GENDER</label>
    <select name="gender">
      <option>'.$gender.'</option>
      <option>Male</option>
      <option>Female</option>
      </select>
  </div>
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
<div >
    <label>EMAIL</label>
    <input type="email" name="email" value="'.$email.'">
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
  <div >
    <label>OCCUPATION</label>
    <input type="text" name="occupation" value="'.$occupation.'">

  </div>
  <div class="fundi">
    <label>YEARS OF EXPIRIENCE</label>
    <input type="text" name="years" value="'.$years.'">
  </div>
  <div class="fundi">
  <input type="submit" name="update" value="update" class="btn">
  </div>
</form>';
} 

if (isset($_POST['delete'])) {
  $fundi=$_POST['fundiid'];
$query2= "delete from fundi where id=$fundi";
$result2=mysqli_query($conn,$query2);
if ($result2) {
  echo "<div> Deleted successfully.</div>";
}
else{
  echo "<div> Try again</div>";
}

}

if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $gender = $_POST['gender'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone=$_POST['phone'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $location= $_POST['location'];
  $occupation = $_POST['occupation'];
  $years = $_POST['years'];

    $save = "update fundi set id=$id, gender='$gender', first_name='$fname', last_name='$lname', phone='$phone', email='$email', age='$age',location='$location', occupation='$occupation', years='$years' where id=$id";
    if(mysqli_query($conn, $save)){
      echo '<div id="all_fields"> <p>updated successfully</p></div>';
      header('location:fundi.php');
    } 
  else{
echo'<div id="all_fields"> <p>error!!</p></div>';
  
  }
}
}
  

 







?>
</div>
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
</body>
</html>

<?php
     include('adminloginsession.php');
     $adminid=$_SESSION['username'];
     $q="select * from admin";
     $r=mysqli_query($conn,$q);
     $rowr=mysqli_fetch_array($r);
     $name=$rowr['first_name'];
    

     
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
#fail{
  color: red;
  font-weight: bold;
  text-align: center;
  font-size: 15px;
}
#success{
   color: green;
  font-weight: bold;
  text-align: center;
  font-size: 15px;
}
#income{
  color: maroon;
  font-size: 2em;
 
}
#rec{
font-weight: bolder;
  color: red;
  font-size: 1.5em;
  margin-left: 25%;
}
#tp{
  
  border-bottom: solid;
}
.im{
    height: 150px;
    width: 150px;
    margin-left: 0%;
    
  }
     #ad{
    color: black;
    font-family: times new roman;
    font-weight: bolder;
    float: right;
    margin-right: 0%;
    font-size: 1.25em;
    margin-top: -10%;

  }
  #income{
  color: maroon;
  font-size: 2em;
 
}
footer{
  margin-top: 30%;
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
  <a href="adminvieworders.php"> Active Orders</a>
  <a href="adminorderhistory.php">Orders</a>
  <a class="active" href="fundis.php">Fundis</a>
  <a href="susfundis.php">Suspended fundis</a>
  <a href="customers.php">Customers</a>
   <a href="addfundi.php">Applications</a> 
   <a href="adminincome.php">Payments</a>
   <a href="messages.php">Messages</a> 
  <a>welcome <?php echo$name; ?></a>  
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
<button onclick="printContent('receipt')" style=" margin-left:90%; width:10%;">Print</button>
  	 <?php 
     $conn = mysqli_connect('localhost', 'root','', 'project');
     $query6="select now() as now from dual";
  $result6=mysqli_query($conn, $query6);
  $row6=mysqli_fetch_array($result6);
  $time=$row6['now'];
     if (isset($_POST['submit'])) {
        $fundi=$_POST['fundi'];
        $loc=$_POST['loc'];
        $query1="select * from fundi where status not in ('suspended') and occupation='$fundi' and location='$loc'";
  $result1=mysqli_query($conn,$query1);
  $rowcheck1=mysqli_num_rows($result1);
if ($rowcheck1>0) {
  echo '
  <style>
         #receipt{display:none;}
  </style>
<table class="table bordered"><tr><th id="income">'.$fundi.'s in '.$loc.'</th></tr></table>';
  echo '
  <style>
      #fundiid{
              display:none;
            }
      </style><table id="table" class="table bordered">
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
</tr>';
 
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
echo'<td>'.$row["years"].' years</td>';
echo '<td><form method="POST" >
<input style="display:none;" id="" type="text" name="fundiid" value="'.$row["id"].'">
<input style="display:none;" id="" type="text" name="fundi" value="'.$fundi.'">
<input style="display:none;" id="" type="text" name="loc" value="'.$loc.'">
<input type="submit" name="delete" value="suspend"></form></td>';
echo'</tr>';  
}


  echo"</table>";

   echo '<pre id="receipt"><div><div id="tp"><div class="im">
               <img src="images/logo1n.jpg" alt="LOGO" height="150px" width="150px" style="float:left;" >
              </div>
              <div class="admin ">
<h1 id="ad">
Fundi Oncall,<br>
 P.O BOX 438444-00100,<br>
Nairobi Kenya.<br>
 </h1>
</div>

</div>
  <table><tr><th id="income">'.$fundi.'s in '.$loc.'</th></tr></table>';
  echo '
  <style>
      #fundiid{
              display:none;
            }
      </style><table id="table" class="table bordered">
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

</tr>';
$query1="select * from fundi where status not in ('suspended') and occupation='$fundi' and location='$loc'";
  $result1=mysqli_query($conn,$query1);
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
echo'<td>'.$row["years"].' years</td>';
echo '<td><form method="POST" >
<input style="display:none;" id="" type="text" name="fundiid" value="'.$row["id"].'">
<input style="display:none;" id="" type="text" name="fundi" value="'.$fundi.'">
<input style="display:none;" id="" type="text" name="loc" value="'.$loc.'">';
echo'</tr>';  
}


  echo"</table></div></pre>";
  
}
else{
  echo '<div id="rec">There are no '.$fundi.'s in '.$loc.'</div>';
}
}



if (isset($_POST['delete'])) {
  $fundiid=$_POST['fundiid'];
    $fundi=$_POST['fundi'];
        $loc=$_POST['loc'];
$query2= "update fundi set status='suspended' where id=$fundiid";
$result2=mysqli_query($conn,$query2);
if ($result2) {
  $query4="select * from fundi where status not in('suspended') and occupation='$fundi' and location='$loc'";
  $result4=mysqli_query($conn,$query4);
  $checkrow=mysqli_num_rows($result4);
  echo '<div id="success"> Fundi suspended.</div>';
 
  if($checkrow>0){
    echo '<table class="table bordered"><tr><th id="income">'.$fundi.'s in '.$loc.'</th></tr></table>';
  
  echo '
  <style>
      #fundiid, #table{
              display:none;
            }
      </style>
<table class="table bordered">
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
</tr>';
while($row4=mysqli_fetch_array($result4,MYSQLI_ASSOC)){
echo '<tr>';
echo '<td>'.$row4["id"].'</td>';
echo '<td>'.$row4["gender"].'</td>';
echo'<td>'.$row4["first_name"].'</td>';
echo'<td>'.$row4["last_name"].'</td>';
echo'<td>'.$row4["phone"].'</td>';
echo'<td>'.$row4["email"].'</td>';
echo '<td>'.$row4["age"].'</td>';
echo'<td>'.$row4["location"].'</td>';
echo'<td>'.$row4["occupation"].'</td>';
echo'<td>'.$row4["years"].'</td>';
echo '<td><form method="POST"  action="fundiaction.php"><input id="fundiid" type="text" name="fundiid" value="'.$row4["id"].'">
<input type="submit" name="edit" value="edit"></form></td>';
echo '<td><form method="POST" ><input id="fundiid" type="text" name="fundiid" value="'.$row4["id"].'">
<input type="submit" name="delete" value="suspend"></form></td>';
echo'</tr>';  
}


  echo"</table>";
}
 else{
    echo '<div id="rec">There is no records for '.$fundi.'s in '.$loc.'</div>';
  }
  
}
else{
  echo '<div id="fail"> Try again</div>';
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
   <script>
      function printContent(el){
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
      }
   </script>
</body>
</html>

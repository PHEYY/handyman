
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
  padding-top: 28%;
}
.editform{
  width:40%;
  margin-left: 30%;
  border:solid 2px #5F9EA0 ;
  margin-top: 3vh;
  border-radius: 5px;
  

}
 #heading{
  width: 100%;
  height: 20vh;
  background-color: #5F9EA0;
  font-weight: bold;
  font-size: 22px;
  text-align: center;
}
.editform input{
  display: block;
  border-radius: 5px;
  height: 6vh;
  width: 80%;
  margin-bottom: 10px;
  margin-left: 20px;
}
.editform label{
  margin-left: 20px;
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
#app{
  color: maroon;
  font-size: 1.75em;
  
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
#fm{
  width: 50%;
  border-style: inset;
  margin-left: 25%;




}
#fm input{
  display:block;
  margin:10px;

}
#fm label{
  display:block;
  margin:10px;

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
 <a href="adminpg1.php">home</a>
  <a href="adminvieworders.php"> Active Orders</a>
  <a href="adminorderhistory.php">Orders</a>
  <a href="fundis.php">Fundis</a>
  <a   href="susfundis.php">Suspended fundis</a>
  <a href="customers.php">Customers</a>
   <a class="active" href="addfundi.php">Applications</a> 
   <a href="adminincome.php">Payments</a> 
   <a href="messages.php">Messages</a>
  <a>welcome <?php echo$name; ?></a>  
  <a href="adminsession.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
        
  </div>
  <button onclick="printContent('receipt')" style=" margin-left:90%; width:10%;">Print</button>
  <?php  
$conn = mysqli_connect('localhost', 'root','', 'project');
  $query1="select * from application where status='pending' order by date asc";
  $result1=mysqli_query($conn,$query1);
  $rowcheck=mysqli_num_rows($result1);
if($rowcheck){
  echo '<style>
         #receipt{display:none;}
  </style>
   <table id="app"><tr><th>APPLICATIONS</th></tr></table>';
  echo ' <table class="table bordered" id="applicants">

<tr>
<th>Date</th>
<th>ID</th>
<th>Gender</th>
<th> First Name</th>
<th>Last Name</th>
<th> Phone</th>
<th>Email</th>
<th>Age</th>
<th>Location</th>
<th>Speciality</th>
<th>CV</th>
<th>Action</th>
</tr>';
while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
echo '<tr>';
echo '<td>'.$row["date"].'</td>';
echo '<td>'.$row["id"].'</td>';
echo '<td>'.$row["gender"].'</td>';
echo'<td>'.$row["first_name"].'</td>';
echo'<td>'.$row["last_name"].'</td>';
echo'<td>'.$row["phone"].'</td>';
echo'<td>'.$row["email"].'</td>';
echo '<td>'.$row["age"].'</td>';
echo'<td>'.$row["location"].'</td>';
echo'<td>'.$row["occupation"].'</td>';
echo'<td>'.$row["cv"].'</td>';
echo '<td><form method="POST" ><input style="display:none;" id="fundiid" type="text" name="fundiid" value="'.$row["id"].'">
<input type="submit" name="edit" value="ACTION"></form></td>';

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

</div> <table id="app"><tr><th>APPLICATIONS</th></tr></table>';
  echo ' <table class="table bordered" id="applicants">

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
<th>CV</th>

</tr>';
 $query1="select * from application where status='pending'";
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
echo'<td>'.$row["cv"].'</td>';
echo '<td><form method="POST" ><input style="display:none;" id="fundiid" type="text" name="fundiid" value="'.$row["id"].'">';
echo'</tr>';  
}


  echo"</table></div></pre>";
  }
  else{
    echo'<div id="fail">No More Applicants</div>';
  }

?>
<?php
 $conn = mysqli_connect('localhost', 'root','', 'project');
 $query6="select now() as now from dual";
  $result6=mysqli_query($conn, $query6);
  $row6=mysqli_fetch_array($result6);
  $time=$row6['now'];

   if(isset($_POST['edit'])){
$fundi=$_POST['fundiid'];

 $query="select * from application where id= $fundi";
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

      echo '<style>
                    #applicants{
                               display:none;
                    }
                     #app{
                               display:none;
                    }
            </style>
<div id="fm">
<form method="post" action="addfundi.php"  class="editform">
  <div id="heading">APPLICANT DETAILS</div>
  <div class="fundi">
    <label>ID</label>
    <input type="text" name="id" value="'.$id.'" readonly>
  </div>
  <div  >
    <label>GENDER</label>
    <select name="gender">
      <option>'.$gender.'</option>
      
      </select>
  </div>
  <div class="fundi">
    <label>FIRST NAME</label>
    <input type="text" name="fname" value="'.$first_name.'" readonly>
  </div>
  <div>
    <label>LAST NAME</label>
    <input type="text" name="lname" value="'.$last_name.'" readonly>
  </div>
  <div class="fundi" >
    <label>PHONE</label>
    <input type="number" name="phone" value="'.$phone.'" readonly>
  </div>
<div >
    <label>EMAIL</label>
    <input type="email" name="email" value="'.$email.'" readonly>
  </div>
  <div class="fundi">
    <label>AGE</label>
    <input type="number" name="age" min="18" max="60" value="'.$age.'" readonly>
</div>
    <div class="fundi">
    <label>LOCATION</label>
    <input type="text" name="location" value="'.$location.'" readonly>
    </select>
  </div>
  <div >
    <label>OCCUPATION</label>
    <input type="text" name="occupation" value="'.$occupation.'" readonly>

  </div>
  <div class="fundi">
    <label>YEARS OF EXPIRIENCE</label>
    <input type="text" name="years" value="'.$years.' Years" readonly>
  </div>
  <div><label>Experiences</label>';
   $querye="select * from experience where applicant_id= $fundi";
  $qresulte=mysqli_query($conn,$querye);
  echo'
     <table class="table bordered">
      <tr><th>Company name</th><th>Post</th><th>Duration</th><th>Start Date</th><th>End Date</th><th>Reason for quitting</th></tr>';
     while ($qrowe=mysqli_fetch_assoc($qresulte)) {
    echo '<tr><td>'.$qrowe['company_name'].'</td><td>'.$qrowe['post'].'</td><td>'.$qrowe['years'].' years</td><td>'.$qrowe['start_date'].'</td><td>'.$qrowe['end_date'].'</td><td>'.$qrowe['quitting_reason'].'</td>
     </tr>';
   }
  echo'</table></div>
  <div class="fundi">
  <input style="margin-bottom:5px;" type="submit" name="add" value="ADD" class="btn">
  <input type="submit" name="reject" value="REJECT" class="btn">
  </div>

</form></div>';
   
}
if (isset($_POST['add'])) {
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
  $code=rand(1000,9999);

  if ($id=="" || $gender=="" || $fname==""|| $lname=="" || $phone==""|| $email==""|| $age=="" ||$location==""|| $occupation==""|| $years=="") {

    echo "<div id='all_fields> <p>All fields are required!!</p> </div>";
    # code...
  }
  else{
    $update="update application set status ='processed' where id=$id";
    $resupdate=mysqli_query($conn,$update);
    $save = "insert into fundi values('$id', '$gender', '$fname', '$lname', '$phone','$email', '$age','$location', '$occupation', '$years','dormant',NULL, $code,'unused','$time',NULL,NULL)";
    if(mysqli_query($conn, $save)){
      echo '<div id="success"> inserted successfully</div>';  
}
 
  else{
echo'<div id="fail"> <p>Already processed</p></div>';
  }
  }
  $retrieve="select * from fundi where id='$id' ";
  $results=mysqli_query($conn,$retrieve);
  $rows=mysqli_fetch_array($results);
  $vcode=$rows['code'];
  
            $mailto ="$email";
            $mailSub = "Fundi Oncall";
            $mailMsg = "Kind regards,<br>
                        HR-Fundi Oncall. ";
            $custname="$fname";
            $details="<p>Congratulations !We are happy to inform you that you have been selected as part of Fundi Oncall team.</p>
              <p> use the following verification code $vcode to create an account <a href='localhost/mafundi/handyman/fundisignup.php'>here</a></p>";
            $greetings="Dear $fname";
            $mailMessage ="$greetings,<br>$details<br>$mailMsg";
            require 'PHPMailer-master/PHPMailerAutoload.php';
            $mail = new PHPMailer();
            $mail ->IsSmtp();
            $mail ->SMTPDebug = 0;
            $mail ->SMTPAuth = true;
            $mail ->SMTPSecure = 'ssl';
            $mail ->Host = "smtp.gmail.com";
            $mail ->Port = 465; // or 587
            $mail ->IsHTML(true);
            $mail ->Username = "fundioncallemail@gmail.com";
            $mail ->Password = "0706713590";
            $mail ->SetFrom("fundioncallemail@gmail.com");
            $mail ->Subject = $mailSub;
            $mail ->Body = $mailMessage;
            $mail ->AddAddress($mailto);

                if(!$mail->Send()) {
                       echo '<div id="fail">Mail Not Sent</div>';
                }
                else{
                    echo '<div id="success">Mail Sent successfully.</div>';

                }
                 $query2= "update application set status='processed' where id=$id";
                 $result2=mysqli_query($conn,$query2);
                 if ($result2) {
                $query1="select * from application where status='pending' ";
                $result1=mysqli_query($conn,$query1);

  echo '<style>#applicants{display:none;}</style>
   <table class="table bordered">
<tr>
<th>Date</th>
<th>ID</th>
<th>Gender</th>
<th> First Name</th>
<th>Last Name</th>
<th> Phone</th>
<th>Email</th>
<th>Age</th>
<th>Location</th>
<th>Speciality</th>
<th>CV</th>
<th>Action</th>
</tr>';
while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
echo '<tr>';
echo '<td>'.$row["date"].'</td>';
echo '<td>'.$row["id"].'</td>';
echo '<td>'.$row["gender"].'</td>';
echo'<td>'.$row["first_name"].'</td>';
echo'<td>'.$row["last_name"].'</td>';
echo'<td>'.$row["phone"].'</td>';
echo'<td>'.$row["email"].'</td>';
echo '<td>'.$row["age"].'</td>';
echo'<td>'.$row["location"].'</td>';
echo'<td>'.$row["occupation"].'</td>';
echo'<td>'.$row["cv"].'</td>';
echo '<td><form method="POST" ><input style="display:none;" type="text" name="fundiid" value="'.$row["id"].'">
<input type="submit" name="edit" value="Action"></form></td>';

echo'</tr>';  
}


  echo"</table>";

                 }
                 else{
                   echo '<div id="fail"> Try again</div>';
                }
}
if (isset($_POST['reject'])) {
  $id = $_POST['id'];
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  

          $mailto ="$email";
            $mailSub = "Fundi Oncall";
            $mailMsg = "Kind Regards,<br>
                        HR-Fundi Oncall.";
            $custname="$fname";
            $details="<p> Thank you for applying for the position of a fundi. We enjoyed getting to know you and appreciate your interest. Unfortunately, you haven't met the requirements for this position.<br>
              Thank you.</p>";
            $greetings="Hello $fname";
            $mailMessage ="$greetings,<br>$details<br>$mailMsg";
            require 'PHPMailer-master/PHPMailerAutoload.php';
            $mail = new PHPMailer();
            $mail ->IsSmtp();
            $mail ->SMTPDebug = 0;
            $mail ->SMTPAuth = true;
            $mail ->SMTPSecure = 'ssl';
            $mail ->Host = "smtp.gmail.com";
            $mail ->Port = 465; // or 587
            $mail ->IsHTML(true);
            $mail ->Username = "fundioncallemail@gmail.com";
            $mail ->Password = "0706713590";
            $mail ->SetFrom("fundioncallemail@gmail.com");
            $mail ->Subject = $mailSub;
            $mail ->Body = $mailMessage;
            $mail ->AddAddress($mailto);

                if(!$mail->Send()) {
                       echo '<div id="fail">Mail Not Sent</div>';
                }
                else{
                    echo '<div id="success"> Mail Sent</div>';
                }
                 $query2= "update application set status='rejected' where id=$id";
                 $result2=mysqli_query($conn,$query2);
                 if ($result2) {
                echo '<div id="success"> fundi rejected successfully.</div>';
                 $query1="select * from application where status='pending' ";
                 $result1=mysqli_query($conn,$query1);
                echo '<style>#applicants{display:none;}</style>
   <table class="table bordered">
<tr>
<th>Date</th>
<th>ID</th>
<th>Gender</th>
<th> First Name</th>
<th>Last Name</th>
<th> Phone</th>
<th>Email</th>
<th>Age</th>
<th>Location</th>
<th>Speciality</th>
<th>CV</th>
<th>Action</th>
</tr>';
while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
echo '<tr>';
echo '<td>'.$row["date"].'</td>';
echo '<td>'.$row["id"].'</td>';
echo '<td>'.$row["gender"].'</td>';
echo'<td>'.$row["first_name"].'</td>';
echo'<td>'.$row["last_name"].'</td>';
echo'<td>'.$row["phone"].'</td>';
echo'<td>'.$row["email"].'</td>';
echo '<td>'.$row["age"].'</td>';
echo'<td>'.$row["location"].'</td>';
echo'<td>'.$row["occupation"].'</td>';
echo'<td>'.$row["cv"].'</td>';
echo '<td><form method="POST" ><input style="display:none;" type="text" name="fundiid" value="'.$row["id"].'">
<input type="submit" name="edit" value="ACTION"></form></td>';

echo'</tr>';  
}


  echo"</table>";
                 }
                 else{
                   echo '<div="fail"> Try again</div>';
                }

}
?>
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
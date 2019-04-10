<?php
     include('custloginsession.php');
     $customerid=$_SESSION['username'];
     
  include('custsession.php');

  ?>
<!DOCTYPE html>
<html>
<head>
  <title>View Profille</title>
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
..ft{
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
body {
  margin:0;font-family:Arial;

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
footer{
  padding-top: 25%;
}
#nofundi{
  font-size: 1.15em;
  font-weight: bold;
  color: orange;
  
}
#address{
  text-align: center;
  
  font-weight: bold;
  border-radius: 5px;

  }
  .address{ 
  width: 105.6%;
  background-color:#5F9EA0;
  margin-left: -3%;
}
.detail{
  margin-left: 25%;
  background-color: khaki;
 margin-top: 15px;

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
  <a href="customerprof.php">View profile</a>
  <a href="customerpage1.php" class="active">Order for a fundi</a>
  <a href="payment.php">Make Payment</a> 
  <a href="custbookings.php">My bookings</a>
  <a href="cbookinghistory.php">Booking History</a>
  <a > Welcome <?php echo$customerid; ?></a>
  <a href="logoutsession.php">logout</a>

  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
           
</div>
<?php

$queryloc="select location from customer where user_name='$customerid'";
$resultloc=mysqli_query($conn,$queryloc);
$rowloc=mysqli_fetch_array($resultloc);
$loc=$rowloc['location'];
?>
  <form class="fundiform" method="POST">
    <div class="input-group"><label>FUNDI</label></div>
    <div class="input-group"><select name="fundi">
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
    </select></div>
    <div class="input-group"><label>Your Subcounty</label></div>
    <div class="input-group"><select name="custloc" >
      <option><?php echo$loc;?></option>
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
    </select></div>
    <div><input type="submit" name="next" value="NEXT"></div>

  </form>
  <?php 
$conn=mysqli_connect('localhost', 'root', '', 'project');
if (isset($_POST['next'])) {
  $fundi=$_POST['fundi'];
  $custloc=$_POST['custloc'];
  $query= "select * from fundi where occupation= '$fundi' and location= '$custloc' and status='available'";
  $result=mysqli_query($conn, $query);
  $rowcheck=mysqli_num_rows($result);
  if($rowcheck>0){
    echo "<style> .fundiform, #fundiid{display:none;}</style>";
  echo '<table class="table bordered">
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
<td>Rating</td>
<td>Status</td>
<th>Action</th>
</tr>';

 while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {

echo"<tr>";
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
echo'<td>'.$row["rating"].'</td>';
echo '<td>'.$row["status"].'</td>';
echo '<td><form method="POST" ><input id="fundiid" type="text" name="fundiid" value="'.$row["id"].'">
<input type="submit" name="select" value="select"></form></td>';
echo'</tr>';

  }
  echo'</table>';
}
else{
  echo '<div id="nofundi">All our '.$fundi.'s in '.$custloc.' are currently busy. Please try later or try another nearest location. </div>';
  
}

}
   $query3="select * from customer where user_name='$customerid'";
  $result3=mysqli_query($conn,$query3);
  $row3=mysqli_fetch_array($result3);
  $cid=$row3['id'];

  
  


  $query5="select * from orders where customer_id='$cid' and date=(select max(date) from orders where customer_id='$cid')";
  $result5=mysqli_query($conn, $query5);
  $row5=mysqli_fetch_array($result5);
  $orderid=$row5['order_id'];
  

if (isset($_POST['select'])) {
  $fundi=$_POST['fundiid'];


  
  // $query1="insert into orders values('', $cid, $fundi, '', '', NULL, '$time',NULL,'TXNC001',NULL,NULL,NULL,NULL)";
  // $result1=mysqli_query($conn, $query1);
  echo "<style> .fundiform{display:none;}</style>";


echo'<form class="fundiform1" method="POST">
    <div class="input-group">
      <label>Enter specific location</label>
      <input type="text" name="loc"  >
    </div>
    <div class="input-group">
      <label>Task Description</label>
      <input type="text" name="task"  >
    </div>
    <div>
    <input style="display:none;" type="text" name="fundi" value="'.$fundi.'">
    <input style="display:none;" type="text" name="cid" value="'.$cid.'">
    <input type="submit" name="go" value="GO">
    </div>

  </form>';

}
//update order 
if (isset($_POST['go'])) {
  $loc=$_POST['loc'];
  $task=$_POST['task'];
  $fundi=$_POST['fundi'];
  $cid=$_POST['cid'];

  $query12="select * from customer where user_name='$customerid'";
  $result12=mysqli_query($conn,$query12);
  $row12=mysqli_fetch_array($result12);
  $cid1=$row12['id'];
  
  
  $query7="SELECT * FROM `orders` WHERE date=(SELECT MAX(date) from orders where customer_id=$cid1)";
  $result7=mysqli_query($conn,$query7);
  $row7=mysqli_fetch_array($result7);
  $ordertime=$row7['date'];
  $orderid=$row7['order_id'];
 
  
  // $queryf="update fundi set status='engaged' where id=$fundiid";
  // $resultf=mysqli_query($conn,$queryf);


  // $query2= "update orders set specific_location='$loc', task='$task', payment_mode='$payment',task_status='unfinished' where order_id=$orderid and date='$ordertime'";
  // $result2=mysqli_query($conn, $query2);
   
      echo "<style> .fundiform{display:none;}</style>";
      //display customer details
    $query8="select * from customer where id='$cid'";
  $result8=mysqli_query($conn,$query8);

  echo '<table class="table bordered">
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Phone</th>
<th>Email</th>
<th>Action</th>

</tr>';
while($row=mysqli_fetch_array($result8,MYSQLI_ASSOC)){
echo '<tr>';

echo '<td>'.$row["id"].'</td>';
echo'<td>'.$row["first_name"].'</td>';
echo'<td>'.$row["last_name"].'</td>';
echo'<td>'.$row["phone"].'</td>';
echo'<td>'.$row["email"].'</td>';
echo '<td><form method="POST" >
<input style="display:none;" type="text" name="loc" value="'.$loc.'">
<input style="display:none;" type="text" name="task" value="'.$task.'">
<input style="display:none;" type="text" name="fundiid" value="'.$fundi.'">
<input style="display:none;" type="text" name="customerid" value="'.$row["id"].'">
<input type="submit" name="edit" value="Confirm Your Details"></form></td>';
echo'</tr>';  
}


  echo"</table>";
    
}
    ?>
    <?php
    //edit customer details
 if(isset($_POST['edit'])){
$custo=$_POST['customerid'];
$fundi=$_POST['fundiid'];
$loc=$_POST['loc'];
$task=$_POST['task'];


// echo$custo;exit;
 $query9="select * from customer where id=$custo";
  $result9=mysqli_query($conn,$query9);
$row9=mysqli_fetch_array($result9);
$custom=$row9["id"];
$first_name=$row9["first_name"];
$last_name=$row9["last_name"];
$phone=$row9["phone"];
$mail=$row9["email"];
echo "<style> .fundiform{display:none;}</style>";
echo '<div class="row"><div class="col-md-3"></div><div class="col-md-6" style="margin-top:5%; border: groove 2px;"><table class="table bordered" id="details">';
    echo '<tr>';
echo '<th class="th" style="color:maroon; font-size=1.5em;">'.$first_name.' details </th>';
echo '</tr></table>';
      echo '<form method="post" action="customerpage1.php">
     <div> <input  style="display:none;" type="text" name="custom" value="'.$custom.'"></div>
  <div class="fundi">
    <label>FIRST NAME</label>
    <input type="text" name="fname" value="'.$first_name.'" required>
  </div>
  <div>
    <label>LAST NAME</label>
    <input type="text" name="lname" value="'.$last_name.'" required>
  </div>
  <div class="fundi" >
    <label>PHONE</label>
    <input type="number" name="phone" value="'.$phone.'" required>
  </div>
  <div class="fundi" >
    <label>EMAIL</label>
    <input type="email" name="mail" value="'.$mail.'" required>
  </div>
  <div class="fundi">
  <input style="display:none;" type="text" name="loc" value="'.$loc.'">
<input style="display:none;" type="text" name="task" value="'.$task.'">
<input style="display:none;" type="text" name="fundiid" value="'.$fundi.'">
<input style="display:none;" type="text" name="customerid" value="'.$custo.'">
  <input type="submit" name="add" value="Submit" class="btn">
  </div>
</form></div></div>';
}
if (isset($_POST['add'])) {

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone=$_POST['phone'];
  $mail=$_POST['mail'];

  
$fundi=$_POST['fundiid'];
$loc=$_POST['loc'];
$task=$_POST['task'];



$query6="select now() as now from dual";
  $result6=mysqli_query($conn, $query6);
  $row6=mysqli_fetch_array($result6);
  $time=$row6['now'];
 


    $save3 = "update customer set first_name='$fname',last_name='$lname', phone='$phone', email='$mail' where user_name='$customerid'";
    $res3=mysqli_query($conn, $save3);
  $query11 = "select * from fundi where id=$fundi";
  $result11=mysqli_query($conn,$query11);
$row11=mysqli_fetch_array($result11);

$ffname=$row11["first_name"];
$flname=$row11["last_name"];
$fphone=$row11["phone"];
$femail=$row11["email"];

           
    if($res3){
      // echo '<div> inserted successfully</div>';
      // header('location:customerpage1.php');

echo "<style> .fundiform{display:none;}</style>";
echo '<div class="row">
<div class="col-md-5 detail">

           <div class="address"><p id="address">FUNDI ONCALL,<br>
                 P.O. BOX 438444-00100,<br>
                  Nairobi Kenya<br>
                   Telephone:+254 706 713 590<br>
                    Email:fundioncall.co.ke<br>
            </p></div>';
echo'<p><b>Date and Time:</b>  '.$time.'</p>';
echo'<p><b>Name: </b> '.$fname.' '.$lname.'</p>';
echo'<p><b>Phone Number:  </b>'.$phone.'</p>';
echo'<p><b> Fundi Name:</b>  '.$ffname.' '.$flname.'</p>';
echo'<p><b> Fundi Phone Number: </b> '.$fphone.'</p>';
echo'<p><b>Your Location:</b>  '.$loc.'</p>';
echo'<p><b>Task Description:</b>  '.$task.'</p>';
echo '<form method="POST" class="detail">
      <input style="display:none;" type="text" name="fundi" value="'.$fundi.'" >
      <input style="display:none;" type="text" name="task" value="'.$task.'" >
      <input style="display:none;" type="text" name="loc" value="'.$loc.'" >
      <input style="display:none;" type="text" name="time" value="'.$time.'" >
            <b><input type="submit" name="finish" value="FINISH"></b>
           
     </form>
     <form method="POST" action="customerpage1.php" class="detail">
            <b><input type="submit" name="cancel" value="CANCEL"></b>
     </form>';
echo"</div> </div>";
}
  else{
echo'<div id="all_fields"> <p>failed to update</p></div>';
  }

}
  //sending mail
if (isset($_POST['finish'])) {
      
      $fundi=$_POST['fundi'];
      $loc=$_POST['loc'];
      $task=$_POST['task'];
      
      $time=$_POST['time'];

      $queryc="select id from customer where user_name='$customerid'";
      $resultc=mysqli_query($conn,$queryc);
      $rowc=mysqli_fetch_array($resultc);
      $custom=$rowc['id'];

      $queryf="update fundi set status='engaged' where id=$fundi";
      $resultf=mysqli_query($conn,$queryf);

$query1="insert into orders values('', $custom, $fundi, '$loc', '$task', '$time',NULL,NULL,NULL, 'unfinished')";
  $result1=mysqli_query($conn, $query1);


  $query11 = "select o.date as date, o.order_id as orderid, c.email as cemail, c.first_name as cfname, c.last_name as clname, c.phone as cphone, f.first_name as ffname, f.last_name as flname, f.phone as fphone,f.email as femail, o.specific_location as olocation, o.task as task from customer c join orders o ON (c.id=o.customer_id) join fundi f on (o.fundi_id=f.id) where customer_id=$custom and fundi_id=$fundi ORDER BY o.order_id DESC LIMIT 1";
$result11=mysqli_query($conn,$query11);
$row11=mysqli_fetch_array($result11);
$date=$row11["date"];
$orderid=$row11["orderid"];
$cfname=$row11["cfname"];
$clname=$row11["clname"];
$cphone=$row11["cphone"];
$ffname=$row11["ffname"];
$flname=$row11["flname"];
$fphone=$row11["fphone"];
$olocation=$row11["olocation"];
$task=$row11["task"];
$cemail=$row11["cemail"];
$femail=$row11["femail"];
  
            $mailto ="$cemail";
            $mailSub = "Fundi Oncall";
            $mailMsg = "<p><b>Date and Time:</b> $date </p>
<p><b>Order Id:</b>  $orderid</p>
<p><b>Name:</b>$cfname  $clname </p>
<p><b>Phone Number:</b>$cphone</p>
<p><b> Fundi Name:</b>$ffname $flname</p>
<p><b> Fundi Phone Number:</b>$fphone</p>
<p><b>Your Location:</b>$olocation</p>
<p><b>Task Description:</b>$task</p>
<p>Thank you for trusting us</p>";
            $custname="$cfname";
            $details="

           <h1 id='address'>FUNDI ONCALL NAIROBI KENYA<br></h1>
           <h1>ORDER DETAILS</h1>

";
            
            $mailMessage ="<br>$details<br>$mailMsg";
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
                       echo "Mail Not Sent";
                }
                else{
                    echo "Mail Sent to customer <br>";
                }
            $mailto1 ="$femail";
            $mailSub1 = "Fundi Oncall";
            $mailMsg1= "Kind Regards<br>Admin, <br> FundiOncall";
            $fundiname="$ffname";
            $greetings1="Hello $ffname";
            $mailMessage1 ="$greetings1,<br>You have a new customer. Kindly check more details in your portal. <br>$mailMsg1";
            $mail ->Subject = $mailSub1;
            $mail ->Body = $mailMessage1;
            $mail ->AddAddress($mailto1);

                if(!$mail->Send()) {
                       echo "Mail Not Sent";
                }
                else{
                    echo "Mail Sent to fundi";
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
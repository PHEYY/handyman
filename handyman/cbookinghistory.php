
<?php
     include('custloginsession.php');
     $customerid=$_SESSION['username'];
     $queryc="select * from customer where user_name='$customerid'";
     $resultc=mysqli_query($conn,$queryc);
     $rowc=mysqli_fetch_array($resultc);
     $custid=$rowc['id'];
     $fname=$rowc['first_name'];

     include('custsession.php');
  ?>
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
.table td ,th{
  padding: 5px;
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
#rec{
  font-weight: bolder;
  color: red;
  font-size: 1.5em;
  margin-left: 25%;
}
footer{
  padding-top: 30%;
}
th{
  color: maroon;
}
#income{
  font-size: 2em;
}
 #date{
 margin-left: 10%; 
}
 #date label{
  font-family: times new roman;
  font-size: 1.5em; 
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
  <a href="customerpage1.php">Order for a fundi</a>
  <a href="payment.php">Make Payment</a> 
  <a href="custbookings.php">My bookings</a>
  <a href="cbookinghistory.php" class="active">Booking History</a>
  <a>Welcome <?php  echo$fname;?></a>
  <a href="logoutsession.php">logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>
  <div class="parent">
    <form method="POST" id="date">

  <label>FROM:</label>
 <input type="date" name="from" required>
  <label>TO:</label>
  <input type="date" name="to" required>
<input type="submit" name="submit" value="VIEW">
<button onclick="printContent('receipt')" style=" margin-left:90%; width:10%;">Print</button>
</form>
  	<?php
    if (isset($_POST['submit'])) {
       $from=$_POST['from'];
       $to=$_POST['to'];
  $conn = mysqli_connect('localhost', 'root','', 'project');
	$query1="SELECT o.order_id as oid,o.date as date,o.fundi_id as fid,f.first_name as ffname,f.last_name as flname,f.phone as fphone,f.email as femail,o.specific_location as location,o.task as task,o.amount as amount from orders o join fundi f ON(o.fundi_id=f.id) where customer_id=$custid and payment_status='paid'  and date between '$from' and '$to' order by date DESC";
	$result1=mysqli_query($conn,$query1);
	$rowcheck1=mysqli_num_rows($result1);
if ($rowcheck1>0) {

     echo '<style>
                   #receipt{display:none;}
           </style>
     <table>
    
  <tr id="income"><th>BOOKINGS BETWEEN '. $from.' AND '.$to.'</th></tr>

      </table>';
 
	echo ' <table class="table ordered">
<tr>
<th>Order ID</th>
<th>Order Date</th>
<th>Fundi Names</th>
<th>Fundi Phone</th>
<th>Fundi Email</th>
<th>Your Location</th>
<th>Task</th>
<th>Amount</th>
</tr>';
while($row1=mysqli_fetch_array($result1)){
echo '<tr>';
echo '<td>'.$row1["oid"].'</td>';
echo '<td>'.$row1["date"].'</td>';
echo '<td>'.$row1["ffname"].' '.$row1["flname"].'</td>';
echo'<td>'.$row1["fphone"].'</td>';
echo'<td>'.$row1["femail"].'</td>';
echo '<td>'.$row1["location"].'</td>';
echo'<td>'.$row1["task"].'</td>';
echo'<td>'.$row1["amount"].'</td>';

echo'</tr>';	
}


	echo"</table>";

  echo '<pre id="receipt"><div ><div id="tp"><div class="im">
               <img src="images/logo1n.jpg" alt="LOGO" height="150px" width="150px" style="float:left;" >
              </div>
              <div class="admin ">
<h1 id="ad">
Fundi Oncall,<br>
 P.O BOX 438444-00100,<br>
Nairobi Kenya.
 </h1>
</div>

</div><table>
    
  <tr id="income"><th>BOOKINGS BETWEEN '. $from.' AND '.$to.'</th></tr>

      </table>';
 
  echo ' <table class="table ordered">
<tr>
<th>Order ID</th>
<th>Order Date</th>
<th>Fundi Names</th>
<th>Fundi Phone</th>
<th>Fundi Email</th>
<th>Your Location</th>
<th>Task</th>
<th>Amount</th>
</tr>';
$query1="SELECT o.order_id as oid,o.date as date,o.fundi_id as fid,f.first_name as ffname,f.last_name as flname,f.phone as fphone,f.email as femail,o.specific_location as location,o.task as task,o.amount as amount from orders o join fundi f ON(o.fundi_id=f.id) where customer_id=$custid and payment_status='paid'  and date between '$from' and '$to' order by date DESC";
  $result1=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1)){
echo '<tr>';
echo '<td>'.$row1["oid"].'</td>';
echo '<td>'.$row1["date"].'</td>';
echo '<td>'.$row1["ffname"].' '.$row1["flname"].'</td>';
echo'<td>'.$row1["fphone"].'</td>';
echo'<td>'.$row1["femail"].'</td>';
echo '<td>'.$row1["location"].'</td>';
echo'<td>'.$row1["task"].'</td>';
echo'<td>'.$row1["amount"].'</td>';

echo'</tr>';  
}


  echo"</table></div></pre>";
}
else{
  echo '<div id="rec"> No records available</div>';
}
}
  	?>
</div>
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

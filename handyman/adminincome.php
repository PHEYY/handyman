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
 #body th{
  color: maroon;
  font-weight: bolder;
  font-size: 1.25em;
}
 #body #income{
  font-size: 2em;
}
 #body #rec{
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
  <a href="fundis.php">Fundis</a>
  <a href="susfundis.php">Suspended fundis</a>
  <a href="customers.php">Customers</a>
   <a href="addfundi.php">Applications</a> 
   <a class="active" href="adminincome.php">Payments</a> 
   <a href="messages.php">Messages</a>
  <a>welcome <?php echo$name; ?></a>  
  <a href="adminsession.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
        
  </div>
  <div id="body">
  <form method="POST" id="date">

  <label>FROM:</label>
 <input type="date" name="from" required>
  <label>TO:</label>
  <input type="date" name="to" required>
<input type="submit" name="submit" value="VIEW">
</form>
<button onclick="printContent('receipt')" style=" margin-left:90%; width:10%;">Print</button>
<?php
if (isset($_POST['submit'])) {
  $from=$_POST['from'];
  $to=$_POST['to'];
$query="select sum(amount) as total, sum(0.9*amount) as fsalary, sum(0.1*amount) as csalary, count(order_id) as jobs from orders where payment_status='paid' and date between '$from' and '$to'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$fsalary=$row['fsalary'];
$csalary=$row['csalary'];
$total=$row['total'];
$jobs=$row['jobs'];
if ($jobs==0) {
      echo'<div id="rec"><p>There are no records</p></di>';
    }
    else{
     echo '<style>
                   #receipt{display:none;}
           </style>
     <table>
    
  <tr id="income"><th>INCOME EARNED BETWEEN '. $from.' AND '.$to.'</th></tr>
  <tr><th>Total number of tasks</th><th>Gross income</th></tr>
  <tr><td><b>'.$jobs.' tasks</b></td><td> <b>kshs '.$total.'</b></td></tr>
  <tr><th>Fundis Salaries</th><th>Net income</th></tr>
  <tr><td><b>kshs '.$fsalary.'</b></td><td> <b>kshs '.$csalary.'</b></td></tr>
      </table>';
$query1="select o.order_id as ord, o.date as date, o.fundi_id as fid, o.customer_id as cid, f.first_name as ffname, f.last_name as flname, c.first_name as cfname, c.last_name as clname, o.amount as amount, 0.9*amount as fsal, 0.1*amount as csal from orders o join fundi f on(o.fundi_id=f.id) join customer c on(o.customer_id=c.id) where  payment_status='paid' and date between '$from'and '$to' order by order_id desc ";
$result1=mysqli_query($conn,$query1);
echo '<table class="table bordered">
        <tr><th>Order Id</th>
            <th>Task date</th>
             <th>Fundi ID</th>
             <th>Fundi Name</th>
             <th>Customer ID</th>
             <th>Customer Name</th>
             <th>Earning</th>
             <th>Company earning</th>
             <th>Fundi earning</th>
        </tr>';
  while ($row1=mysqli_fetch_array($result1)) {

    echo '<tr>';

echo '<td>'.$row1['ord'].'</td>';
echo '<td>'.$row1['date'].'</td>';
echo '<td>'.$row1['fid'].'</td>';
echo'<td>'.$row1['ffname'].' ' .$row1['flname'].'</td>';
echo '<td>'.$row1['cid'].'</td>';
echo'<td>'.$row1['cfname'].' ' .$row1['clname'].'</td>';
echo'<td>'.$row1['amount'].'</td>';
echo'<td>'.$row1['csal'].'</td>';
echo'<td>'.$row1['fsal'].'</td>';
echo '</tr>';

  }

  echo  '</table>';


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

</div> <table>
    
  <tr id="income"><th>INCOME EARNED BETWEEN '. $from.' AND '.$to.'</th></tr>
  <tr><th>Total number of tasks</th><th>Gross income</th></tr>
  <tr style="border-bottom:dotted;"><td><b>'.$jobs.' tasks</b></td><td> <b>kshs '.$total.'</b></td></tr>
  <tr><th>Fundis Salaries</th><th>Net income</th></tr>
  <tr style="border-bottom:dotted;"><td><b>kshs '.$fsalary.'</b></td><td> <b>kshs '.$csalary.'</b></td></tr>
      </table>';
$query1="select o.order_id as ord, o.date as date, o.fundi_id as fid, o.customer_id as cid, f.first_name as ffname, f.last_name as flname, c.first_name as cfname, c.last_name as clname, o.amount as amount, 0.9*amount as fsal, 0.1*amount as csal from orders o join fundi f on(o.fundi_id=f.id) join customer c on(o.customer_id=c.id) where  payment_status='paid' and date between '$from'and '$to' order by order_id desc ";
$result1=mysqli_query($conn,$query1);
echo '<table class="table bordered">
        <tr><th>Order Id</th>
            <th>Task date</th>
             <th>Fundi ID</th>
             <th>Fundi Name</th>
             <th>Customer ID</th>
             <th>Customer Name</th>
             <th>Earning</th>
             <th>Company earning</th>
             <th>Fundi earning</th>
        </tr>';
  while ($row1=mysqli_fetch_array($result1)) {

    echo '<tr>';

echo '<td>'.$row1['ord'].'</td>';
echo '<td>'.$row1['date'].'</td>';
echo '<td>'.$row1['fid'].'</td>';
echo'<td>'.$row1['ffname'].' ' .$row1['flname'].'</td>';
echo '<td>'.$row1['cid'].'</td>';
echo'<td>'.$row1['cfname'].' ' .$row1['clname'].'</td>';
echo'<td>'.$row1['amount'].'</td>';
echo'<td>'.$row1['csal'].'</td>';
echo'<td>'.$row1['fsal'].'</td>';
echo '</tr>';

  }

  echo  '</table></div></pre>';



}
}

?>
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
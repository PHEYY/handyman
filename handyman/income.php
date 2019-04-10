<?php
     include('fundiloginsession.php');
     $fundiid=$_SESSION['username'];
     
     
  include('fundisession.php');

     

	?>
<!-- 	<?php
        echo(rand(1000,9999) . "<br>");
        // echo(rand() . "<br>");
        // echo(rand(10,100));
   ?>
 -->	<!DOCTYPE html>
<html>
<head>
  <title>User registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
body {margin:0;font-family:Arial;
       height: 100%;
      }
.th{
      text-align:left;
    }
    #notasks{
      color:orange;
      font-size:26;
      font-weight:bold;
      margin-left:25%;
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
footer{
  margin-top: 29%;
}
#head{
  padding-bottom: 15px;
}
#rec{
  font-weight: bolder;
  color: red;
  font-size: 1.5em;
  margin-left: 25%;
}
#body table{
  font-family: times new roman;
  font-size: 1.5em;
  margin-left: 5%;
}
#body th{
  color: maroon;
  font-weight: bolder;

}
 #body td ,th{
  padding: 5px;
}
#body #date{
 margin-left: 5%; 
}
 #body #date label{
  font-family: times new roman;
  font-size: 1.5em; 
}
#body #income{
  font-size: 1.55em;
}
.table{
  width: 80%;
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
    <div id="body">
        <div id="head">
            <div id="pot">
                <img src="images/logo1n.jpg" alt="" height="150px">
                <p class="no"><b>+254 706-713-590</b></p> 
            </div>
     <?php include('fundipage.php'); ?>    
</div>
<form method="POST" id="date">

  <label>FROM:</label>
 <input type="date" name="from" required>
  <label>TO:</label>
  <input type="date" name="to" required>
<input type="submit" name="submit" value="VIEW">
</form>
<button onclick="printContent('receipt')" style=" margin-left:90%; width:10%;">Print</button>
	<?php
     $query0="select * from fundi where email='$fundiid'";
     $result0=mysqli_query($conn,$query0);
     $row0=mysqli_fetch_array($result0);
     $id=$row0['id'];

  if (isset($_POST['submit'])) {
    $from=$_POST['from'];
    $to=$_POST['to'];
    $que="select count(task) as jobs, sum(0.9*amount) as total from orders where fundi_id=$id and date between '$from' and '$to' and payment_status='paid'";
    $res=mysqli_query($conn,$que);
    $row= mysqli_fetch_array($res);
    $jobs=$row['jobs'];
    $total=$row['total'];
    if ($jobs==0) {
      echo'<div id="rec"><p>There are no records</p></di>';
    }
    else{
     echo '<style>
                   #receipt{display:none;}
           </style>
     <table>
    
  <tr id="income"><th>INCOME EARNED BETWEEN '. $from.' AND '.$to.'</th></tr>
  <tr><th>Total number of tasks</th><th>Total earnings</th></tr>
  <tr><td><b>'.$jobs.' tasks</b></td><td> <b>kshs '.$total.'</b></td></tr>

      </table>';


  $querys="select  o.order_id as oid, o.date as dt, c.first_name as fn, c.last_name as ln, o.task as tk, 0.9*amount as income from orders o join customer c on(o.customer_id=c.id) where o.fundi_id=$id and payment_status='paid' and date between '$from' and '$to'";
  $results=mysqli_query($conn,$querys);
  echo '<table class="table bordered">
        <tr><th>Order Id</th>
            <th>Task date</th>
             <th>Customer Name</th>
             <th>Task</th>
             <th>Earnings</th>
        </tr>';
  while ($rows=mysqli_fetch_array($results)) {

    echo '<tr>';

echo '<td>'.$rows['oid'].'</td>';
echo '<td>'.$rows['dt'].'</td>';
echo'<td>'.$rows['fn'].' ' .$rows['ln'].'</td>';
echo'<td>'.$rows['tk'].'</td>';
echo'<td>'.$rows['income'].'</td>';
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
Nairobi Kenya.
 </h1>
</div>

</div><table style="border-bottom:dotted;">
    
  <tr style="font-size:1.5em; color:maroon;"><th>INCOME EARNED BETWEEN '. $from.' AND '.$to.'</th></tr>
  <tr><th>Total number of tasks</th><th>Total earnings</th></tr>
  <tr><td><b>'.$jobs.' tasks</b></td><td> <b>kshs '.$total.'</b></td></tr>

      </table>';


  $querys="select  o.order_id as oid, o.date as dt, c.first_name as fn, c.last_name as ln, o.task as tk, 0.9*amount as income from orders o join customer c on(o.customer_id=c.id) where o.fundi_id=$id and payment_status='paid' and date between '$from' and '$to'";
  $results=mysqli_query($conn,$querys);
  echo '<table class="table bordered">
        <tr><th>Order Id</th>
            <th>Task date</th>
             <th>Customer Name</th>
             <th>Task</th>
             <th>Earnings</th>
        </tr>';
  while ($rows=mysqli_fetch_array($results)) {

    echo '<tr>';

echo '<td>'.$rows['oid'].'</td>';
echo '<td>'.$rows['dt'].'</td>';
echo'<td>'.$rows['fn'].' ' .$rows['ln'].'</td>';
echo'<td>'.$rows['tk'].'</td>';
echo'<td>'.$rows['income'].'</td>';
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

</html>
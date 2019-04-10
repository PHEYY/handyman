<?php
     include('fundiloginsession.php');
     $fundiid=$_SESSION['username'];
     

     
  include('fundisession.php');


     

	?>
	<?php
        // echo(rand(1000,9999) . "<br>");
        // echo(rand() . "<br>");
        // echo(rand(10,100));
   ?>
	<!DOCTYPE html>
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
      font-size: 1.5em;
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
  margin-top: 32%;
}
#head{
  font-size: 2em;
  font-weight: bolder;
  color:maroon;
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
     <?php include('fundipage.php'); ?>    
</div>
<button onclick="printContent('receipt')" style=" margin-left:90%; width:10%;">Print</button>
	<?php
	   $query0="select * from fundi where email='$fundiid'";
     $result0=mysqli_query($conn,$query0);
     $row0=mysqli_fetch_array($result0);
     $id=$row0['id'];
     
     $query5="select * from orders where fundi_id=$id and task_status='unfinished'";
     $result5=mysqli_query($conn,$query5);
     $row5=mysqli_fetch_array($result5);
     $oid=$row5['order_id'];
    if($oid){
     $query1="select o.order_id as orderid, o.customer_id as customer_id, c.first_name as cfname, c.last_name as clname, c.phone as cphone, c.email as cemail, o.specific_location as location, o.task as task from orders o join customer c on(o.customer_id=c.id) where order_id=$oid";
     $result1=mysqli_query($conn,$query1);
    echo '<table><tr><th id="head">ACTIVE TASKS</th></tr></table>';
    echo '<table class="table bordered">
<tr>
<th>Order ID</th>
<th>Customer Names</th>
<th>Customer Phone</th>
<th> Customer Email</th>
<th>Customer Location</th>
<th>Task</th>
<th>Agreed Amount</th>

</tr>';
if($row=mysqli_fetch_array($result1)){
echo '<tr>';

echo '<td>'.$row["orderid"].'</td>';

echo'<td>'.$row["cfname"].' ' .$row["clname"].'</td>';
echo'<td>'.$row["cphone"].'</td>';
echo'<td>'.$row["cemail"].'</td>';
echo'<td>'.$row["location"].'</td>';
echo'<td>'.$row["task"].'</td>';
echo '<td><form method="POST" ><input class="id"  type="text" name="order_id" value="'.$row["orderid"].'">
<style>.id{display: none;}</style>
<input type="submit" name="amount" value="Enter Amount" >';
echo'</tr>';	

echo"</table>";
}
}
else{
  echo'<div id="notasks">There are no active tasks.</div>';
}


if (isset($_POST['amount'])) {
		echo '<form method="POST">
	<b>Enter amount that you have agreed on:</b><input type="number" name="cash">
	<b><input type="submit"name="ok" value="OK"></b>
		</form>';
	}
if (isset($_POST['ok'])) {
  $amt=$_POST['cash'];

  
  $queryc="update orders set amount=$amt, payment_status='unpaid' where order_id=$oid";
  $resultc=mysqli_query($conn,$queryc);
echo '<div class="row"><div class="col-md-3"></div><div class="col-md-6" style="margin-top:5%; border: groove 2px;"><table class="table bordered" id="details">';
    echo '<tr>';
echo '<th class="th" style="color:maroon; font-size=1.25em;">ORDER '.$row["orderid"].' DETAILS </th>';
echo '</tr></table>';

 echo ' <table class="table bordered">';
echo '<tr>';
echo '<th class="th">Order ID</th>';
echo '<td>'.$row["orderid"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th class="th">Customer Names</th>';
echo'<td>'.$row["cfname"].' ' .$row["clname"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th class="th">Customer Phone</th>';
echo'<td>'.$row["cphone"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th class="th"> Customer Email</th>';
echo'<td>'.$row["cemail"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th class="th">Customer Location</th>';
echo'<td>'.$row["location"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th class="th">Task</th>';
echo'<td>'.$row["task"].'</td>';
echo '</tr>';
echo '<tr>';
echo'<td><form method="POST"><input type="submit" name="finish" value="Task Finished" ></form></td>';
echo'</tr>';	

echo"</table></div></div>";
}
if (isset($_POST['finish'])) {
if($oid){
$queryo="select * from orders where order_id=$oid";
$resulto=mysqli_query($conn,$queryo);
$rowo=mysqli_fetch_array($resulto);
$pstatus=$rowo['payment_status'];
$fundi=$rowo['fundi_id'];

	$query2="update orders set payment_status='unpaid',task_status='finished' where order_id=$oid";
	$result2=mysqli_query($conn,$query2);

  $sql="update fundi set status='available' where id=$fundi";
  $output=mysqli_query($conn,$sql);

  $query="select o.order_id as orderid, o.customer_id as customer_id, c.first_name as cfname, c.last_name as clname, c.phone as cphone, c.email as cemail, o.specific_location as location, o.task as task from orders o join customer c on(o.customer_id=c.id) where order_id=$oid";
$result=mysqli_query($conn,$query);
$roow=mysqli_fetch_array($result);

echo '
<style>
                   #receipt{display:none;}
           </style>
<div class="row"><div class="col-md-3"></div><div class="col-md-6" style="margin-top:5%; border: groove 2px;"><table class="table bordered" id="details">';
    echo '<tr>';
echo '<th class="th" style="color:maroon; font-size=1.25em;">ORDER '.$roow["orderid"].' DETAILS </th>';
echo '</tr></table>';

	echo ' <table class=" table bordered">';
echo '<tr>';
echo '<th class="th">Order ID</th>';
echo '<td>'.$roow["orderid"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th class="th">Customer ID</th>';
echo '<td>'.$roow["customer_id"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th class="th">Customer Names</th>';
echo'<td>'.$roow["cfname"].' ' .$roow["clname"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th class="th">Customer Phone</th>';
echo'<td>'.$roow["cphone"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th class="th"> Customer Email</th>';
echo'<td>'.$roow["cemail"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th class="th">Customer Location</th>';
echo'<td>'.$roow["location"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th class="th">Task</th>';
echo'<td>'.$roow["task"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th class="th">Payment Status</th>';
echo'<td>'.$pstatus.'</td>';
echo '</tr>';	
echo"</table></div></div>";



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

</div><table class="table bordered" id="details">';
    echo '<tr>';
echo '<th class="th" style="color:maroon; font-size=2em;">ORDER '.$roow["orderid"].' DETAILS </th>';
echo '</tr></table>';

  echo ' <table class="table bordered" >';
echo '<tr>';
echo '<th >Order ID</th>';
echo '<td>'.$roow["orderid"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th >Customer ID</th>';
echo '<td>'.$roow["customer_id"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th >Customer Names</th>';
echo'<td>'.$roow["cfname"].' ' .$roow["clname"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th >Customer Phone</th>';
echo'<td>'.$roow["cphone"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th > Customer Email</th>';
echo'<td>'.$roow["cemail"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th >Customer Location</th>';
echo'<td>'.$roow["location"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th>Task</th>';
echo'<td>'.$roow["task"].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th >Payment Status</th>';
echo'<td>'.$pstatus.'</td>';
echo '</tr>'; 
echo"</table></div></pre>";

$retrieve="select o.order_id as orderid, o.customer_id as cid,o.amount as amount, c.first_name as name,c.email as email from orders o join customer c on (o.customer_id=c.id) where order_id='$oid' ";
	$results=mysqli_query($conn,$retrieve);
	$rows=mysqli_fetch_array($results);
	$email=$rows['email'];
    $name=$rows['name'];
	$amount=$rows['amount'];

	         $mailto ="$email";
            $mailSub = "Fundi Oncall";
            $mailMsg = "kind regards,<br>
                        Fundi Oncall";
            $custname="$name";
            $details="
             
            
            <p>Hello $name</p>
<p> Kindly make payment of kshs.$amount <a href='localhost/mafundi/handyman/customerlogin.php'>here</a></p>
<p>Thank you for trusting us</p>


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
                       echo '<div id="fail">Mail Not Sent</div>';
                }
                else{
                    echo '<div id="success">Mail Sent</div>';
                }
              }
              else{
                
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
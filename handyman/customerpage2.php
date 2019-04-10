<!DOCTYPE html>
<html>
<head>
	<?php
     include('custloginsession.php');
     $customerid=$_SESSION['username'];
	?>
	<title>ORDER</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.6.3.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/NewsGoth_BT_400.font.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/easyTooltip.js"></script>

</head>
<body id="page1">
    <!--==============================header=================================-->
    <header>
      <div class="indent">
        <div class="row-top">
         <div class="wrapper">
                         <div class="age">
               <img src="images/logo1n.jpg" alt="">
              </div>
              <div class="ages">
                 <strong class="support">+254 706-713-590</strong> 
               </div>
        </div>
        <nav>
          <ul class="menu">
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li>
              <button class="menu indent">login</button>
              <a href="customerlogin.php">as customer</a>
              <a href="fundilogin.php">as handyperson</a> </li>
            <li><a href="staff.html">Our Staff</a></li>
            <li class="last"><a href="contacts.html">Contacts</a></li>
          </ul>
        </nav>
      </div>
	</header> 
	<form method="POST">
		<div class="input-group">
			<label>Enter specific location</label>
			<input type="text" name="loc"  >
		</div>
		<div class="input-group">
			<label>Task Description</label>
			<input type="text" name="task"  >
		</div>
		<div class="input-group">
			<label>Mode of Payment</label>
		<select name="payment">
			<option>Select payment mode</option>
			<option>cash</option>
			<option>bank</option>
			<option>M-pesa</option>>
		</select></div>
		<div><input type="submit" name="next" value="NEXT"></div>

	</form>
	<?php 
$conn=mysqli_connect('localhost', 'root', '', 'project');
if (isset($_POST['next'])) {
	$loc=$_POST['loc'];
	$task=$_POST['task'];
	$payment=$_POST['payment'];
	$query= "update orders set specific_location='$loc', task='$task', payment_mode='$payment' where order_id=1";
	$result=mysqli_query($conn, $query);

	
}
	?>
	<footer>
  <div class="main">
    <div class="footer-bg">
      <p class="prev-indent-bot">Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved | Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></p>
      <ul class="list-services">
        <li><a class="tooltips" href="#"></a></li>
        <li class="item-1"><a class="tooltips" href="#"></a></li>
        <li class="item-2"><a class="tooltips" href="#"></a></li>
      </ul>
    </div>
  </div>
</footer>
</body>
</html>
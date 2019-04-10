
<?php
     include('adminloginsession.php');
     $adminid=$_SESSION['username'];
     echo$adminid;

     
  include('adminsession.php');

     

  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Handyman</title>
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
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/easyTooltip.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
<div class="extra">
  <div class="main">
    <!--==============================header=================================-->
    <header>
      <div class="indent">
        <div class="row-top">
          <div class="wrapper">
              <div class="age">
               <img src="images/logo1n.jpg" alt="">
              </div>
              <div class="agem">
                 <h1><a href="adminhome.php">Logout</a></h1>
                 
               </div>
              <div class="agem">
                <h1>Admin</h1>
              </div>

        </div>
         <nav>
          <ul class="menu">
            <li><a class="active" >view orders</a></li>
            <li><a  href="adminvieworders.php">view orders</a></li>
            <li><a href="fundi.php">fundis</a></li>
            <li><a href="customers.php">customers</a></li>
            <li><a href="addfundi.php">Applications</a></li>
            <li class="last"><a href="addadmin.php">Add Admin</a></li>
          </ul>
        </nav>
        
      </div>
     
    </div>
    </header>
  </div>
  <div class="parent">
  <div class="form">
  <div class="header">
    <h4>add an admin</h4>
  </div>
<form method="post" action="addadmin.php">
  
  <div class="input-group">
    <label>ID</label>
    <input type="text" name="id">
  </div>
  <div class="input-group">
    <label>FIRSTNAME</label>
    <input type="text" name="first_name">
  </div>
  <div class="input-group">
    <label>LASTNAME</label>
    <input type="text" name="last_name">
  </div>
  <div class="input-group">
    <label>PHONE</label>
    <input type="text" name="phone">
  </div>
<div class="input-group">
    <label>EMAIL</label>
    <input type="email" name="email">
  </div>
  <div class="input-group">
    <button type="submit" name="register" class="btn">ADD</button>
  </div>
  
</form>
</div>
</div>
</body>
</html>
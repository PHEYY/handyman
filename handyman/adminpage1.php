<?php
     include('adminloginsession.php');
     $adminid=$_SESSION['username'];
     echo$adminid;

     
  include('adminsession.php');

     

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Handyman | Contacts</title>
<meta charset="utf-8">
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
            <li><a href="fundis.php">fundis</a></li>
            <li><a href="susfundis.php">Suspended fundis</a></li>
            <li><a href="customers.php">customers</a></li>
            <li><a href="addfundi.php">Applications</a></li>
            <li class="last"><a href="addadmin.php">Add Admin</a></li>
          </ul>
        </nav>
        
      </div>
     
    </div>
    </header>
  </div>
</div>
</body>
</html>
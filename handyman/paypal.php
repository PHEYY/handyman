<!-- <?php
     include('custloginsession.php');
     $customerid=$_SESSION['username'];
     echo$customerid;
     $query3="select * from customer where user_name='$customerid'";
     $result3=mysqli_query($conn,$query3);
     $row3=mysqli_fetch_array($result3);
     $id=$row3['id'];


    $query4="select * from orders where customer_id=$id and payment_status='unpaid'";
    $result4=mysqli_query($conn,$query4);
    $row4=mysqli_fetch_array($result4);
    $amount=$row4['amount'];
    $orderid=$row4['order_id'];
    $status=$row4['payment_status'];
   

   $queryt="select now() as now from dual";
  $resultt=mysqli_query($conn, $queryt);
  $rowt=mysqli_fetch_array($resultt);
  $time=$rowt['now'];
  echo $time; 
    

     if(!isset($_SESSION['username'])){
      header('customerlogin.php');
     }
    

 ?> -->
  <!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- <script
    src="https://www.paypal.com/sdk/js?client-id=SB_CLIENT_ID">
  </script> -->
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
 #top{
          background-color:green;
          width:40.15%;
          height:15%;
          margin-right:30%;
          float:right;
        
    }
    .toper{
     /*background-color:white;*/
     width:40%;
     margin-right:30%;
     float:right;
     border:solid 1px green;
     border-top: none;

    }
    .ksh{
      color:red;
    }

    input{
      display:block;
    }
    .success{
      color:orange;
    }
    #nobal{
      position:absolute;
      top:40%;
      left:40%;
    }
    #steps{
      margin-top:3%;
      margin-left:30%;
    }

</style>
</head>
<body>
    
        <div>
            <div id="pot">
                <img src="images/logo1n.jpg" alt="" height="150px">
                <p class="no"><b>+254 706-713-590</b></p> 
            </div>
          <?php include('cuspage.php'); ?>
</div>
  <div id="top"></div>
  <div class="toper">
    <?php
   
    
    if($status){
    echo '<p>you have been charged <b class="ksh">Ksh'.$amount.'</b>. Make payment using M-pesa following these steps</p>' ;
     }
     else{
      echo '<p id="nobal">you have no outstanding balance</p>' ;
     }
     

    ?>
    <div id="paypal-button-container"></div>
    <script src="https://www.paypal.com/sdk/js?client-id=AZ-SRyw8FVqgWFc1YKaHfee9-8T2Cc3HlZZTLlyn0Pd3LPwhQBPONkSmRxEnl3I_00DUgcKtlq5ynNRA"></script>


  <script>
    paypal.Buttons().render('#paypal-button-container');
  </script>
    

</p>
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
</body>
</html>
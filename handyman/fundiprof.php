<?php
     include('fundiloginsession.php');
     $fundiid=$_SESSION['username'];
     echo$fundiid;

     include('fundisession.php');

     

	?>
    
  <!DOCTYPE html>
<html>
<head>
  <title>Edit profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
body {margin:0;font-family:Arial;
      height:100%; 
     }
#error{
          color:red;
    }
    #success{
      color:green;
    }
    input{
      display:block;
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
 /* font-size: 1.2em;*/


}
.color-20{
  color: white;
  /*font-size: 1.15em; */
}
.fot .color-20{
  float: right;
  margin-right: 25%;
}
.about{
  /*font-size: 1.75em;*/
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
label{
  padding-top: 10px;
}


</style>
</head>
<body>
    <!--==============================header=================================-->
    <div>
            <div id="pot">
                <img src="images/logo1n.jpg" alt="" height="150px">
                <p class="no"><b>+254 706-713-590</b></p> 
            </div>
           <?php include('fundipage.php'); ?>
</div>
  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'project');
  $query0="select * from fundi where email='$fundiid'";
     $result0=mysqli_query($conn,$query0);
     $row0=mysqli_fetch_array($result0);
     $id=$row0['id'];

$query="select * from fundi where id= $id";
  $result1=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result1);
$image=$row['image'];
$id=$row['id'];
$gender=$row['gender'];
$email=$row['email'];
$years=$row['years'];
$occupation=$row['occupation'];
$rating=$row['rating'];
$first_name=$row["first_name"];
$last_name=$row["last_name"];
$phone=$row["phone"];
$age=$row["age"];
$location=$row["location"];
	echo '
      <div class="row">
      <form method="POST">
      <div class="col-md-7">
      <div>
  <label>PROFILE PICTURE</label>
  </div>
  <div id="picture">';
  if ($image) {
    echo '<img id="profile" src="'.$image.'">';
  }
  else{
  echo '<img id="profile" src="prof.png">';
      }
        
  echo'   
  </div>
  <div class="fundi">
    <label>ID</label> :'.$id.'
    </div>
    <div class="fundi">
    <label>NAME</label> :'.$first_name.' '.$last_name.'
    </div>
    <div class="fundi">
    <label>OCCUPATION</label> :'.$occupation.' 
    </div>
    <div class="fundi">
    <label>RATING</label> :'.$rating.' 
    </div>
</div>
<div class="col-md-5">
 <div class="fundi">
    <label>GENDER</label> :'.$gender.' 
    </div>
 <div class="fundi" >
    <label>PHONE</label>:'.$phone.'
   </div>
   <div class="fundi">
    <label>EMAIL</label> :'.$email.' 
    </div>
  <div class="fundi">
    <label>AGE</label>:'.$age.'
</div>
    <div class="fundi">
    <label>LOCATION</label>:'.$location.'
  </div>
  </div>
    <div class="fundi">
    <label>YEARS OF EXPIRIENCE</label>:'.$years.'
  </div>
<div class="fundi">
  <a href="fundiedit.php"><b>EDIT</b></a>
 
</div>
</div>
</div>';


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
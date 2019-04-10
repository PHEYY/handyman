<!DOCTYPE html>
<html>
<head>
	<title>Admin Home Page</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<style type="text/css">
	.wrapper{
		width:100%;
      background:#5F9EA0;
      color: black;
      height: 150px;

	}
	.img{
		height: 100px;
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
  padding-top: 12%;
}
form{
  font-size: 1.75em;
  margin-left: 25%;
}
input{
  display: block;
  width: 150%;
  border-radius: 5px;
}
.input-group{
  padding: 10px;

}


	</style>
</head>
<body>
   <div class="row wrapper">
              <div class="col-md-6 img" >
               <img src="images/logo1n.jpg" alt="LOGO">
              </div>
              <div class="col-md-3 ">
                <h1 id="admin">Admin</h1>
              </div>
              <div class="col-md-3">
                 <h1 id="log"><a class="log" href="adminlogin.php">Login</a></h1>
                 
               </div>

        
  </div>
  <div>
    <form method="post" action="adminloginsession.php" id="form">
      <h2>Please enter your details</h2>
  <div class="input-group">
    <label>Email</label>
    <input type="email" name="email">
  </div>
    <div class="input-group">
    <label>Password</label>
    <input type="Password" name="password">
  </div>
  <div class="input-group">
    <button type="submit" name="login" class="btn">Login</button>
  </div>
  </form>
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
</body>
</html>
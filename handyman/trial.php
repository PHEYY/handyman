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
            <li><a class="active" href="index.php">view orders</a></li>
            <li><a href="services.html">fundis</a></li>
            <li><a href="aboutus.html">customers</a></li>
            <li><a href="addfundi.php">Applications</a></li>
            <li class="last"><a href="addadmin.php">Add Admin</a></li>
          </ul>
        </nav>
        
      </div>
     
    </div>
    </header>
  </div>
  <div class="parent">
<div class="form bod">
<form method="post" action="addfundi.php">
	
	<div class="fundi">
		<label>ID</label>
		<input type="text" name="id">
	</div>
	<div >
		<label>GENDER</label>
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
	</div>
	<div class="fundi">
		<label>FIRST NAME</label>
		<input type="text" name="fname">
	</div>
	<div>
		<label>LAST NAME</label>
		<input type="text" name="lname">
	</div>
	<div class="fundi" >
		<label>PHONE</label>
		<input type="number" name="phone">
	</div>
<div >
		<label>EMAIL</label>
		<input type="email" name="email">
	</div>
	<div class="fundi">
		<label>AGE</label>
		<input type="number" name="age" min="18" max="60">
</div>
	<div class="fundi">
		<label>LOCATION</label>
		<input type="text" name="location">
	</div>
	<div >
		<label>OCCUPATION</label>
		<input type="text" name="occupation">
	</div>
	<div class="fundi">
		<label>YEARS OF EXPIRIENCE</label>
		<input type="text" name="years">
	</div>
	<div class="fundi">
		<button type="submit" name="register" class="btn">ADD</button>
		<button type="submit" name="register" class="btn">REJECT</button>
	</div>
</form>
<div>
	<button type="submit" name="view">VIEW</button>
	<?php  
$conn = mysqli_connect('localhost', 'root','', 'project');
 <!-- if(isset($_POST['view'])){ -->
	$query1="select * from application";
	$result1=mysqli_query($conn,$query1);

	echo " <table>
<tr>
<th>ID</th>
<th>Gender</th>
<th> First Name</th>
<th>Last Name</th>
<th> Phone</th>
<th>Email</th>
<th>Age</th>
<th>Location</th>
<th>Speciality</th>
<th>CV</th>
</tr>";
while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
echo '<tr>';
echo '<td>'.$row["id"].'</td>';
echo '<td>'.$row["gender"].'</td>';
echo'<td>'.$row["first_name"].'</td>';
echo'<td>'.$row["last_name"].'</td>';
echo'<td>'.$row["phone"].'</td>';
echo'<td>'.$row["email"].'</td>';
echo '<td>'.$row["age"].'</td>';
echo'<td>'.$row["location"].'</td>';
echo'<td>'.$row["occupation"].'</td>';
echo'<td>'.$row["cv"].'</td>';
echo '<td><button><a href="">delete</a></button></td>';
echo'</tr>';	
}


	echo"</table>";
<!-- } -->
?>
</div>
</div>
</div>
</div>
</body>
</html>

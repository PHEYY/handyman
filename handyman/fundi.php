<!DOCTYPE html>
<html lang="en">
<head>
<title>Handyman | Contacts</title>
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
            <li><a href="fundi.php">fundis</a></li>
            <li><a href="customers.php">customers</a></li>
            <li><a href="addfundi.php">Applications</a></li>
            <li class="last"><a href="addadmin.php">Add Admin</a></li>
          </ul>
        </nav>
        
      </div>
     
    </div>
    </header>
    <div class="parent">
      <?php  
$conn = mysqli_connect('localhost', 'root','', 'project');

$query6="select now() as now from dual";
  $result6=mysqli_query($conn, $query6);
  $row6=mysqli_fetch_array($result6);
  $time=$row6['now'];

  $queryd="delete from fundi where status='dormant'  and date_confirmed<=DATE_SUB(now(),INTERVAL 1 DAY_MINUTE);";
  $resultd=mysqli_query($conn,$queryd);


  $query1="select * from fundi";
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
<th>Years of Expirience</th>
<th>Action</th>
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
echo'<td>'.$row["years"].'</td>';
echo '<td><form method="POST" ><input id="fundiid" type="text" name="fundiid" value="'.$row["id"].'">
<input type="submit" name="edit" value="edit"></form></td>';
echo '<td><form method="POST" ><input id="fundiid" type="text" name="fundiid" value="'.$row["id"].'">
<input type="submit" name="delete" value="delete"></form></td>';
echo'</tr>';  
}


  echo"</table>";

 if(isset($_POST['edit'])){
$fundi=$_POST['fundiid'];

 $query="select id, gender, first_name, last_name, phone, email, age, location, occupation, years from fundi where id= $fundi";
  $result1=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
 $id=$row["id"];
$gender=$row["gender"];
$first_name=$row["first_name"];
$last_name=$row["last_name"];
$phone=$row["phone"];
$email=$row["email"];
$age=$row["age"];
$location=$row["location"];
$occupation=$row["occupation"];
$years=$row["years"];
      echo '<form method="post">
  
  <div class="fundi">
    <label>ID</label>
    <input type="text" name="id" value="'.$id.'">
  </div>
  <div  >
    <label>GENDER</label>
    <select name="gender">
      <option>'.$gender.'</option>
      <option>Male</option>
      <option>Female</option>
      </select>
  </div>
  <div class="fundi">
    <label>FIRST NAME</label>
    <input type="text" name="fname" value="'.$first_name.'">
  </div>
  <div>
    <label>LAST NAME</label>
    <input type="text" name="lname" value="'.$last_name.'">
  </div>
  <div class="fundi" >
    <label>PHONE</label>
    <input type="number" name="phone" value="'.$phone.'">
  </div>
<div >
    <label>EMAIL</label>
    <input type="email" name="email" value="'.$email.'">
  </div>
  <div class="fundi">
    <label>AGE</label>
    <input type="number" name="age" min="18" max="60" value="'.$age.'">
</div>
    <div class="fundi">
    <label>LOCATION</label>
    <select name="location">
      <option>'.$location.'</option>
      <option>Dagoretti North</option>
      <option>Dagoretti South</option>
      <option>Embakasi Central</option>
      <option>Embakasi East</option>
      <option>Embasaki South</option>
      <option>Embakasi North</option>
      <option>Embakasi West</option>
      <option>Kamukunji</option>
      <option>Kasarani</option>
      <option>Kibra</option>
      <option>Langata</option>
      <option>Makadara</option>
      <option>Mathare</option>
      <option>Roysambu</option>
      <option>Ruaraka</option>
      <option>Starehe</option>
      <option>Westlands</option>
    </select>
  </div>
  <div >
    <label>OCCUPATION</label>
    <input type="text" name="occupation" value="'.$occupation.'">

  </div>
  <div class="fundi">
    <label>YEARS OF EXPIRIENCE</label>
    <input type="text" name="years" value="'.$years.'">
  </div>
  <div class="fundi">
  <input type="submit" name="update" value="update" class="btn">
  </div>
</form>';
} 
if (isset($_POST['delete'])) {
  $fundi=$_POST['fundiid'];
$query2= "delete from fundi where id=$fundi";
$result2=mysqli_query($conn,$query2);
if ($result2) {
  echo "<div> Deleted successfully.</div>";
}
else{
  echo "<div> Try again</div>";
}

}
?>

<?php
$conn = mysqli_connect('localhost', 'root','', 'project');
if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $gender = $_POST['gender'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone=$_POST['phone'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $location= $_POST['location'];
  $occupation = $_POST['occupation'];
  $years = $_POST['years'];

  if ($id=="" || $gender=="" || $fname==""|| $lname=="" || $phone==""|| $email==""|| $age=="" ||$location==""|| $occupation==""|| $years=="") {

    echo "<div id='all_fields> <p>All fields are required!!</p> </div>";
    # code...
  }
  else{
    $save = "update fundi set id=$id, gender='$gender', first_name='$fname', last_name='$lname', phone='$phone', email='$email', age='$age',location='$location', occupation='$occupation', years='$years' where id=$id";
    if(mysqli_query($conn, $save)){
      echo '<div id="all_fields"> <p>updated successfully</p></div>';
      header('location:fundi.php');
    } 
  else{
echo'<div id="all_fields"> <p>error!!</p></div>';
  }
  }
}

?>
    </div>
  </div>
</div>

</body>
</html>
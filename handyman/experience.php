

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
.about{
  font-size: 1.75em;
  font-family: Arial, Helvetica, sans-serif;
}
.input-group{
  padding: 10px;
  font-size: 1.25em;

}
.input{
  padding: 10px;
  font-size: 1.25em;
  display: none;
}
label{
  padding-right: 5px;

}
.hed{
  float: right;
  margin-right: 50%;
  font-size: 1.25em;
}
#response{
  padding-top: 10%;
}
#response, #ok{
  font-size: 1.25em;
  font-family: times new roman;
}
#ok{
  font-weight: bold;
}
footer{
  padding-top: 30%;
}
#input, select{
  display: block;
  width: 150%;
  border-radius: 5px;
}
#exp{
  margin-top: 10px;
}
.btn{
  display: none;
}
#fail{
  color: red;
  font-weight: bold;
  text-align: center;
  font-size: 15px;
}
#success{
   color: green;
  font-weight: bold;
  text-align: center;
  font-size: 15px;
}

</style>
</head>
<body>
    
        <div>
            <div id="pot">
                <img src="images/logo1n.jpg" alt="" height="150px">
                <p class="no"><b>+254 706-713-590</b></p> 
            </div>
      <?php include('fay.php');?>
</div>
<div class="row">
  
    
      <?php
   $conn = mysqli_connect('localhost', 'root','', 'project');
   $time=(date('Y-m-d'));
   if (isset($_POST['register'])) {

    

  $id = $_POST['id'];
  $gender = $_POST['gender'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone=$_POST['phone'];
  $email = $_POST['email'];
  $birthday = $_POST['age'];
  $minimum= (sprintf("%.0f",(strtotime($birthday))/31536000)) +18;
  $time=(date('Y-m-d'));
  $age=sprintf("%.0f",((strtotime($time)-strtotime($birthday))/31536000));
  $location= $_POST['location'];
  $occupation = $_POST['occupation'];
  $cv = $_POST['cv'];
$bday=strtotime($birthday);
$minstartdate=date('Y-m-d',(strtotime('+18 years', $bday)));
    

    $save = "insert into application values('$id', '', '$gender', '$fname', '$lname', '$phone','$email', '$age','$location', '$occupation', '$cv','','pending')";


   
    if(mysqli_query($conn, $save)){
    echo'<div class="col-md-5">
     <p><b>EXPERIENCE</b></p>
   <div class="input-group">
    <label >Experience</label><br>
    <form method="POST">
   <input style="display:none;" type="number" name="id" value="'.$id.'"><br>
    <label id="exp">company  name</label>&nbsp &nbsp <input id="exp" type="text" name="company_name"><br><label id="exp">Post</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input id="exp" type="text" name="post"><br><label id="exp">start date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input id="exp" type="date" name="startdate" min='.$minstartdate.' max='.$time.'><br><label id="exp">end date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input id="exp" type="date" name="enddate" max='.$time.'><br><label id="exp">Reason for quitting</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input id="exp" type="text" name="reason" required>
    <input style="display:none" type="text" name="minstartdate" value="'.$minstartdate.'">
    <input type="submit" name="add" value="ADD EXPERIENCE"><br>
    
  </form>   
  </div>
  </div>
  

    ';
    
  
     
    } 
  else{
echo'<div style="color:red; text-align:center;"> <p> A user with the same ID already exists. Try again</p></div>';
  }
  
}
    if (isset($_POST['add'])) {
      $aid=$_POST['id'];
      $minstartdate=$_POST['minstartdate'];
     $company_name=$_POST['company_name'];
     $post=$_POST['post'];
     $startdate=$_POST['startdate'];
     $enddate=$_POST['enddate'];
     $reason=$_POST['reason'];
     if($startdate>=$enddate){
      echo '<div id="fail">End date should be greater than startdate</div>';
       $qselect="select * from experience where applicant_id=$aid";
     $qresult=mysqli_query($conn,$qselect);
     echo'<div class="col-md-5">
     <p><b>EXPERIENCE</b></p>
   <div class="input-group">
    <label >Experience</label><br>
    <form method="POST">
   <input style="display:none;" type="number" name="id" value="'.$aid.'"><br>
    <label id="exp">company  name</label>&nbsp &nbsp <input id="exp" type="text" name="company_name"><br><label id="exp">Post</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input id="exp" type="text" name="post"><br><label id="exp">start date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input id="exp" type="date" name="startdate" min='.$minstartdate.' max='.$time.'><br><label id="exp">end date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input id="exp" type="date" name="enddate" max='.$time.'><br><label id="exp">Reason for quitting</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input id="exp" type="text" name="reason" required>

    <input style="display:none" type="text" name="minstartdate" value="'.$minstartdate.'">
   <input type="submit" name="add" value="ADD EXPERIENCE"><br>
    
    
  </form>   
  </div>
  </div>
  

    ';
     echo'
     <div class="col-md-7">
     <table class="table bordered">
      <tr><th>Company name</th><th>Post</th><th>Start Date</th><th>End Date</th><th>Reason for quitting</th><th>Action</th></tr>';
     while ($qrow=mysqli_fetch_assoc($qresult)) {
    echo '<tr><td>'.$qrow['company_name'].'</td><td>'.$qrow['post'].'</td><td>'.$qrow['start_date'].'</td><td>'.$qrow['end_date'].'</td><td>'.$qrow['quitting_reason'].'</td>
     <td><form method="POST">
     <input style="display:none;" type="number" name="aid" value="'.$qrow['applicant_id'].'">
     <input style="display:none;"  type="number" name="jid" value="'.$qrow['job_id'].'"><br>
      <input style="display:none" type="text" name="minstartdate" value="'.$minstartdate.'">
     <input type="submit"name="edit" value="Edit" >
     <input type="submit" name="remove" value="Remove">
     </form></td></tr>';
   }
   echo "</table> </div>";
     }
  //    else{
  //     

  //     $sql="select date_add(now(),interval -age year) as DOB, age from application where id=$aid ";
  //     $resultsql=mysqli_query($conn,$sql);
  //     $sqlrow=mysqli_fetch_array($resultsql);
  //     $age=$sqlrow['age'];
      
  //     $exp=$age -18;


  //     $sq="select SUM(years) as sum from experience where applicant_id=$aid";
  //     $resultsq=mysqli_query($conn,$sq);
  //     $rowsq=mysqli_fetch_array($resultsq);
  //     $totalyears=$rowsq['sum'];
  //     $sumyears=$totalyears +$years;
      
  //     if($sumyears>$exp){
  //       $minstartdate=$_POST['minstartdate'];
  //       // echo'<div id="fail">Your total years of experience exceeds your working age. </div>';
  //         echo'<div class="col-md-5">
  //    <p><b>EXPERIENCE</b></p>
  //  <div class="input-group">
  //   <label >Experience</label><br>
  //   <form method="POST">
  //  <input style="display:none;" type="number" name="id" value="'.$aid.'"><br>
  //   <label id="exp">company  name</label>&nbsp &nbsp <input id="exp" type="text" name="company_name"><br><label id="exp">Post</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input id="exp" type="text" name="post"><br><label id="exp">start date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input id="exp" type="date" name="startdate" min='.$minstartdate.' max='.$time.'><br><label id="exp">end date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input id="exp" type="date" name="enddate" max='.$time.'>
  //   <input style="display:" type="text" name="minstartdate" value="'.$minstartdate.'">
  //   <input type="submit" name="add" value="ADD EXPERIENCE"><br>
  //   <input type="submit" name="done" value="DONE"><br>
    
  // </form>   
  // </div>
  // </div>
  

  //   ';



  //     }
      else{
        $years=sprintf("%.0f",((strtotime($enddate)-strtotime($startdate))/31536000));

     $querye="insert into experience values('','$aid','$company_name','$post','$startdate','$enddate','$years','$reason')";

     $resulte=mysqli_query($conn,$querye);
     $qselect="select * from experience where applicant_id=$aid";
     $qresult=mysqli_query($conn,$qselect);
     
     echo'<div class="col-md-5">
     <p><b>EXPERIENCE</b></p>
   <div class="input-group">
    <label >Experience</label><br>
    <form method="POST">
   <input style="display:none;" type="number" name="id" value="'.$aid.'"><br>
    <label id="exp">company  name</label>&nbsp &nbsp <input id="exp" type="text" name="company_name"><br><label id="exp">Post</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input id="exp" type="text" name="post"><br><label id="exp">start date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input id="exp" type="date" name="startdate" min='.$minstartdate.' max='.$time.'><br><label id="exp">end date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input id="exp" type="date" name="enddate" max='.$time.'><br><label id="exp">Reason for quitting</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input id="exp" type="text" name="reason" required>

    <input style="display:none" type="text" name="minstartdate" value="'.$minstartdate.'">
    <input type="submit" name="add" value="ADD EXPERIENCE"><br>
    </form>
    <form method="POST">
    <input style="display:none;" type="number" name="id" value="'.$aid.'"><br>
    <input type="submit" name="done" value="DONE"><br>
    
  </form>   
  </div>
  </div>
  

    ';
     echo'
     <div class="col-md-7">
     <table class="table bordered">
      <tr><th>Company name</th><th>Post</th><th>Start Date</th><th>End Date</th><th>Reason for quitting</th><th>Action</th></tr>';
     while ($qrow=mysqli_fetch_assoc($qresult)) {
    echo '<tr><td>'.$qrow['company_name'].'</td><td>'.$qrow['post'].'</td><td>'.$qrow['start_date'].'</td><td>'.$qrow['end_date'].'</td><td>'.$qrow['quitting_reason'].'</td>
     <td><form method="POST">
     <input style="display:none;" type="number" name="aid" value="'.$qrow['applicant_id'].'">
     <input style="display:none;" type="number" name="jid" value="'.$qrow['job_id'].'"><br>
     <input style="display:none" type="text" name="minstartdate" value="'.$minstartdate.'">
     <input type="submit"name="edit" value="Edit" >
     <input type="submit" name="remove" value="Remove">
     </form></td></tr>';
   }
   echo "</table> </div>";

 }
}
// }
// }
   if (isset($_POST['remove'])) {
$jid=$_POST['jid'];
$aid=$_POST['aid'];
$minstartdate=$_POST['minstartdate'];


 $delete="delete from experience where job_id=$jid"; 
 $resultd=mysqli_query($conn,$delete);
 if($resultd){
  $qselect="select * from experience where applicant_id=$aid";
     $qresult=mysqli_query($conn,$qselect);
       echo'<div class="col-md-5">
     <p><b>EXPERIENCE</b></p>
   <div class="input-group">
    <label >Experience</label><br>
    <form method="POST">
   <input style="display:none;" type="number" name="id" value="'.$aid.'"><br>
    <label id="exp">company  name</label>&nbsp &nbsp <input id="exp" type="text" name="company_name"><br><label id="exp">Post</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input id="exp" type="text" name="post"><br><label id="exp">start date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input id="exp" type="date" name="startdate" min='.$minstartdate.' max='.$time.'><br><label id="exp">end date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input id="exp" type="date" name="enddate" max='.$time.'>
    <input style="display:none" type="text" name="minstartdate" value="'.$minstartdate.'">
    <br><label id="exp">Reason for quitting</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input id="exp" type="text" name="reason" required>

    <input type="submit" name="add" value="ADD EXPERIENCE"><br>
    </form>
    <form method="POST">
    <input style="display:none;" type="number" name="id" value="'.$aid.'"><br>
    <input style="display:none;" type="number" name="id" value="'.$aid.'"><br>
    <input type="submit" name="done" value="DONE"><br>
    
  </form>   
  </div>
  </div>
  

    ';
     echo'
     <div class="col-md-7">
     <table class="table bordered">
      <tr><th>Company name</th><th>Post</th><th>Start Date</th><th>End Date</th><th>Reason for quitting</th><th>Action</th></tr>';
     while ($qrow=mysqli_fetch_assoc($qresult)) {
    echo '<tr><td>'.$qrow['company_name'].'</td><td>'.$qrow['post'].'</td><td>'.$qrow['start_date'].'</td><td>'.$qrow['end_date'].'</td><td>'.$qrow['quitting_reason'].'</td>
     <td><form method="POST">
     <input style="display:none;" type="number" name="aid" value="'.$qrow['applicant_id'].'">
     <input style="display:none;" type="number" name="jid" value="'.$qrow['job_id'].'"><br>
      <input style="display:none" type="text" name="minstartdate" value="'.$minstartdate.'">
     <input type="submit"name="edit" value="Edit" >
     <input type="submit" name="remove" value="Remove">
     </form></td></tr>';
   }
   echo "</table> </div>";
 }
else{
  echo "error";
} 
}
if (isset($_POST['edit'])) {
$jid=$_POST['jid'];
$aid=$_POST['aid'];
$minstartdate=$_POST['minstartdate'];
$qselect="select * from experience where applicant_id=$aid";
     $qresult=mysqli_query($conn,$qselect);


 $select="select * from experience where job_id=$jid"; 
 $reselect=mysqli_query($conn,$select);
 $rselect=mysqli_fetch_array($reselect);
 if($rselect){
  
       echo'<div class="col-md-5">
     <p><b>EXPERIENCE</b></p>
   <div class="input-group">
    <label >Experience</label><br>
    <form method="POST" action="editexp.php">
    <input  style="display:none;" type="number" name="jid" value="'.$rselect['job_id'].'"><br>
   <input style="display:none;" type="number" name="id" value="'.$rselect['applicant_id'].'"><br>
    <label id="exp">company  name</label>&nbsp &nbsp <input id="exp" type="text" name="company" value="'.$rselect['company_name'].'"><br><label id="exp">Post</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input id="exp" type="text" name="post" value="'.$rselect['post'].'"><br><label id="exp">start date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input id="exp" type="date" name="startdate" min='.$minstartdate.' max='.$time.'><br><label id="exp">end date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input id="exp" type="date" name="enddate" max='.$time.'><br><label id="exp">Reason for quitting</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input id="exp" type="text" name="reason" value="'.$rselect['quitting_reason'].'" required>

    <input style="display:none" type="text" name="minstartdate" value="'.$minstartdate.'">

    <input type="submit" name="up" value="UPDATE"><br>
    </form>
    <form method="POST">
    <input style="display:none;" type="number" name="id" value="'.$aid.'"><br>
    <input type="submit" name="done" value="DONE"><br>
    
  </form>   
  </div>
  </div>
  

    ';
     echo'
     <div class="col-md-7">
     <table class="table bordered">
      <tr><th>Company name</th><th>Post</th><th>Start Date</th><th>End Date</th><th>Reason for quitting</th><th>Action</th></tr>';
     while ($qrow=mysqli_fetch_assoc($qresult)) {
    echo '<tr><td>'.$qrow['company_name'].'</td><td>'.$qrow['post'].'</td><td>'.$qrow['start_date'].'</td><td>'.$qrow['end_date'].'</td><td>'.$qrow['quitting_reason'].'</td>
     <td><form method="POST">
     <input style="display:none;" type="number" name="aid" value="'.$qrow['applicant_id'].'">
     <input style="display:none;"  type="number" name="jid" value="'.$qrow['job_id'].'"><br>
      <input style="display:none" type="text" name="minstartdate" value="'.$minstartdate.'">
     <input type="submit"name="edit" value="Edit" >
     <input type="submit" name="remove" value="Remove">
     </form></td></tr>';
   }
   echo "</table> </div>";

  
 }
else{
  echo "error";
}

}
if (isset($_POST['done'])){
  $id=$_POST['id'];
  $query6="select now() as now from dual";
  $result6=mysqli_query($conn, $query6);
  $row6=mysqli_fetch_array($result6);
  $time=$row6['now'];

  $done="update application set date='$time', years=(select sum(years) from experience where applicant_id=$id) where id=$id";
  $resdone=mysqli_query($conn,$done);

  echo '<div style="padding:10%; font-weight:bold;">Thankyou for applying.Your application has been received and is being processed. Our feedback will be sent via email.</div>';
}



  
      ?>
  </div>




</body>
</html>
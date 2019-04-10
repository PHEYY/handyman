<?php 
$conn = mysqli_connect('localhost', 'root', '', 'project');
session_start();
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $Password = $_POST['password'];
if($username!=""&& $Password!=""){
	  $password1 = md5($_POST['password']);
$query="select * from customer where user_name='$username' and password='$password1'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$resultcheck=mysqli_num_rows($result);
if ($resultcheck==1) {
  $_SESSION['username']=$username;
  header('location:customerpage1.php');
}
else{
 // header('location:customerlogin.php');
   echo '<div><p>INVALID USERNAME/PASSWORD</p></div>';
}
}
   
else{
  // header('location:customerlogin.php');
  echo "<div> <p>Your usename and password are required!!</p> </div>";
}
}
?>
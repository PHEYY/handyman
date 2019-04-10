<?php 
$conn = mysqli_connect('localhost', 'root', '', 'project');
session_start();
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $Password = $_POST['password'];
 
if($email!=""&& $Password!=""){
$password2 = md5($_POST['password']);
$query="select * from fundi where email='$email' and password='$password2'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$resultcheck=mysqli_num_rows($result);
$email1=$row['email'];
$password1=$row['password'];

if ($resultcheck>0) {
  $_SESSION['username']=$email;
  header('location:fundipage1.php');
}
else{
 // header('location:fundilogin.php');
   echo '<div><p>INVALID EMAIL/PASSWORD</p></div>';
}
}
   
else{
  // header('location:fundilogin.php');
  echo "<div> <p>Your email and password are required!!</p> </div>";
}
}
?>
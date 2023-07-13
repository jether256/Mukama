<?php

if(isset($_POST['submit'])){

$mail = mysqli_real_escape_string($con,$_POST['email']);
$pass = mysqli_real_escape_string($con,$_POST['password']);
$pass=hash('sha512',$pass);


$ad=mysqli_query($con,"SELECT * FROM admin WHERE email='$mail' AND pass='$pass'");
$count=mysqli_num_rows($ad);

if($count==1){

$row=mysqli_fetch_array($ad);
// $uid=$row['id'];
// $type=$row['type'];
$ema=$row['email'];

session_regenerate_id();//avoid session hyjacking
//$_SESSION['id'] = $uid;
//$_SESSION['type']=$type;
$_SESSION['email']=$ema;

header("Location:index.php");

echo "<span style='color:green;'>Logged in Successfully</span>";


exit();
	

}else{



		echo "<span style='color:red;'>Wrong email or password</span>";

}
 

}

?>
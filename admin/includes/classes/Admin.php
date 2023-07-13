<?php

class Admin{


	private $admin;
	private $con;


	
	public function __construct($con,$admin){
		$this->con=$con;
		$admin_details=mysqli_query($con,"SELECT * FROM admin WHERE email='$admin'");
		$this->admin=mysqli_fetch_array($admin_details);
	}


	public function editProfile($nem,$mail,$num,$ad,$ar,$pic){

		$adm=$this->admin['email'];

		$nem = mysqli_real_escape_string($this->con,$_POST['name']);
		$mail = mysqli_real_escape_string($this->con,$_POST['email']);
		$num = mysqli_real_escape_string($this->con,$_POST['phone']);
		$ad = mysqli_real_escape_string($this->con,$_POST['add']);
		$ar = mysqli_real_escape_string($this->con,$_POST['area']);
		// $pass = mysqli_real_escape_string($this->con,$_POST['pass']);
		// $pass=hash('sha512',$pass);


		$tmp_name1 = $_FILES['pic']['tmp_name'];
		$path1 =rand(10000,10000000000);
		$final_path1=$path1.$pic;


		$edpro = mysqli_query($this->con, "UPDATE admin SET name='$nem', email='$mail', phone='$num',addd='$ad',descr='$ar' ,pic='$final_path1' WHERE email='$adm'");

		if($edpro){

		move_uploaded_file($tmp_name1,"assets/profile/$final_path1");


		echo "<span style='color:green;'>Profile Updated</span>";

	        header("Location:adminedit.php");

		}else{

				echo "<span style='color:red;'>Profile update failed/span>";
		}

	}


	public function editPass($pass){

	$mail=$this->admin['email'];

	$pass = mysqli_real_escape_string($this->con,$_POST['pass']);
	$pass=hash('sha512',$pass);


	$up_pass=mysqli_query($this->con,"UPDATE admin SET pass='$pass' WHERE email='$mail'");

	if ($up_pass) {

		echo "<span style='color:green;'>Profile Updated</span>";

	        header("Location:editPass.php");

	}

	}





	
}



?>
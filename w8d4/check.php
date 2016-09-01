
<?php

session_start();
$email= $_POST["email"];
$password= $_POST["password"];
$submit = $_POST["submit-btn"];
$_SESSION['login']=false;

if($submit){
	if(!empty($email)&&!empty($password)){
		if($email=="admin@code.edu.az"&&$password=="123456"){
			header('Location:admin.php');
			$_SESSION['login']=true;
		}
		else if($email=="admin@code.edu.az"&& $password!="12345")
		{
			$_SESSION['error']="Shifre sehvdi";
			header('Location:index.php');
		}
		else{
			$_SESSION['error']="Bele admin movcud deyil";
			header('Location:index.php');
		}

	}
	else{
	$_SESSION['error']="Email ve shifrenizi daxil edin";
	header('Location:index.php');
	}

}
else{
	header('Location:index.php');
}


?>
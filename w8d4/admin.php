<?php


session_start();

if($_SESSION['login'])
{
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Welcome Admin Panel</h3>
	<form  action="logout.php" >
		<button>Log out</button>
	</form>
</body>
</html>

<?php
}
else{

	header('Location:index.php');


 } ?>


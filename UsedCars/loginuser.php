<?php 

include ("connection.php");


if (isset($_POST['login'])) 
	{	

		$username=htmlentities(mysqli_real_escape_string($con,$_POST['username']));
		$password=htmlentities(mysqli_real_escape_string($con,$_POST['password']));
		
		if($username=='admin@gmail.com' and $password=='admin123'){
			$_SESSION['username']=$username;
			echo "<script>window.open('admin.php','_self')</script>";
		}
		else{

		$selectuser="select * from users where username='$username' AND  password='$password'";
		$query=mysqli_query($con,$selectuser);
		$checkuser=mysqli_num_rows($query);

		if ($checkuser==1)
		{
			$_SESSION['username']=$username;
			echo "<script>window.open('index.php','_self')</script>";
		}
		else
		{	
			echo "<script>document.getElementById('invalid').innerHTML='*Entered username or password is wrong.*';</script>";
		}
	}
}

if(isset($_POST['register'])){

	$username=htmlentities(mysqli_real_escape_string($con,$_POST['username']));
	$password=htmlentities(mysqli_real_escape_string($con,$_POST['password']));

	$selectuser="select * from users where username='$username' OR  password='$password'";
	$query1=mysqli_query($con,$selectuser);
	$checkuser1=mysqli_num_rows($query1);

	if ($checkuser1==1)
		{
			echo "<script>document.getElementById('invalid').innerHTML='*Username or Password already exists.*';
				document.getElementById('invalid').style['padding-left']='38px';
			</script>";
			exit();
		}
		else
		{	
			$_SESSION['username']=$username;
			$insert="insert into users(username,password)
			values('$username','$password')";
			$query2=mysqli_query($con,$insert);

			
			echo"<script>alert('User successfully added.')</script>";
			echo"<script>window.location='index.php';</script>";
				
		}
}

?>
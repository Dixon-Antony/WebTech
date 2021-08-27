<?php
session_start();	
include ("connection.php");

	if(isset($_POST['add'])){
		$id=$_SESSION['username'];
		$image=htmlentities(mysqli_real_escape_string($con,$_POST['image']));
		$name=htmlentities(mysqli_real_escape_string($con,$_POST['name']));
		$brand=htmlentities(mysqli_real_escape_string($con,$_POST['brand']));
		$price=htmlentities(mysqli_real_escape_string($con,$_POST['price']));
		$contact=htmlentities(mysqli_real_escape_string($con,$_POST['contact']));
		$location=htmlentities(mysqli_real_escape_string($con,$_POST['location']));
		$address=htmlentities(mysqli_real_escape_string($con,$_POST['address']));
		$description=htmlentities(mysqli_real_escape_string($con,$_POST['description']));

		if (filter_var($image, FILTER_VALIDATE_URL)){

				$insert="insert into carsdata(image,username,name,brand,price,contact,location,address,description)
				values('$image','$id','$name','$brand','$price','$contact','$location','$address','$description')";
				$query=mysqli_query($con,$insert);
		}
		else{
		    echo"<script>alert('Enter a valid image URL !');</script>";
		}

		echo"<script>window.location='index.php';</script>";
	}
?>
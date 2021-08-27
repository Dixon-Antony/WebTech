<?php 
			$d=$_GET['id'];
			$con=mysqli_connect("localhost","root","","cars");
	        $approve="update carsdata SET status=2 where(carid='$d')";
			$query3=mysqli_query($con,$approve);
	        header("location:admin.php");
?>
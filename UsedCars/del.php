<?php 
			$d=$_GET['id'];
			$con=mysqli_connect("localhost","root","","cars");
	        $delete="delete from carsdata where(carid='$d')";
			$query3=mysqli_query($con,$delete);
        	header("location:profile.php");
        }
?>
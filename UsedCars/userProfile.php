<?php 
session_start();
include ("connection.php");

	//$img=htmlentities(mysqli_real_escape_string($con,$_POST['img']));
	//$name=htmlentities(mysqli_real_escape_string($con,$_POST['name']));
	//$brand=htmlentities(mysqli_real_escape_string($con,$_POST['brand']));
	//$price=htmlentities(mysqli_real_escape_string($con,$_POST['price']));
	//$location=htmlentities(mysqli_real_escape_string($con,$_POST['location']));
	//$description=htmlentities(mysqli_real_escape_string($con,$_POST['description']));

	$id=$_SESSION['username'];
	$selectcar="select * from carsdata where username='$id'";
	$query=mysqli_query($con,$selectcar);


	while($row=mysqli_fetch_array($query)){
		$image=$row['image'];
		$name=$row['name'];
		$brand=$row['brand'];
		$price=$row['price'];
		$location=$row['location'];
		$description=$row['description'];
		$idx=$row['carid'];
		$username=$row['username'];
		$address=$row['address'];
		$contact=$row['contact'];
		$status=$row['status'];

		if ($status==1){
			$approval='Approved';
		}
		else if($status==0){
			$approval='Yet to Approve';
		}
		else{
			$approval='Denied';
		}

		echo"
			<div class='cars'>
			<img class='car-image' src='${image}'>
				<div class='car-content'>
					<h2 class='price'>₹${price}</h2>
					<h4 class='brand'>${brand}</h4>
					<h5 class='name'>${name}</h5>
					<p class='username'>${username}</p>
					<h5 class='contact'>${contact}</h5>
					<p class='address'>${address}</p>
					<h5 class='location'>${location}</h5>
					<p class='description'>${description}</p>
					<h3 class='approval' id='approval'>${approval}</h3>
					<a href='del.php?id=$idx'><button name='del' class='del'>Delete</button></a>
				</div>	
			</div>
			
			";
	}

?>
<?php 
include ("connection.php");
	
	if(isset($_POST['search'])){
	$element=htmlentities(mysqli_real_escape_string($con,$_POST['searchbox']));
	$selectcar="select * from carsdata where brand='$element' and status=1";
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

		echo"
		<script>document.getElementById('searchResult').innerHTML='SEARCH RESULTS FOR \"$element\"'</script>
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
					<br>
				</div>	
			</div>
		";
	}

	if($element==""){
		
	}
	elseif(mysqli_num_rows($query)==0){
		echo"<script>document.getElementById('searchResult').innerHTML='NO CARS FOUND FOR \"$element\"'</script>";
	}
}
?>
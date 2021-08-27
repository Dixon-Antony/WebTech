<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Your Car</title>
</head>

<style type="text/css">

	*{
		font-family: system-ui;
	}

	body{
		color: white;
		background-image: url('https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YmxhY2slMjB0ZXh0dXJlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80');
		background-repeat: no-repeat;
		background-size: cover;
	}

	.form{
		border: solid 2px;
		border-radius: 10px;
		border-color: darkorange;
		margin-left: 30%;
		margin-right: 30%;
		margin-bottom: 5%;	
		text-align: center;
		font-family: "system-ui";
	}
	input,textarea{
		color: white;
		padding: 10px;
		border-radius: 10px;
		border-color: aquamarine;
		outline: none;
		background: transparent;
		width: 200px;
		height: 35px;

	}
	textarea{
		width: 300px;
		height: 100px;
	}

	button{
		margin-top: 2%;
		text-transform: uppercase;
		color: darkorange;
		background-color: #191B25;
		letter-spacing: 3px;
		margin-top: 25px;
		margin-bottom: 25px;
		padding: 10px 10px;
		border: 1px solid darkorange;
		text-decoration: none;
		outline: none;
		font-family: 'Lexend Tera', sans-serif;
	}
	button:hover{
		letter-spacing: 5px;
		transition:0.5s;
		color: #191B25;
		background-color: darkorange;
		text-decoration: none;
		outline: none;
	}

	.nav-area{
	margin-top:-0.5%;
	text-align: center;
	list-style: none;
	padding: 20px;
	font-size: 20px;
	font-weight: 3px;
	}

	.nav-area li{
		display: inline-block;
		padding: 0 15px;
		text-transform: uppercase;
		color: white;
	}

	.nav-area li:hover{
		transition: 0.3s;
		color: darkorange;
	}
	
	.nav-area .current{
		color: darkorange;
	}

</style>


<body>
	<nav class="menubar">
		<ul class="nav-area">
			<a href="index.php"><li class="" id="">Home</li></a>
			<a href="search.php"><li class="" id="">Search</li></a>
			<a href="addCar.php"><li class="current" id="">Add My Car</li></a>
			<a href="profile.php"><li class="" id="">Profile</li></a>
			<a href="logout.php"><li class="" id="">Logout</li></a>
		</ul>
	</nav>

	<form class="form" method="post">
		<p>Enter Car Brand</p>
		<input name="brand" class="brand1" type="text" placeholder="brand" required>
		<p>Enter Car Name</p>
		<input name="name" class="name1" type="text" placeholder="name" required>
		<p>Enter Car Image URL</p>
		<input name="image" class="image1" type="text" placeholder="image" required>
		<p>Quote the Price (₹)</p>
		<input name="price" class="price1" type="text" placeholder="price" required>
		<p>Contact Number</p>
		<input name="contact" class="contact1" type="text" placeholder="+91" required>
		<p>Car Location</p>
		<input name="location" class="location1" type="text" placeholder="location" required>
		<p>Car Address</p>
		<textarea name="address" class="address1" placeholder="address" required></textarea>
		<p>Describe your car</p>
		<textarea name="description" class="description1" placeholder="description" required></textarea>
		<br>
		<button name="add">Add Now</button>
	</form>
<?php include("carsAdd.php");?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<nav class="menubar">
		<ul class="nav-area">
			<a href="index.php"><li class="" id="">Home</li></a>
			<a href="search.php"><li class="" id="">Search</li></a>
			<a href="addCar.php"><li class="" id="">Add my car</li></a>
			<a href="profile.php"><li class="current" id="">Profile</li></a>
			<a href="logout.php"><li class="" id="">Logout</li></a>
		</ul>
	</nav>
	

	<div class="add">
		<a href="addCar.php"><button class="addButton" >Add my Car</button></a>
	</div>

	<div class = "container">
		<?php include("userProfile.php");?>
	</div>

</body>

</html>
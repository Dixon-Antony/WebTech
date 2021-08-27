<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<nav class="menubar">
		<ul class="nav-area">
			<a href="index.php"><li class="" id="">Home</li></a>
			<a href="search.php"><li class="current" id="">Search</li></a>
			<a href="addCar.php"><li class="" id="">Add my Car</li></a>
			<a href="profile.php"><li class="" id="">Profile</li></a>
			<a href="logout.php"><li class="" id="">Logout</li></a>
		</ul>
	</nav>
	<form method="POST">
	<div class="search">
		<table class="elements">
			<tr>
				<td>
					<input name="searchbox" class ="searchbox" id="searchbox" type="text" placeholder="search car brand" >
				</td>
				<td>
					<button style="background: transparent;border: none;" name="search" class="searchicon"><img src="images/search.png"></button>
				</td>
			</tr>
		</table>
	</div>
	</form>
	
	<div class="searchText" style="text-align: center;margin:35px;">
		<h3 id="searchResult" style="color: white;letter-spacing: 2px;"></h3>
	</div>
	
	<div class = "container">
		<?php include("searchCars.php");?>
	</div>

</body>

</html>
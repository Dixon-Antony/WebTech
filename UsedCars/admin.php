<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<nav class="menubar">
		<ul class="nav-area">
			<a href="admin.php"><li class="current" id="">Approve Cars</li></a>
			<a href="login.php"><li class="" id="">Logout</li></a>
		</ul>
	</nav>
	<div class="searchText" style="text-align: center;margin:35px;">
		<h3 id="approvalList" style="color: white;letter-spacing: 2px;"></h3>
	</div>
	<div class = "container">
		<?php include("adminView.php");?>
	</div>

</body>
<script type="text/javascript" src="script.js"></script>
</html>
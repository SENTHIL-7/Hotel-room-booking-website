<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>HOTEL AVS</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/myStyle.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
<body>

	<div class="topnav" id="myTopnav">
		<a href = "index.php" >Home</a>
		<a href = "aboutus.php">About us</a>
		<a href = "contactus.php">Contact us</a>
		<a href = "gallery.php">Gallery</a>
		<a href = "reservation.php" class="active">Make a reservation</a>
		<a href = "rulesandregulation.php">Rules and Regulation</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
</div>
	
		<div class = "panel panel-default">
			<div class = "panel-body">
				<center><strong><h3>MAKE A RESERVATION</h3></strong></center>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#00ff00;"><?php echo "Price: &#8377; ".$fetch['price'].".00"?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	
	<br />
	<br />

</body>
<script src="myMenu.js"></script>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>
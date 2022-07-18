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
	     <style>
			@media(min-width: 900px){
    .gallary-container{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
    }
}
@media(min-width: 1170px){

    
    .gallary-container{
		display:grid;
        grid-template-columns: repeat(4, 1fr);
		grid-gap: 50px;
    }
   
}
		 </style>
	</head>
<body style="background-color:#222222">
		
	<div class="topnav" id="myTopnav">
		<a href = "index.php" >Home</a>
		<a href = "aboutus.php">About us</a>
		<a href = "contactus.php">Contact us</a>
		<a href = "gallery.php" class="active">Gallery</a>
		<a href = "reservation.php">Make a reservation</a>
		<a href = "rulesandregulation.php">Rules and Regulation</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
</div>
	<div >
		<div">
			<div>
				<center><strong><h3 style="color:white">GALLERY</h3></strong></center>
				<br />
				<br />
				<div class="gallary-container">
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/gallery/1.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/gallery/2.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/gallery/3.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/gallery/4.jpg" width = "250" height = "250"/>
				</div>
				<!-- <br style = "clear:both;" />
				<br /> -->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/gallery/5.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/gallery/6.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/gallery/7.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/gallery/8.jpg" width = "250" height = "250"/>
				</div>
				<!-- <br style = "clear:both;" />
				<br /> -->
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/gallery/9.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/gallery/10.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/gallery/11.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "images/gallery/12.jpg" width = "250" height = "250"/>
				</div>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />

	</div>
</body>
<script src="myMenu.js"></script>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>
<?php
	$msg="";
//if upload button is pressed
if (isset($_POST['upload'])){
	
	//the path to store the uploaded image
	$target="images/".basename($_FILES['image']['name']);
	
	//connect to the database
	$db=mysqli_connect("localhost","root","","photos");
	
	//get all the submitted data from the form
	$image_name=$_FILES['image']['name'];
	$temp_img_name=$_FILES['image']['tmp_name'];
	$folder='images/';
	if (move_uploaded_file($temp_img_name,$folder.$image_name)){
		$msg="Image uploaded successfully!";
		
	}else{
		$img="There was a problem uploading image";
	};
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Image Upload </title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	
</head>

<body>
	<div id="content">
	<form method="post" action="welcome.php" enctype="multipart/form-data">
	<input type="hidden" name="size" value="1000000">
	<div>
		<input type="file" name="image">
	</div>
	<div> 
		<textarea name="text" cols="40" rows="4" placeholder="Say something about this image....">    </textarea>
	</div>
	<div>
		<input type="submit" name="upload" value="Upload image">
	</div>
	</form>
</div>
</body>

</html>
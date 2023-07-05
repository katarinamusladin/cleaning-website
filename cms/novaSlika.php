<?php
include "../wwwStvarna/baza.php";

$file=$_FILES['file'];
$fileName=$file['name'];
$fileType=$file['type'];
$fileTmpName=$file['tmp_name'];
$fileSize=$file['size'];
$fileError=$file['error'];
$extension=pathinfo($fileName, PATHINFO_EXTENSION);
$fileExtension=strtolower($extension);
$allowed=array('jpg','png');

if(in_array($fileExtension, $allowed)){

		$fileNameNew=uniqid("",true).".".$fileExtension;
		echo ($fileNameNew);
		$fileDestination="../wwwStvarna/assets/images/".$fileNameNew;
		$put="assets/images/".$fileNameNew;
		move_uploaded_file($fileTmpName, $fileDestination);
		
		
		
		
	$id = $_GET['id'];
	$slika="assets/images/".$fileNameNew;

    $upit = $conn->prepare("UPDATE usluge set slika='".$slika."' where id='".$id."';");
	$result = $conn->query($upit);
	
	$conn->close();
	
	
	$url="Location: izmjeniUsluge.php?ok=1&idp=".$id;
    header($url);



  } else {
	$urli="Location: izmjeniUsluge.php?ne=1&idp=".$_GET['id'];
	header($urli);
    
  }


?>
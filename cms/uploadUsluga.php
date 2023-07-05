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
		
		
		
		

    $naslov = $_POST['naslov'];
	$tekst = $_POST['tekst'];
	$ben = $_POST['ben'];
	$class= $_POST['tag'];
	$slika="assets/images/".$fileNameNew;
	//$slika="assets/images/blog1.jpg";

    $stmt = $conn->prepare("INSERT INTO usluge (naslov, tekst, ben, class, slika) VALUES (?, ?, ?, ?, ?);");
    $stmt->bind_param("sssss", $naslov, $tekst, $ben, $class, $slika);

    $stmt->execute();
	
	$conn->close();
	
	

    header("Location: dodajUslugu.php?ok=1");



  } else {
	header("Location: dodajUslugu.php?ne=1");
    
  }


?>
<?php

session_start();

if (!(isset($_SESSION['korisnicko_ime']))){
    header("Location: index.php");
    exit();
}
include "../wwwStvarna/baza.php";
if ( strlen($_POST["nnaslov"]) > 0 && strlen($_POST["ntekst"]) > 0 && strlen($_POST["nben"]) > 0 && isset($_POST["tag"])){
$id = $_GET['id'];
$naslov = $_POST['nnaslov'];
$tekst = $_POST['ntekst'];
$ben = $_POST['nben'];
$class= $_POST['tag'];


$stmt = $conn->prepare("UPDATE usluge SET naslov=?, tekst=?, ben=?, class=? WHERE id=?");
$stmt->bind_param("ssssi", $naslov, $tekst, $ben, $class, $id);
$stmt->execute();
$conn->close();
$url="Location: izmjeniUsluge.php?oki=1&idp=".$id;
header($url);
}
else{
	$urli="Location: izmjeniUsluge.php?nope=1&idp=".$_GET['id'];
	header($urli);
}

?>
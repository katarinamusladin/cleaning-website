<?php

session_start();

if (!(isset($_SESSION['korisnicko_ime']))){
    header("Location: index.php");
    exit();
}
include "../wwwStvarna/baza.php";
if ( strlen($_POST["nnaslov"]) > 0 && strlen($_POST["nopis"]) > 0 && strlen($_POST["ntekst"]) > 0 ){
$id = $_GET['id'];
$naslov = $_POST['nnaslov'];
$opis = $_POST['nopis'];
$post = $_POST['ntekst'];


$stmt = $conn->prepare("UPDATE blog SET naslov=?, opis=?, post=? WHERE id=?");
$stmt->bind_param("sssi", $naslov, $opis, $post, $id);
$stmt->execute();
$conn->close();
$url="Location: promjenaBlog.php?oki=1&idp=".$id;
header($url);
}
else{
	$urli="Location: promjenaBlog.php?nope=1&idp=".$_GET['id'];
	header($urli);
}

?>
<?php

session_start();

if (!(isset($_SESSION['korisnicko_ime']))){
    header("Location: index.php");
    exit();
}
include "../wwwStvarna/baza.php";

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM usluge WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$conn->close();
header("Location: promjenaUsluge.php?iz=1");
?>
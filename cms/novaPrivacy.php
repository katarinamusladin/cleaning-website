<?php
include "../wwwStvarna/baza.php";

$novi = $conn -> real_escape_string($_POST['ntekst']);

$upit="update privacy set tekst='".$novi."' where id=1;";
$result = $conn->query($upit);

header('Location: promjenaPrivacy.php?ok=1');
?>
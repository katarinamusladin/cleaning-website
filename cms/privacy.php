<!DOCTYPE html>
<?php
include "baza.php";
?>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="assets/images/logo.png" rel="icon">
  <title>Privacy policy</title>
</head>
<body>
<h1>Privacy policy</h1>
<p><?php
		  $upit="select * from privacy";
		  $result = $conn->query($upit);

		$row = $result->fetch_assoc();
			echo $row["tekst"];
		
		
		  ?></p>
</body>
</html>
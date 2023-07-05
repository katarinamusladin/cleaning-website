<!DOCTYPE html>
<?php
session_start();

if (!(isset($_SESSION['korisnicko_ime']))) {
  header("Location: index.php");
  exit();
}

include "../wwwStvarna/baza.php";
?>
<html>
<head>
<link href="main.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="simditor/styles/simditor.css" />

<script type="text/javascript" src="simditor/site/assets/scripts/jquery.min.js"></script>
<script type="text/javascript" src="simditor/site/assets/scripts/module.js"></script>
<script type="text/javascript" src="simditor/site/assets/scripts/hotkeys.js"></script>
<script type="text/javascript" src="simditor/site/assets/scripts/uploader.js"></script>
<script type="text/javascript" src="simditor/site/assets/scripts/simditor.js"></script>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
 
      table,
      th
       {
        border: 1px solid black;
      }
	  td{
		  font-size:12 px;
		  background-color: #1F9ED8;
		 <!-- padding: 1px; -->
	  }

      tr:nth-child(even) {
        background-color: #eee;
      }
	  .navbar {
			background-color: #333;
			overflow: hidden;
	}
	.navbar a {
		float: left;
		font-size: 16px;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.navbar a:hover {
	background-color: #ddd;
	color: black;
	}
	.navbar a.active {
	background-color: #1F9ED8;
	color: white;
	}

    </style>
</head>
<body>
<header>
	      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="promjenaOnama.php"class="active">ABOUT US</a></li>
		  <li><a href="sviPostovi.php">ALL ARTICLES</a></li>
		  <li><a href="logout.php">LOG OUT</a></li>
        </ul>
      </nav>
</header>
<h1 align="center">Change section "About us" on main site<h1>


<?php
		  $upit="select * from onama";
		  $result = $conn->query($upit);
		  $row = $result->fetch_assoc();
?>
		  
<form action="nova.php" method="post">
  <label for="fname">Unesite novi tekst</label><br>
  <textarea  id="editor" name="ntekst" autofocus>
  <?php
  echo $row["tekst"];
  ?>
	</textarea><br>
  <input type="submit" value="Izmjeni">
</form>
<script>
	var editor = new Simditor({
    textarea: $('#editor')
    //optional options
});
</script>
<?php 
	if (isset($_GET["ok"])){
		echo "Izmjene su napravljene";
	}
?>
</body>
</html>
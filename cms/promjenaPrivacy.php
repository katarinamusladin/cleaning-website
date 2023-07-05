<?php
session_start();

if (!(isset($_SESSION['korisnicko_ime']))) {
  header("Location: index.php");
  exit();
}

include "../wwwStvarna/baza.php";
?>
<!DOCTYPE html>
<html>
<head>
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
		font-size:6 px;
      }
	  td{
		  font-size:6 px;
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
	td {
		font-size:14px;
	}
	

    </style>

<link rel="stylesheet" type="text/css" href="simditor/styles/simditor.css" />

<script type="text/javascript" src="simditor/site/assets/scripts/jquery.min.js"></script>
<script type="text/javascript" src="simditor/site/assets/scripts/module.js"></script>
<script type="text/javascript" src="simditor/site/assets/scripts/hotkeys.js"></script>
<script type="text/javascript" src="simditor/site/assets/scripts/uploader.js"></script>
<script type="text/javascript" src="simditor/site/assets/scripts/simditor.js"></script>
</head>
<body>
<header>
	      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="sviPostovi.php" >ALL ARTICLES</a></li>
		  <li><a href="promjenaPrivacy.php"class="active">PRIVACY POLICY</a></li>
		  <li><a href="promjenaUsluge.php">SERVICES</a></li>
		  <li><a href="logout.php">LOG OUT</a></li>
        </ul>
      </nav>
</header>
<?php 
	if (isset($_GET["ok"])){
		echo "</br>";
		echo '<span style="color:red;"><b>CHANGES WERE MADE!</b></span>';
	}
?>
<h1 align="center">EDIT PRIVACY POLICY<h1>


<?php
		  $upit="select * from privacy";
		  $result = $conn->query($upit);
		  $row = $result->fetch_assoc();
?>
		  
<form action="novaPrivacy.php" method="post">
  <label for="fname">Insert new text:</label><br>
  <textarea  id="editor" name="ntekst" autofocus>
  <?php
  echo $row["tekst"];
  ?>
	</textarea><br>
  <input type="submit" value="Edit">
</form>
<script>
	var editor = new Simditor({
    textarea: $('#editor')
    //optional options
});
</script>

</body>
</html>
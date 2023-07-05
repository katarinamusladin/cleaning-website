<?php
  session_start();

   if (!(isset($_SESSION['korisnicko_ime']))){
	   header("Location: index.php");
	   exit();
   }
include "../wwwStvarna/baza.php";
?>
<!DOCTYPE html>
<html>
<head>
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
</head>
<body>
<header>
	      <nav id="navbar" class="navbar">
        <ul>
          
          <li><a href="sviPostovi.php">ALL ARTICLES</a></li>
		  <li><a href="promjenaPrivacy.php" >PRIVACY POLICY</a></li>
		  <li><a href="promjenaUsluge.php" class="active">SERVICES</a></li>
		  <li><a href="logout.php">LOG OUT</a></li>
        </ul>
      </nav>
</header>
<?php 
	if (isset($_GET["oki"])){
		echo "</br>";
		echo '<span style="color:red;"><b>CHANGES WERE MADE!</b></span>';
	}
?>
<?php 
	if (isset($_GET["nope"])){
		echo "</br>";
		echo '<span style="color:red;"><b>YOU MUST FILL ALL THE FIELDS!</b></span>';
	}
?>
<?php 
	if (isset($_GET["ok"])){
		echo "</br>";
		echo '<span style="color:red;"><b>PICTURE IS UPDATED!</b></span>';
	}
?>
<h1 align="center">EDIT SERVICE<h1>

<?php
$idp=$_GET["idp"];
		  $upit="select * from usluge where id=".$idp.";";
		  $result = $conn->query($upit);
		  $row = $result->fetch_assoc();
?>
	<img src="../wwwStvarna/<?php  echo $row["slika"] ?>" width="400" height="300">
<form action="novaSlika.php?id=<?php echo $row['id'] ?>" method="post" enctype="multipart/form-data">
	<input type="file" name="file"><br>
  <button type="submit" name="submit">Add an image</button>
</form>
<?php 
	if (isset($_GET["ne"])){
		echo "</br>";
		echo '<span style="color:red;"><b>Picture has to be with the .jpg or .png extension!</b></span>';
	}
?>
<br><br>
<form action="novaUsluga.php?id=<?php echo $row['id'] ?>" method="post">
  <label for="fname">Title: </label><br>
    <input type="text" name="nnaslov" value="<?php echo $row['naslov'] ?>" size="200"><br>
<br>

  <label for="fname">Text:</label><br>
  <textarea  id="editor2" name="ntekst" autofocus>
  <?php
  echo $row["tekst"];
  ?>
	</textarea><br>


  <label for="fname">Benefits:  </label><br>
  <textarea  id="editor1" name="nben" autofocus>
  <?php
  echo $row["ben"];
  ?>
	</textarea><br>
	<input type="radio" id="commercial" name="tag" value="commercial">
	<label for="commercial">commercial</label><br>
	<input type="radio" id="residential" name="tag" value="residential">
	<label for="residential">residential</label><br>
	
  <input type="submit" value="Edit">
</form>




<script>
	var editor = new Simditor({
    textarea: $('#editor1')
    //optional options
});
</script>
<script>
	var editor = new Simditor({
    textarea: $('#editor2')
    //optional options
});
</script>





</body>
</html>
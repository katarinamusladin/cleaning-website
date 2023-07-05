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
         
		  <li><a href="sviPostovi.php" class="active">ALL ARTICLES</a></li>
		  <li><a href="promjenaPrivacy.php" >PRIVACY POLICY</a></li>
		  <li><a href="promjenaUsluge.php">SERVICES</a></li>
		  <li><a href="logout.php">LOG OUT</a></li>
        </ul>
      </nav>
</header>
<?php 
	if (isset($_GET["ok"])){
		echo "</br>";
		echo '<span style="color:red;"><b>POST WAS ADDED TO THE WEBSITE!!</b></span>';
	}
	if (isset($_GET["ne"])){
		echo '<script>alert("You have to fill all of the fields!!")</script>';
	}
	
?>
<h1 align="center" >WRITE A BLOG POST</h1>

<h2>Add image</h2>
<!--<form action="upload.php" method="POST" enctype="multipart/form-data" >-->
<form action="upload.php" method="POST" enctype="multipart/form-data">	
	<input type="file" name="file"><br><br>


  <label for="fname"><h2>Title: </h2></label><br>
    <input type="text" name="naslov" value="" size="200"><br>
<br>

  <label for="fname"><h2>Short description of an article (shows on main page)</h2></label><br>
  <textarea  id="editor2" name="opis" autofocus>
  
	</textarea><br>

  <label for="fname"><h2>Article:  </h2></label><br>
  <textarea  id="editor1" name="tekst" autofocus>

	</textarea><br>
  <input type="submit" value="Add" name="Add">
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
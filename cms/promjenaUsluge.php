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


</head>
<body>
<header>
	      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="sviPostovi.php">ALL ARTICLES</a></li>
		  <li><a href="promjenaPrivacy.php">PRIVACY POLICY</a></li>
		  <li><a href="promjenaUsluge.php" class="active">SERVICES</a></li>
		  <li><a href="logout.php">LOG OUT</a></li>
        </ul>
      </nav>
</header>
<h1 align="center">SERVICES<h1>

<a href="dodajUslugu.php" class="button" style="background-color:#1F9ED8;color:black;">ADD NEW SERVICE</a>
  <br><br>


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
		  background-color: #ddd;
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
<?php
$stmt = $conn->prepare("SELECT * FROM usluge");
$stmt->execute();
$result = $stmt->get_result();

$conn->close();

?>
<?php 
	if (isset($_GET["iz"])){
		echo "</br>";
		echo '<span style="color:red;"><b>SERVICE IS DELETED!</b></span>';
	}
?>
	  <table>	  
	  	<tr>
          <th>Title</th>
          <th>Image</th>
          <th>Text</th>
		  <th>Benefits</th>
		  <th>Class</th>
          <th colspan="2">Edit</th>
		  </tr>  
    <?php if (isset($result)) {
      while ($row = mysqli_fetch_assoc($result)) : ?>        
    
        <tr>
          <td><?php echo $row['naslov'] ?></td>
          <td><img src="../wwwStvarna/<?php  echo $row["slika"] ?>" width="200" height="200"></td>		  
          <td><?php echo $row['tekst'] ?></td>
		   <td><?php echo $row['ben'] ?></td>
		   <td><?php echo $row['class'] ?></td>
		  <td><button onclick="window.location.href = 'izmjeniUsluge.php?idp=<?php echo $row['id'] ?>';">Edit</button></td>
          <td><button onclick="window.location.href = 'izbrisiUslugu.php?id=<?php echo $row['id'] ?>';">Delete</button></td>          
		  </tr>
    <?php endwhile;
    } ?>
  </table>

</body>
</html>

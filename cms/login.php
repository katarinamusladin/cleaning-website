<?php

session_start();

include "../wwwStvarna/baza.php";

if (isset($_POST['korisnicko_ime']) && isset($_POST['lozinka'])) {

  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $korisnicko_ime = validate($_POST['korisnicko_ime']);
  $lozinka = validate($_POST['lozinka']);
  if (empty($korisnicko_ime)) {
    header("Location: index.php?error=Korisnicko ime obavezno!");
    exit();
  } else if (empty($lozinka)) {

    exit();
  } else {

    $sql = "SELECT * FROM admin_login WHERE korisnicko_ime='$korisnicko_ime' AND lozinka='$lozinka'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['korisnicko_ime'] === $korisnicko_ime && $row['lozinka'] === $lozinka) {
       
        $_SESSION['korisnicko_ime'] = $row['korisnicko_ime'];
        $_SESSION['id'] = $row['id'];
        header("Location: sviPostovi.php");
        exit();
      } else {

        header("Location: index.php?error=Netočno korisničko ime ili lozinka!");

        exit();
      }
    } else {

      header("Location: index.php?state=loginfailed");

      exit();
    }
  }
} else {

  header("Location: index.php");

  exit();
}
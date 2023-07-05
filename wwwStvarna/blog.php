<!DOCTYPE html>
<?php
include "baza.php";
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Cousins Contract Cleaners</title>
	<link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css?1422585377">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>
  <style>
  .navbar .navbar-nav a.nav-link {
    color: #1e1e1e;   
}
  </style>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>info@cousinscontractcleanersltd.co.uk</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>02082265090</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              
              <li><a href="https://twitter.com/cc_cleanersltd"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://uk.linkedin.com/company/cc-cleanersltd"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://www.instagram.com/cc_cleanersltd/?hl=en"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
   <header class="" style="height: 100px">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php#alt-top"> <img src="assets/images/logo.png" width="60px" top="-10px" alt="image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <!-- <img  -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php#top">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#services">Services</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link current" href="index.php#blog">Blog
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#contact">Contact Us</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>

    <!-- Page Content -->
    <div class=" header-text">  
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
          </div>
        </div>
      </div>
    </div> 

    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
               <!-- <div class="col-md-6 align-self-center">  -->
                  <div class="right-content">
				  <?php
				   $upit="select * from blog where id=".$_GET['ok'].";";
					$result = $conn->query($upit);

				while($row = $result->fetch_assoc()) {
				echo '<span></span>
                    <h2>'.$row["naslov"].'</h2>
					<p> <img src="'.$row["slika"].'"  alt="Image"  id="hp"  width="400px" />'.$row["post"].'</p>';
				  //if (isset($_GET["ok"])){
				
				 }
				  ?>
                    
				  
                  </div>
                </div>
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  

    

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2> <em>Read More</em></h2>
              <span>More articles</span>
            </div>
          </div>
          <?php
			$upit="select * from blog";
		    $result = $conn->query($upit);
			while($row = $result->fetch_assoc()) {
			echo '<div class="col-md-4">
              <div class="service-item">
                <img src="'.$row["slika"].'" alt="">
                <div class="down-content">
				<div class="content">
				<h4>'.$row["naslov"].'</h4>
				<p>'.$row["opis"].'</p>
				</div>
				<a href="blog.php?ok='.$row["id"].'" class="filled-button">Read More</a>
				</div>

              </div>
            </div>';
			}
			?>
              
           <!--  <div class="col-md-4">
              <div class="service-item">
                <img src="assets/images/blog2.jpg" alt="">
                <div class="down-content">
				<div class="content">
				<h4>How to Choose the Right Cleaning Company for Your Business</h4>
				<p>A clean and well-maintained workplace can have a positive impact on your business, 
				from improving the health and safety of employees to creating a more professional image 
				for clients and customers. With so many cleaning companies to choose from, it can be difficult to know where to start. </p>
				</div>
				<a href="blog.php" class="filled-button">Read More</a>
				</div>

              </div>
            </div>
              
                <div class="col-md-4">
              <div class="service-item">
                <img src="assets/images/blog3.jpg" alt="">
                <div class="down-content">
				<div class="content">
				<h4>The Importance of Cleaning in Schools and Nurseries</h4>
				<p>Schools and nurseries play a critical role in shaping the future of our children, making it imperative 
				that they are kept clean and healthy environments. With the COVID-19 pandemic, the importance of regular cleaning 
				has become even more pronounced, as the risk of infection and the spread of germs has increased.</p>
				</div>
				<a href="blog.php" class="filled-button">Read More</a>
				</div>

              </div>
            </div>
              
              <div class="col-md-4">
              <div class="service-item">
                <img src="assets/images/blog2.jpg" alt="">
                <div class="down-content">
				<div class="content">
				<h4>The Importance of Cleaning in Schools and Nurseries</h4>
				<p>Schools and nurseries play a critical role in shaping the future of our children, making it imperative 
				that they are kept clean and healthy environments. With the COVID-19 pandemic, the importance of regular cleaning 
				has become even more pronounced, as the risk of infection and the spread of germs has increased.</p>
				</div>
				<a href="blog.php" class="filled-button">Read More</a>
				</div>

              </div>
            </div>
              
               <div class="col-md-4">
              <div class="service-item">
                <img src="assets/images/blog1.jpg" alt="">
                <div class="down-content">
				<div class="content">
				<h4>The Importance of Electrostatic Disinfection in the Fight Against COVID-19</h4>
				<p>The COVID-19 pandemic has made it clear that keeping our spaces clean and disinfected is more important than ever. 
				While traditional cleaning methods can help reduce the spread of germs, they may not be enough to fully eliminate the virus. 
				This is where electrostatic disinfection comes in.</p>
				</div>
				<a href="blog.php" class="filled-button">Read More</a>
				</div>

              </div>
            </div> -->
              
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Cousins Contract Cleaners</h4>
            <p>For reliable, professional cleaning, get in touch.</p>
            <ul class="social-icons">
             <!-- <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a>
              </li> -->
              <li><a href="https://twitter.com/cc_cleanersltd"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://uk.linkedin.com/company/cc-cleanersltd"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://www.instagram.com/cc_cleanersltd/?hl=en"><i class="fa fa-instagram"></i></a></li> 
            </ul>
          </div>
          <div class="col-md-3 footer-item">
           <!-- <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="#">Vivamus ut tellus mi</a></li>
              <li><a href="#">Nulla nec cursus elit</a></li>
              <li><a href="#">Vulputate sed nec</a></li>
              <li><a href="#">Cursus augue hasellus</a></li>
              <li><a href="#">Lacinia ac sapien</a></li>
            </ul> -->
          </div>
          <div class="col-md-3 footer-item">
          <!--  <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">About Us</a></li>
              <li><a href="#">How We Work</a></li>
              <li><a href="#">Quick Support</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul> -->
          </div>
          
        </div>
      </div>
    </footer>

    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy  <span style="color:#1f9ed8">  Cousins Contract Cleaners</span>  </p>

              <p> Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
			 
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
	
	
	
	

  </body>
</html>
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
  <!--  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
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

  <!-- Commercial cleaning modal -->
  <div class="modal fade" id="commercialModal" tabindex="11" role="dialog" aria-labelledby="commercialModalNaslov"
    aria-hidden="true">
    <div class="modal-dialog mw-100 mx-5" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="commercialModalNaslov">Cleaning Services</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body py-3">
          <div class="">
            <div class="container-fluid">
              <div class="row" id="tabs">			  
                <div class="col-md-4">
					<ul>
                  
				  <?php
				  $squpit="select * from usluge";
				  $re= $conn->query($squpit);
				  
				  while ($row= $re->fetch_assoc()){
				  echo '

				<li class="'.$row["class"].'"><a href="#tabs-'.$row["id"].'">'.strtoupper($row["naslov"]).'<i class="fa fa-angle-right"></i></a></li>

				';}
				?>
					</ul>
				</div>
				<div class="col-md-8">
                  <section class="tabs-content"> 
				<?php
				  $sqlupit="select * from usluge";
				  $res= $conn->query($sqlupit);
				  
				  while ($row= $res->fetch_assoc()){
				  echo '

                    <article id=tabs-'.$row["id"].'>
                      <div class="container">
                        <div class="row align-items-center">
                          <div class="col-12 col-lg-6">
						   <img src="'.$row["slika"].'" alt="">
                          </div>
                          <div class="col-12 col-lg-6">
                            <h4>'.$row["naslov"].'</h4>
                            <p>'.$row["tekst"].'</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <h4><span style="color: #1F9ED8;">BENEFITS</span></h4>
                            <ul style="list-style:disc !important">
                              '.$row["ben"].'
                            </ul>
                          </div>
                        </div>
                      </div>
                    </article>   
						  ';}
						  
				  ?>
				  </section>
				  </div>					
                    
                  
              </div>
            </div>
          </div>
        </div>
		
		
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-xs-12">
          <ul class="left-info">
            <li><a href="mailto: info@cousinscontractcleanersltd.co.uk"><i
                  class="fa fa-clock-o"></i>info@cousinscontractcleanersltd.co.uk</a></li>
            <li><a href="tel: +3852082265090"><i class="fa fa-phone"></i>02082265090</a></li>
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
        <a class="navbar-brand" href="#top"> <img src="assets/images/logo.png" width="60px" top="-10px" alt="image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <!-- <img  -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link current" href="#top">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <section id="top">
    <div class="main-banner header-text" id="top">
      <div class="Modern-Slider">
        <!-- Item -->
        <div class="item item-1">
          <div class="img-fill">
            <div class="text-content">

              <h4>COUSINS CONTRACT CLEANERS</h4>
			  <h5 style="color:white";>“Professional services, pristine results”</h5><br>
              <p>We offer a range of services for commercial or residential<br>cleaning, throughout London, Hertfordshire and
                surrounding
                areas.</p>
              <p>No job is too big or small. </p>
              <a href="#contactus" class="filled-button">contact us</a>
            </div>
          </div>
        </div>
        <!-- // Item -->
        <!-- Item -->

        <!-- // Item -->
        <!-- Item -->

        <!-- // Item -->
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Request a call back</h4>
            <span>Contact us for a consultation and find out how we can help keep your
			business or property looking its best.</span>
          </div>
          <div class="col-md-4">
            <a href="#contactus" class="border-button">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <section id="about">
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
          <p align="center" style="font-size:20px;">Cousins Contract Cleaner Ltd. is a leading cleaning company that specialises in commercial
		and residential cleaning. With a focus on providing exceptional and professional cleaning
		services, we have established a reputation for excellence in the cleaning industry.<br><br>
		
		
		Our service area includes Hertfordshire, London, and the surrounding counties, giving us a
		wide reach to meet the cleaning needs of both commercial and residential clients. Whether
		you need regular cleaning services or a one-time deep clean, we have the experience and
		expertise to get the job done right.<br><br>
		At Cousins Contract Cleaner Ltd., we are committed to providing exceptional customer
		service. Our friendly and professional staff are always ready to answer any questions you
		may have and work with you to create a cleaning plan that meets your specific needs and
		budget.
		If you are in need of a reliable and efficient cleaning company, look no further, Contact us
		today to schedule your first cleaning appointment!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- <div class="fun-facts">
    <div class="container">
      <div class="row">

        <h1 align="center"> MORE CONTENT GOES HERE </h1>
      </div>
    </div>
  </div> -->

  <section id="services">
    <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="assets/images/more-info.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <h2 style="color: #1F9ED8;">COMMERCIAL CLEANING</h2>
                    <p>We offer high quality commercial cleaning services to businesses in London, Hertfordshire &
					surrounding counties. Our experienced cleaners use the latest technologies to keep your
					premises spotless & germ-free. We offer flexible scheduling & customised plans to meet
					your unique needs at a competitive price. Invest in a clean & hygienic work environment for
					improved productivity & well-being with Cousins Contract Cleaners</p>
                    <a href="#" onclick="modalFunction('commercial')" class="btn btn-primary" data-toggle="modal"
                      data-target="#commercialModal" class="filled-button">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="more-info" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="more-info-content">
            <div class="row">
              <div class="col-md-6">
                <div class="left-image">
                  <img src="assets/images/more-info1.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 align-self-center">
                <div class="right-content">

                  <h2 style="color: #1F9ED8;">RESIDENTIAL CLEANING</h2>
                  <p>We understand that your home is more than just a building, it's a reflection of you
				and your family's lifestyle.<br> That's why we take pride in offering customised cleaning
		solutions that meet your unique needs and preferences. Whether you need a one-
			time deep clean, weekly maintenance, or anything in between, we've got you covered. <br>
		</p>
                  <a href="#" onclick="modalFunction('residential')" class="btn btn-primary" data-toggle="modal"
                    data-target="#commercialModal" class="filled-button">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">

              <div class="testimonial-item">
                <div class="inner-content">
                  <div>
                    <h4>Demi C</h4>
                    <span>Carpet cleaning</span>
                    <p>“Great communication leading up to the service. Quick, tidy and efficient work. The carpet came out looking great!.”​</p>
                  </div>
                </div>
                <!--<img src="http://placehold.it/60x60" alt=""> -->
              </div>

              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Jonathan F</h4>
                  <span>End of tenancy clean</span>
                  <p>"Adrian and co helped with end of tenancy cleaning and provided a thorough and professional service that was 
				  well received by my next tenants. Would highly recommend them for the future and will certainly be employing their services again.​"</p>
                </div>
              <!--  <img src="http://placehold.it/60x60" alt=""> -->
              </div>
			  <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Jay P</h4>
                  <span>After builders clean</span>
                  <p>“Cousins contract cleaners offered a very fair price for their work. Communication was clear throughout and regarding the 
				  clean itself, the cleaners worked
				very hard throughout the day, non stop to complete
			what was a very big job. Very happy overall with the
			service”</p>
                </div>
              <!--  <img src="http://placehold.it/60x60" alt=""> -->
              </div>
			  
			  <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Youcef L</h4>
                  <span>Electrostatic disinfection</span>
                  <p>“What a great service to offer at times like these. The guys came and disinfected our vehicles and garage. 
				  Very professional informative and thorough,
					will definitely use again”</p>
                </div>
              <!--  <img src="http://placehold.it/60x60" alt=""> -->
              </div>
			  
			  <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Paulina T</h4>
                  <span>End of tenancy clean</span>
                  <p>“Very nice and friendly team. The clean was done to very high standards. They were honest and efficient. 
				  I will definitely use for any of my new tenancies”</p>
                </div>
              <!--  <img src="http://placehold.it/60x60" alt=""> -->
              </div>

              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Junaid K</h4>
                  <span>Electrostatic disinfection</span>
                  <p>“Had to have a fleet of vehicles disinfected before putting them out on the road. 
				  Only place I could find who would come out to site and do the job and not charge crazy prices. Turned up and did the job well.
					Will definitely be using you guys for more of your cleaning services.”​</p>
                </div>
                <!--<img src="http://placehold.it/60x60" alt=""> -->
              </div>

              

            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="blog">
      <div class="services" id="blog">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2><em>Blog </em></h2>
                <!--<span>Aliquam id urna imperdiet libero mollis hendrerit</span> -->
              </div>
            </div>
			<?php
			$upit="select * from blog";
		    $result = $conn->query($upit);
			$brojac=0;
			
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
           <!-- <div class="col-md-4">
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
            </div>
			
            <div class="col-md-4">
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
			-->
			
			
			
			
          </div>
        
      </div>
	  </div>
    </section>
	
    <section id="contact">
      <div class="callback-form" id="contactus">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Request a <em>call back</em></h2>
                <span>
<?php
                  
                  if (isset($_GET['poslano'])){
                      echo 'Thank you for contacting us! ';
                  }
                  
                  
                  ?>				
				  </span>
              </div>
            </div>
            <div class="col-md-12">
              <div class="contact-form">
                <form id="contact" action="contactform.php" method="POST">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Full Name"
                          required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="email" type="email" class="form-control" id="email" pattern="[^ @]*@[^ @]*"
                          placeholder="E-Mail Address" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject"
                          required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message"
                          required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" name="submit" id="form-submit" class="border-button">Send Message</button>
						
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">

            <div class="partner-item">
              <!-- <img src="assets/images/Accreditation.webp" title="1" alt="1">  -->
              </div>
              <div class="partner-item">
               <!-- <img src="assets/images/client-01.png" title="2" alt="2"> -->
              </div>

              <div class="partner-item">
               <!-- <img src="assets/images/client-01.png" title="3" alt="3"> -->
              </div>

              <div class="partner-item">
               <!--  <img src="assets/images/client-01.png" title="4" alt="4"> -->
              </div>

              <div class="partner-item">
              <!--   <img src="assets/images/client-01.png" title="5" alt="5"> -->
              </div>

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
						<ul>
			<li><a href="privacy.php" target="_blank">Privacy Policy</a></li>
  </ul>
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
            <p>Copyright &copy  <span style="color:#1f9ed8";"font-weight:bold">  Cousins Contract Cleaners </span>  </p>
			
              <p> Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
			 
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/jquery.singlePageNav.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script>
      $(function () {
        // Single Page Nav
        $('#navbarResponsive').singlePageNav({
          'offset': 100,
          'filter': ':not(.external)'
        });

        // On mobile, close the menu after nav-link click
        $('#navbarResponsive .navbar-nav .nav-item .nav-link').click(function () {
          $('#navbarResponsive').removeClass('show');
        });
      });

      const sections = document.querySelectorAll("section");
      const navLi = document.querySelectorAll("header nav .container .collapse ul li");
      window.onscroll = () => {
        var current = "";

        sections.forEach((section) => {
          const sectionTop = section.offsetTop;
          if (pageYOffset >= sectionTop - 200) {
            current = section.getAttribute("id");
          }
        });

        navLi.forEach(li => {
          var a = li.querySelector("a");
          a.classList.remove("current");
          if (a.getAttribute("href").substring(1) == current) {
            a.classList.add("current");
          }
        });
      };

      function modalFunction(tip) {
        if (tip == "commercial")
          var tip2 = "residential";
		 
        else
          var tip2 = "commercial";
	
        var qry = "#tabs div ul ." + tip;
        var qry2 = "#tabs div ul ." + tip2;
        console.log(qry);
        const serviceTabs = document.querySelectorAll(qry);
        const serviceTabs2 = document.querySelectorAll(qry2);
        console.log(serviceTabs);
        var br=0;
        serviceTabs.forEach(el => {
          if (br == 0){
            el.querySelector("a").click();
            br++;
          }
          el.classList.remove("display-none");
        });
        serviceTabs2.forEach(el => {
          el.classList.add("display-none");
        });
      }
	  
	  //za clanke
	  function modalFunction2(clanak) {	
        var qry = "#tabs div ul ." + clanak;
        console.log(qry);
        const articleTabs = document.querySelectorAll(qry);
        console.log(articleTabs);
        var br=0;
        articleTabs.forEach(el => {
          if (br == 0){
            el.querySelector("a").click();
            br++;
          }
          el.classList.remove("display-none");
        });
        
      }


    </script>

   
	

	

</body>

</html>
<!DOCTYPE html>
<html>
<?php 
include "../wwwStvarna/baza.php";
?>
<head>
<style>
*{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
body{
	min-height:100vh;
	background: #1F9ED8;
	display:flex;
	font-family:sans-serif;
	
	
	}
.container{
	margin: auto;
	width:500 px;
	max-width:90%;
	
	}
.container form{
	width:100%;
	height:100%;
	padding:20px;
	background:white;
	border-radius:4px;
	box-shadow: 0 8px 16px rgba(0,0,0,.3);
}
.container form h1{
	text-align:center;
	margin-bottom: 24px;
	color: #222;
	
	}
.container form .form-control{
	width:100%;
	height:40px;
	background:white;
	border-radius: 4px;
	border: 1px solid silver;
	margin: 10px 0 18px 0;
	padding: 0 10px;
	}
.container form .btn{
	margin-left: 50%;
	transform: translateX(-50%);
	width: 120px;
	height: 34px;
	border: none;
	outline: none;
	background: #1F9ED8;
	cursor: pointer;
	font-size: 16px;
	text-transform: uppercase;
	color:white;
	border-radius: 4px;
	transition: .3s;
}



	
</style>
</head>
<body class="text-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-2"></div>
      <div class="col-lg-6 col-md-8 login-box">
        <div class="col-lg-12 login-key">
          <i class="fa fa-key" aria-hidden="true"></i>
        </div>
        

        <div class="col-lg-12 login-form">
          <div class="col-lg-12 login-form">
		  
            <form action="login.php" method="post">
			<h1> Login </h1>
              <div class="form-group">
                <?php if (isset($_GET['error'])) { ?>

                  <p class="error"><?php echo $_GET['error']; ?></p>

                <?php } ?>
                <label class="form-control-label">USERNAME</label>
                <input type="text" name="korisnicko_ime" class="form-control"><br>
              </div>
              <div class="form-group">
                <label class="form-control-label">PASSWORD</label>
                <input type="password" name="lozinka" class="form-control">
              </div>

              <div class="col-lg-12 loginbttm">
                <div class="col-lg-6 login-btm login-text">
                  <!-- Error Message -->
                </div>
                <div class="col-lg-6 login-btm login-button">
                  <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                </div>
              </div>
            </form>
			
          </div>
        </div>
        <div class="col-lg-3 col-md-2"></div>
      </div>
    </div>
    <?php if (isset($_GET["state"])) {
      if ($_GET["state"] === "loginfailed") { ?>
        <div class="alert alert-danger">
          <strong>Incorrect data!</strong> Please try again.
        </div>
    <?php }
    } ?>
  </div>
</body>
</html>
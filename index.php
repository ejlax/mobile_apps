
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Your Carpet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      color: #7AB5D3;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 0px;
    }
    
    .dropdown-menu {
    	background-color: #000000;
    }
    .dropdown-menu label{
    	color: #aaa;
    }
    .modal-header {
    	background-color: #444444;
    	color: #ffffff
    	border-bottom: 0px solid #eee;
    }
    .modal-body {
    	background-color: #444444;
    }
    .modal-header h2{
    	color: #7AB5D3
    }
    .modal-body label{
    	color: #ffffff
    }
    .modal-header button{
    	color: #ffffff
    }
    .modal-body a{
    	color: #7AB5D3;
    }
    .nav a{
    	color: #dddddd;
    }




    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 300px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 300px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 100px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }
    .carousel.carousel-fade .item {
  	opacity:0;
	}

	.carousel.carousel-fade .active.item {
    opacity:1;
	}



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 300px;
      }
      .carousel img {
        width: auto;
        height: 300px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 400px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
    -->
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner navbar-fixed-top">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Your Carpet</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#products">Products</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>  -->
                </ul>
                <ul class='nav pull-right'>
            	<li><a href='#sign-up' data-toggle='modal'>Sign Up</a></li>
            	<li><a class='hidden-desktop' href='#stack1' data-toggle='modal'>Login</a></li>
                <li class='dropdown hidden-tablet hidden-phone'>
            	<a href='#' class='dropdown-toggle' data-toggle='dropdown'><b class='icon-user icon-white'></b>Login<b class='caret'></b></a>
              			<div class='dropdown-menu' style='padding: 15px; padding-bottom: 0px;'>
									<form id='form' class='form' method='post' action='login-beta.php'>
										<fieldset>
  											<label class='UsernameLabel'>Email</label>
												<input type='email' id='Form_Email' name='email' value='' class='InputBox'>
												<label class='PasswordLabel'>Password</label>
												<input type='password' id='Form_Password' name='password' value='' class='InputBox Password'>
												<!--  <input type='hidden' name'file' value='<?echo $_POST['file']; ?>'>  -->
											<input type='submit' id='Form_SignIn' name='Form/Sign_In' value='Sign In' class='btn btn-info'>
										</fieldset>
									</form>
						</div>
          		</li>
          	</ul>	
                  <!--  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>  -->
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://twitter.github.com/bootstrap/assets/img/examples/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Your Carpet</h1>
              <p class="lead">The most simple way to keep your carpet clean!</p>
              <a class="btn btn-large btn-info" data-toggle='modal' href="#sign-up">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://twitter.github.com/bootstrap/assets/img/examples/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Carpet Cleaning Made Easy</h1>
              <p class="lead">Just snap a picture or send an email and your bookkeeping nightmares are over.</p>
              <a class="btn btn-large btn-info" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://twitter.github.com/bootstrap/assets/img/examples/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>The Quick'er' Clean</h1>
              <p class="lead">Simply the fastest way to keep those messy carpets clean.</p>
              <a class="btn btn-large btn-info" href="#">Watch a Demo</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->

      <div class="row">
      	<div class="row">
      	<div class='span12'><h2 class="featurette-heading" align="center" id="products">Service Suite</h2></div>
        <hr class="featurette-divider">
      	</div>
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Deluxe</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Premium</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Ultra-Deep Clean</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette">
        <img id="contact" class="featurette-image pull-right" src="">
        <h2 class="featurette-heading">Contact us Today...<span class="muted">It'll blow your mind.</span></h2>
        <p class="lead">Phone: 1-888-777-6666 or by <a href="#">email.</a></p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img id="about" class="featurette-image pull-left" src="">
        <h2 class="featurette-heading">About Us...<span class="muted">Take a dive</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="">
        <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      
      <div class='modal hide fade' id='stack1'>
      	<div class='modal-header'>
      		<button type='button' class='close' data-dismiss='modal'  aria-hidden='true'>&times;</button>
      		<p><h2>Login</h2></p>
      	</div>
      	<div class='modal-body'>
      							<form id='form' class='form' method='post' action='login-beta.php'>
										<fieldset>
  											<label class='UsernameLabel'>Email</label>
												<input type='email' id='Form_Email' name='email' value='' class='InputBox' required>
												<label class='PasswordLabel'>Password</label>
												<input type='password' id='Form_Password' name='password' value='' class='InputBox Password' required>
												<input type='hidden' name'file' value='<?if(isset($_GET['file'])){echo $_GET['file'];} ?>'>
											<input type='submit' id='Form_SignIn' name='Form/Sign_In' value='Sign In' class='btn btn-info'>
										</fieldset>
										<p class='CreateAccount'>
											<a align='left' href='#stack2' data-toggle='modal'>Forgot password?</a>
										</p>
									</form>
      	</div>
      </div>
            <div class='modal hide fade' id='sign-up'>
      	<div class='modal-header'>
      		<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
      		<p align='center'><h2>Sign Up</h2></p>
      	</div>
      	<div class='modal-body'>
      		<form method='post' action='sign-up.php' id='register'>
			    <fieldset id='inputs'>
			    	<input id='firstName' name='firstName' type='text' placeholder='First Name' autofocus required>
			        <input id='lastName' name='lastName' type='text' placeholder='Last Name' required>
			        <input id='email1' name='email1' type='email' placeholder='Email' required>
			        <input id='email2' name='email2' type='email' placeholder='Verify Email' required>			          
			        <input id='password' autocomplete='off' name='password' type='password' placeholder='Password' required>
			        <input id='password' autocomplete='off' name='verifyPassword' type='password' placeholder=' Verify Password' required>
			    </fieldset>
			    <fieldset id='actions'>
			        <input type='submit' id='submit'  class='btn btn-info' value='Register'>
			    </fieldset>
			
			</form>
      	</div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Your Carpet, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src='assets/js/jquery.js'></script>
    <script src='assets/js/bootstrap.js'></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <!--  <script src="assets/js/holder.js"></script>  -->
  </body>
</html>

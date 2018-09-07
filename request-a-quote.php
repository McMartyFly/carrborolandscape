<?php
  $firstname_error = $_GET['firstname'];
  $lastname_error = $_GET['lastname'];
  $email_error = $_GET['email'];
  $phone_error = $_GET['phone'];

  if(isset($_GET['emailvalidate'])){
    $email_validate = $_GET['emailvalidate'];
  }
  if(isset($_GET['phonevalidate'])){
    $phone_validate = $_GET['phonevalidate'];
  }

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="img/favicon.jpg"/>
    <meta property="og:title" content="Wright Brothers' Landscaping & Tree Services" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://pittsboropro.com/carrborolandscapes" />
    <meta property="og:image" content="img/wright-brothers-og.jpg" />
    <meta property="og:description" content="ISA Certified Arborist & Licensed Landscape Contractor. Our focus is the sustainability of your trees and landscape. For the cheapest price, call Redneck Tree and Landscapes. For a world-class customer experience, call Wright Brothers' Landscaping and Tree Service. Our family is looking forward to serving yours!" />
    <meta name="author" content="Ideas Envy LLC">

    <title>Wright Brothers' Landscaping & Tree Services</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">


    <!-- signup form links -->
    <script language="JavaScript" src="/scripts/gen_validatorv31.js" type="text/javascript"></script>
  </head>

  <body id="page-top" class="quote">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="img-wrap" href="/carrborolandscape/">
          <img src="img/wrightBrothersLogo.jpg"/>
        </a>
        <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/carrborolandscape/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="request-a-quote.php">Quotes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="photos.html">Photos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payments.html">Payments</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="contact">
      Wright Brothers' Landscaping Service &#183; Carrboro, NC 27510 &#183; 919.260.1865
    </div>

    <header class="quote bg-primary">
      <h1>Landscaping and Tree Service Consultation Request</h1>
      <p>We are happy to provide you with a consultation and a quote for any work needed.<br />Our consultation fee starts at only $75 for up to one hour.<br /> The fee will be credited toward any work that is done.<br /><br />Please complete the form below and we will contact you regarding scheduling and payment for your consultation.</p>
    </header>
    <a id="form-anchor"></a>

    <section id="form" class="quote">
      <!-- Start code for the form-->
      <form method="post" name="myemailform" action="form-to-email.php">
      	<p class="form-f-name">
      		<label for='first_name'>Enter First Name:<span class="req"> (required)</span> </label><br/>
          <?php if ($firstname_error == "error"): ?>
            <span class="form-error">Please Enter Your First Name</span><br/>
          <?php endif ?>
      		<input type="text" name="first_name" placeholder="First Name" value="<?php if($firstname_error != "error") echo htmlentities($firstname_error); ?>">
      	</p>
        <p class="form-l-name">
      		<label for='last_name'>Enter Last Name:<span class="req"> (required)</span> </label><br/>
          <?php if ($lastname_error == "error"): ?>
            <span class="form-error">Please Enter Your Last Name</span><br/>
          <?php endif ?>
      		<input type="text" name="last_name" placeholder="Last Name" value="<?php if($lastname_error != "error") echo htmlentities($lastname_error); ?>">
      	</p>
      	<p class="form-email">
      		<label for='email'>Enter Email Address:<span class="req"> (required)</span></label><br/>
          <?php if ($email_error == "error" || $email_validate == "false"): ?>
            <span class="form-error">Please Enter a Valid Email</span><br/>
          <?php endif ?>
      		<input type="text" name="email" placeholder="me@myemail.com" value="<?php if($email_error != "error") echo htmlentities($email_error); ?>">
      	</p>
        <p class="form-address-first">
      		<label for='address_first'>Address Line 1: </label><br/>
      		<input type="text" name="address_first">
      	</p>
        <p class="form-address-second">
      		<label for='address_second'>Address Line 2:</label><br/>
      		<input type="text" name="address_second">
      	</p>
        <p class="form-city">
      		<label for='address_city'>City:</label><br/>
      		<input type="text" name="address_city">
      	</p>
        <p class="form-state">
      		<label for='address_state'>State:</label><br/>
      		<input type="text" name="address_state">
      	</p>
        <p class="form-zip">
      		<label for='address_zip'>Postal/Zip:</label><br/>
      		<input type="text" name="address_zip">
      	</p>
        <p class="form-phone">
          <label for='phone'>Phone # (123-456-7890):<span class="req"> (required)</span></label><br/>
          <?php if ($phone_error == "error" || $phone_validate == "false"): ?>
            <span class="form-error">Please Enter A Valid Phone #</span><br/>
          <?php endif ?>
      		<input type="tel" name="phone" placeholder="123-456-7890" value="<?php if($phone_error != "error") echo htmlentities($phone_error); ?>">
      	</p>
      	<p class="form-referral">
      		<label for='referral'>How did you hear about our service?</label> <br>
      		<textarea name="referral"></textarea>
      	</p>
        <p class="form-services">
      		<label for='services'>What type of service are you interested in? (Please describe) </label> <br>
      		<textarea name="services"></textarea>
      	</p>
        <p class="form-time">
      		<label for='time'>What is the best day/time to contact you?</label> <br>
      		<textarea name="time"></textarea>
      	</p>
      	<input type="submit" name='submit' value="submit">
      </form>
      <script language="JavaScript">
      // Code for validating the form
      // Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
      // for details
      var frmvalidator  = new Validator("myemailform");
      frmvalidator.addValidation("name","req","Please provide your name");
      frmvalidator.addValidation("email","req","Please provide your email");
      frmvalidator.addValidation("email","email","Please enter a valid email address");
      </script>
      <!-- <p>
        <a href='http://www.html-form-guide.com/email-form/php-form-to-email.html'>PHP form to email article page</a>
      </p> -->
    </section>

    <!-- Footer -->
    <footer class="bg-dark">
      <div class="copyright">
				<p>Exceptional Site Design, Hosting and Support by:</p>
				<a href="http://www.ideasenvy.com" target="_blank">
					<img src="img/ideasenvy-logo-footer.png" alt="Ideas Envy Logo"/>
				</a>

			</div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>

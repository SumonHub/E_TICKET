<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project_SumOn</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/slidefolio.css" rel="stylesheet">
	<!-- Font Awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Header Area -->
    <div id="top" class="header">
     
    </div>
    <!-- /Header Area -->
	  <div id="nav">
    <!-- Navigation -->
    <nav class="navbar navbar-new" role="navigation">
   <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobilemenu">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
	<a href="#" class="navbar-brand">Train E_ticket</a>
  </div>
  <div class="collapse navbar-collapse" id="mobilemenu">

	  <ul class="nav navbar-nav navbar-right text-center">
	    <li><a href="#top"><i class="service-icon fa fa-home"></i>&nbsp;Home</a></li>
        <li><a href="#book_ticket"><i class="service-icon fa fa-info"></i>&nbsp;Book Ticket</a></li>
        <li><a href="#cancel_ticket"><i class="service-icon fa fa-laptop"></i>&nbsp;Cancel Ticket</a></li>
        <li><a href="#route"><i class="service-icon fa fa-camera"></i>&nbsp;Route</a></li>
        <li><a href="#details"><i class="service-icon fa fa-envelope"></i>&nbsp;Your Details</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>
    <!-- /Navigation -->
</div>	
    <!-- About -->
    <div id="book_ticket" class = "style">
      <div class="container">
        <div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
            <h2>Book Ticket</h2>
			<hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
		  <!-- contact form starts -->
            <form action="contact.php" method="post" id="contact-form" class="form-horizontal">
			<fieldset>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Your Name</label>
						      <div class="col-sm-8">
						        <input type="text"  placeholder="Your Name" class="form-control" name="name" id="name" required>
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="email">Email Address</label>
						      <div class="col-sm-8">
						        <input type="text" placeholder="Enter Your Email Address" class="form-control" name="email" id="email" required>
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="subject">Station From</label>
						      <div class="col-sm-8">
							  <select name="station_from" id="station_from" class="form-control" required="required" onchange="get_stn_to(this.value)">
												<option value="0" label=" ===SELECT STATION==="> SELECT STATION</option>
												<option value="dhaka" label="AHASANGANG">Dhaka</option>
												<option value="bogra" label="AKHAURA">Bogra</option>
												<option value="rangpur" label="ALAMDANGA">Rangpur</option>
												<option value="pabna" label="ASHUGANJ">Pabna</option>
   
											</select>
						
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="message">Station to</label>
						      <div class="col-sm-8">
						       <select name="station_to" id="station_to" class="form-control" tabindex="2" required="required" onchange="get_stn_to(this.value)">
												<option value="0" label=" ===SELECT STATION==="> SELECT STATION</option>
												<option value="dhaka" label="AHASANGANG">Dhaka</option>
												<option value="bogra" label="AKHAURA">Bogra</option>
												<option value="rangpur" label="ALAMDANGA">Rangpur</option>
												<option value="pabna" label="ASHUGANJ">Pabna</option>
   
											</select>
						      </div>
						    </div>
							
							<div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Train Name</label>
						      <div class="col-sm-8">
									<select name="train_name" id="station_from" class="form-control" tabindex="2" required="required" onchange="get_stn_to(this.value)">
										<option value="" label=" SELECT STATIOn"> Train Name </option>
										
										<option value="bogra express" label="bogra">Bogra Express</option>
										<option value="rangpur express" label="rangpur">Rangpur Express</option>
										<option value="pabna express" label="pabna">Pabna Express</option>
							

									</select>
							   
						      </div>
						    </div>
							
							<div class="form-group">
						      <label class="col-sm-4 control-label" for="message">Number Of Seat</label>
						      <div class="col-sm-8">
						       <input type="text"  placeholder="5" class="form-control" name="NumOfSeat" id="name" required>
						      </div>
						    </div>
	              <div class="col-sm-offset-4 col-sm-8">
			            <button type="submit" class="btn btn-success">Submit</button>
	    			      <button type="reset" class="btn btn-primary">Cancel</button>
	        			</div>
						</fieldset>
						</form>
				
				<!-- contact form ends -->		
          </div>
        </div>
      </div>
    </div>
    <!-- /About -->
    <!-- Services -->
    <div id="cancel_ticket" class = "style">
      <div class="container">
        <div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
          
			<h2>Cancel Ticket</h2>
			<hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
		  <!-- contact form starts -->
            <form action="database_delete_reservation.php" method="post" id="contact-form" class="form-horizontal">
			<fieldset>
						    
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="email">Email Address</label>
						      <div class="col-sm-8">
						        <input type="text" placeholder="Enter Your Email Address" class="form-control" name="email" id="email" required>
						      </div>
						    </div>
						   
	              <div class="col-sm-offset-4 col-sm-8">
			            <button type="submit0" class="btn btn-success">Submit</button>
	    			      <button type="reset" class="btn btn-primary">Cancel</button>
	        			</div>
						</fieldset>
						</form>
				
				<!-- contact form ends -->		
          </div>
        </div>
      </div>
    </div>
    <!-- /Services -->
	
    <!-- Portfolio -->
    <div id="route" class = "style">
      <div class="container">
        <div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
            <h2>Route</h2>
			<hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
		  <!-- contact form starts -->
            <form action="Search_route.php" method="post" id="contact-form" class="form-horizontal">
			<fieldset>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="subject">Station From</label>
						      <div class="col-sm-8">
							  <select name="station_from" id="station_from" class="form-control" required="required" onchange="get_stn_to(this.value)">
												<option value="0" label=" ===SELECT STATION==="> SELECT STATION</option>
												<option value="dhaka" label="dhaka">Dhaka</option>
												<option value="bogra" label="bogra">Bogra</option>
												<option value="rangpur" label="rangpur">Rangpur</option>
												<option value="pabna" label="pabna">Pabna</option>
   
											</select>
						
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="message">Station to</label>
						      <div class="col-sm-8">
						       <select name="station_to" id="station_to" class="form-control" tabindex="2" required="required" onchange="get_stn_to(this.value)">
												<option value="0" label=" ===SELECT STATION==="> SELECT STATION</option>
												<option value="dhaka" label="dhaka">Dhaka</option>
												<option value="bogra" label="bogra">Bogra</option>
												<option value="rangpur" label="rangpur">Rangpur</option>
												<option value="pabna" label="pagna">Pabna</option>
   
											</select>
						      </div>
						    </div>
							
	              <div class="col-sm-offset-4 col-sm-8">
			            <button type="submit1" class="btn btn-success">Submit</button>
	    			      <button type="reset" class="btn btn-primary">Cancel</button>
	        			</div>
						</fieldset>
						</form>



				<!-- contact form ends -->		
          </div>
        </div>
      </div>
    </div>
    <!-- /Portfolio -->
    <!-- Contact -->
    <div id="details" class = "style">
      <div class="container">
        <div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
            <h2>Your Details</h2>
			<hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
		  <!-- contact form starts -->
            <form action="DatabaseSearch.php" method="post" id="contact-form" class="form-horizontal">
			<fieldset>
						    
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="email">Email Address</label>
						      <div class="col-sm-8">
						        <input type="text" placeholder="Enter Your Email Address" class="form-control" name="email" id="email" required>
						      </div>
						    </div>
							
	              <div class="col-sm-offset-4 col-sm-8">
			            <button type="submit2" class="btn btn-success">Submit</button>
	    			      <button type="reset" class="btn btn-primary">Cancel</button>
	        			</div>
						</fieldset>
						</form>
				
				<!-- contact form ends -->		
          </div>
        </div>
      </div>
    </div>
    <!-- /Contact -->
    <!-- Footer -->
    
    <!-- /Footer -->
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-scrolltofixed-min.js"></script>
	<script src="js/jquery.vegas.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/bootstrap.js"></script>
	
<!-- Slideshow Background  -->
	<script>
$.vegas('slideshow', {
  delay:5000,
  backgrounds:[
     { src:'./img/t6.jpg', fade:2000 },
	 { src:'./img/t2.jpg', fade:2000 },
    { src:'./img/t4.jpg', fade:2000 },
	 { src:'./img/t11.jpg', fade:2000 },
    { src:'./img/t1.jpg', fade:2000 },
    { src:'./img/t3.jpg', fade:2000 },
	   
  ]
})('overlay', {
src:'./img/overlay.png'
});

	</script>
<!-- /Slideshow Background -->

<!-- Mixitup : Grid -->
    <script>
		$(function(){
    $('#Grid').mixitup();
      });
    </script>
<!-- /Mixitup : Grid -->	

    <!-- Custom JavaScript for Smooth Scrolling - Put in a custom JavaScript file to clean this up -->
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
<!-- Navbar -->
<script type="text/javascript">
$(document).ready(function() {
        $('#nav').scrollToFixed();
  });
    </script>
<!-- /Navbar-->
	
  </body>

</html>